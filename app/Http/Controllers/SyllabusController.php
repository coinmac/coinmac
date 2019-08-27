<?php

namespace App\Http\Controllers;

use App\Syllabus;
use Illuminate\Http\Request;
use App\coursecatrgories;
use App\subjectlists;
use App\Contents;
use App\User;
use File;

class SyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coursecategories = coursecatrgories::all();
        $users = User::all();
        $subjectlist = subjectlists::select('id','subjectid','subjectname')->get();
        return view('new_coursecontent',['coursecategories'=>$coursecategories,'subjectlist'=>$subjectlist,'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'stitle' => 'required|min:10',
            'simage' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);
        $id = '-';
        $subjectid = $request->subjectid;
        $syllabus = new Syllabus;

        $syllabus->stitle = $request->stitle;
        $syllabus->subjectid = $request->subjectid;
        $syllabus->scontent = $request->scontent;
        $syllabus->surl = $request->surl;
        $syllabus->simage = $request->simage;
        $syllabus->stype = $request->stype;
        $syllabus->scategory = $request->scategory;
        $syllabus->sstatus = $request->sstatus;
        $syllabus->stime = $request->stime;
        $syllabus->sauthor = $request->sauthor;
        $syllabus->sremarks = $request->sremarks;
        $syllabus->soverview = $request->soverview;
        $syllabus->sfee = $request->sfee;


        $syllabus->save();
   
        
        if ($request->hasFile('simage')) {
            $path = public_path().'/images/course/'.$request->subjectid;
            File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);

            $imageName = time().'.'.request()->simage->getClientOriginalExtension();
            request()->simage->move($path, $imageName);  
            error_log($path."/".$imageName);      
        }

        session()->flash('message','The Course Content : '.$request->stitle.' has been added successfully!');
        

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function show(Syllabus $syllabus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function edit(Syllabus $syllabus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Syllabus $syllabus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Syllabus  $syllabus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Syllabus $syllabus)
    {
        //
    }

    public function new_coursecontent($id)
    {
        $coursecategories = coursecatrgories::all();
        $users = User::all();
        $subjectlist = subjectlists::select('id','subjectid','subjectname')->get();
        $sid = collect($subjectlist)->where('id', $id); 
        return view('new_coursecontent',['coursecategories'=>$coursecategories,'subjectlist'=>$subjectlist,'users'=>$users,'sid'=>$sid]);
    }

    public function search($ccategory,$keyword)
    {   
        if($ccategory=="All"){
            $searchresult = subjectlists::where('subjectname', 'LIKE', "%{$keyword}%")->orWhere('description', 'LIKE', "%{$keyword}%")->get();
        }else{
            $searchresult = subjectlists::where('subjectname', 'LIKE', "%{$keyword}%")->orWhere('description', 'LIKE', "%{$keyword}%")->get();
        }
        
        $coursecategories = coursecatrgories::all();
        $users = User::all();
        $subjectlist = subjectlists::select('id','subjectid','subjectname')->get();
        $sid = collect($subjectlist)->where('id', $id); 
        return view('new_coursecontent',['coursecategories'=>$coursecategories,'subjectlist'=>$subjectlist,'users'=>$users,'sid'=>$sid]);
    }
}
