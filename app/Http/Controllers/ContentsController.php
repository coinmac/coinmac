<?php

namespace App\Http\Controllers;

use App\Contents;
use Illuminate\Http\Request;
use App\coursecatrgories;
use File;


class ContentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','post','gpost','contact_us']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Contents::all();
        return view('contents_list',['contents'=>$contents]);
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
            'title' => 'required|min:3',
            'content' => 'required|min:10',
            'featured_img' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if($request->file('featured_img')){
            $imageName = time().'.'.request()->featured_img->getClientOriginalExtension();

            request()->featured_img->move(public_path('images/content'), $imageName);
        }

        if($files=$request->file('images')){
            $path = public_path().'/images/contents/'.$request->subcategory;
            File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);

            $i=0;
            foreach($files as $file){
                $name=$i.time().'.'.$file->getClientOriginalExtension();
                $file->move($path,$name);
                $i++;
            }
        }
       
        Contents::create([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'content'=>$request->content,
            'category'=>$request->category,
            'subcategory'=>$request->subcategory,
            'type'=>$request->type,
            'author'=>$request->author,
            'status'=>$request->status,
            'featured_img'=>$imageName,
            'ranking'=>$request->ranking
        ]);        
        session()->flash('message','The content:'.$request->title.' has been '.$request->status.' successfully!');
        return redirect(route('publish_contents'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function show(Contents $contents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function edit(Contents $contents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required|min:3',
            'content' => 'required|min:10',
            'featured_img' => 'image|mimes:jpeg,png,jpg|max:2048',            
        ]);

        if($request->file('featured_img')!=""){
            $imageName = time().'.'.request()->featured_img->getClientOriginalExtension();
            request()->featured_img->move(public_path('images/content'), $imageName);
        }else{
            $imageName = $request->featured_old;
        }

        if($files=$request->file('images')){
            $path = public_path().'/images/contents/'.$request->subcategory;
            File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);

            $i=0;
            foreach($files as $file){
                $name=$i.time().'.'.$file->getClientOriginalExtension();
                $file->move($path,$name);
                $i++;
            }
        }
            $contents = Contents::findOrFail($id);
        
            $contents->title=$request->title;
            $contents->subtitle=$request->subtitle;
            $contents->content=$request->content;
            $contents->category=$request->category;
            $contents->subcategory=$request->subcategory;
            $contents->type=$request->type;
            $contents->author=$request->author;
            $contents->status=$request->status;
            $contents->featured_img=$imageName;
            $contents->ranking=$request->ranking;

            $contents->save();
               
        session()->flash('message','The content:'.$request->title.' has been '.$request->status.' successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contents  $contents
     * @return \Illuminate\Http\Response
     */
    public function delete_content($id)
    {
        $contents = Contents::where('id',$id)->first();
        $contents->delete();
        session()->flash('message','The content has been deleted successfully!');
        return redirect()->back();
    }

    public function publish_contents()
    {
        return view('publish_contents');
    }

    public function admin_area()
    {
        return view('admin_area');
    }

    public function post($id)
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();
        $cn = Contents::where('id',$id)->first();  
        return view('post',['coursecategories'=>$coursecategories,'cn'=>$cn]);
    }

    public function edit_content($id)
    {
        $cn = Contents::where('id',$id)->first();  
        return view('edit_content',['cn'=>$cn]);
    }

    public function gpost($id)
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();
        $cn = Contents::where('id',$id)->first();  
        return view('gpost',['coursecategories'=>$coursecategories,'cn'=>$cn]);
    }

    public function contact_us()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();

        return view('contact',['coursecategories'=>$coursecategories]);
    }

    public function signup()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();

        return view('register',['coursecategories'=>$coursecategories]);
    }

}
