<?php

namespace App\Http\Controllers;

use App\coursecatrgories;
use App\subjectlists;
use App\Contents;
use App\Syllabus;
use App\courseregs;
use Auth;
use Illuminate\Http\Request;
use File;

class CoursecatrgoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show','course','coursegroup','lesson','about','management','resources','events','gallery','news','consultancy','brochure_nat','brochure_inter','brochure_cert','brochure_diploma','social_media','searchcourses']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();
        $subjectlist = subjectlists::select('id','subjectname', 'subjectid', 'amount', 'duration', 'category', 'image', 'author', 'coursecatid')->offset(0)->limit(10)->get(); 
        $thismonth = date("M, Y");
        $upcoming = subjectlists::select('id','subjectname', 'subjectid', 'duration', 'coursecategory', 'date1', 'date2', 'date3', 'date4')->whereRaw('date1 = ? or date2 like ? or date3 like ? or date4 like ?', ["%{$thismonth}%","%{$thismonth}%","%{$thismonth}%","%{$thismonth}%"])->offset(0)->limit(10)->get(); 
        $featuredcontent = Contents::all();      
        /* foreach ($coursecategories as $ccc) {
            subjectlists::where('coursecategory', '=', $ccc->coursename)->update(['coursecatid' => $ccc->courseid]);            
        }
        */
        return view('index',['coursecategories'=>$coursecategories, 'subjectlist'=>$subjectlist, 'upcoming'=>$upcoming, 'featuredcontent'=>$featuredcontent]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\coursecatrgories  $coursecatrgories
     * @return \Illuminate\Http\Response
     */
    public function show(coursecatrgories $coursecatrgories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\coursecatrgories  $coursecatrgories
     * @return \Illuminate\Http\Response
     */
    public function edit(coursecatrgories $coursecatrgories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\coursecatrgories  $coursecatrgories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'coursename' => 'required|min:10',
            'image' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $coursecatrgories = coursecatrgories::findOrFail($id);

        //$coursecatrgories->fill($request->all());
    
        //$coursecatrgories->save();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/content'), $imageName);
        }else{                
            $imageName = $request->oldimage;
        }
        
        $coursecatrgories->coursename=$request->coursename;
        $coursecatrgories->category=$request->category;
        $coursecatrgories->description=$request->description;
        $coursecatrgories->remarks=$request->remarks;
        $coursecatrgories->image=$imageName;
        $coursecatrgories->courseid=$request->courseid;
        $coursecatrgories->save();
        

        session()->flash('message','The Course Category: '.$request->coursename.' has been updated successfully!');
        

        return redirect()->back();
    }

    public function updatecourse(Request $request, $id)
    {
        $this->validate($request,[
            'subjectname' => 'required|min:5',
            'image' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $subjectlists = subjectlists::findOrFail($id);

        //$coursecatrgories->fill($request->all());
    
        //$coursecatrgories->save();

        if ($request->hasFile('image')) {
            
            $path = public_path().'/images/course/'.$request->subjectid;
            File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);   
            
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move($path, $imageName);
        }else{                
            $imageName = $request->oldimage;
        }

        if($files=$request->file('images')){
            $path = public_path().'/images/course/'.$request->subjectid;
            File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);

            $i=0;
            foreach($files as $file){
                $name=$i.time().'.'.request()->images->getClientOriginalExtension();
                $file->move($path,$name);
                $i++;
            }
        }
        
        $subjectlists->subjectname=$request->subjectname;
        $subjectlists->category=$request->category;
        $subjectlists->description=$request->description;
        $subjectlists->coursecategory=$request->coursecategory;
        $subjectlists->image=$imageName;
        $subjectlists->duration=$request->duration;
        $subjectlists->date1 = $request->date1from." - ".$request->date1to;
        $subjectlists->date2 = $request->date2from." - ".$request->date2to;
        $subjectlists->date3 = $request->date3from." - ".$request->date3to;
        $subjectlists->date4 = $request->date4from." - ".$request->date4to;

        $subjectlists->date1i = $request->date1fromi." - ".$request->date1toi;
        $subjectlists->date2i = $request->date2fromi." - ".$request->date2toi;
        $subjectlists->date3i = $request->date3fromi." - ".$request->date3toi;
        $subjectlists->date4i = $request->date4fromi." - ".$request->date4toi;

        $subjectlists->venue=$request->venue;
        $subjectlists->venuei=$request->venuei;
        $subjectlists->amounti=$request->amounti;

        $subjectlists->testimony=$request->testimony;
        $subjectlists->student=$request->student;
        $subjectlists->tolearn=$request->tolearn;
        $subjectlists->prerequisite=$request->prerequisite;
        $subjectlists->level=$request->level;

        $subjectlists->save();
        

        session()->flash('message','The Course Category: '.$request->subjectname.' has been updated successfully!');
        

        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\coursecatrgories  $coursecatrgories
     * @return \Illuminate\Http\Response
     */
    public function destroy(coursecatrgories $coursecatrgories)
    {
        //
    }

    public function coursegroup($courseid,$type,$coursename){
        $coursecategories = coursecatrgories::select('id','coursename','category','description','image','remarks','courseid')->get();
        // $subjectlist = subjectlists::select('id','subjectname', 'coursecategory', 'subjectid', 'amount', 'duration', 'category', 'image', 'author', 'coursecatid', 'date1', 'date2', 'date3', 'date4')->where('coursecatid','=',$courseid)->paginate(10); 
        $subjectlist = subjectlists::select('id','subjectname', 'coursecategory', 'subjectid', 'amount', 'duration', 'category', 'image', 'author', 'coursecatid', 'date1', 'date2', 'date3', 'date4')->where('coursecategory','=',$coursename)->paginate(10); 
        $catimage = collect($coursecategories)->where('courseid', $courseid);        
        return view('coursegroup',['coursecategories'=>$coursecategories, 'subjectlist'=>$subjectlist,'type'=>$type, 'catimage'=>$catimage]);
    }

    public function course($subjectid){
        $path = public_path().'/images/course/'.$subjectid;
        File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();
        
        $course = subjectlists::select('id','subjectname', 'description', 'coursecategory', 'subjectid', 'amount', 'duration', 'category', 'image', 'author', 'coursecatid', 'date1', 'date2', 'date3', 'date4')->where('subjectid','=',$subjectid)->first();
        $syllabus = Syllabus::where('subjectid','=',$subjectid)->get(); 
        $ccat = collect($coursecategories)->where('courseid', $course->first()->coursecatid); 
        return view('sc',['coursecategories'=>$coursecategories, 'course'=>$course,'ccat'=>$ccat,'syllabus'=>$syllabus]);
    }

    public function lesson($id){
        
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();
        $syllabus = Syllabus::where('id','=',$id)->first(); 
        $subjectid = $syllabus->subjectid;
        $course = subjectlists::select('id','subjectname', 'description', 'coursecategory', 'subjectid', 'amount', 'duration', 'category', 'image', 'author', 'coursecatid', 'date1', 'date2', 'date3', 'date4')->where('subjectid','=',$subjectid)->first();
        
        $ccat = collect($coursecategories)->where('courseid', $course->first()->coursecatid); 
        return view('lesson',['coursecategories'=>$coursecategories, 'course'=>$course,'ccat'=>$ccat,'syllabus'=>$syllabus]);
    }

    public function edit_coursecategory($id)
    {
        $category = coursecatrgories::where('id','=',$id)->first();
        return view('edit_coursecategory', ['category'=>$category]);
    }

    public function edit_course($id)
    {
        $coursecategories = coursecatrgories::all();
        $course = subjectlists::where('id','=',$id)->first();
        $subjectlist = subjectlists::all();
        
        return view('edit_course', ['course'=>$course,'coursecategories'=>$coursecategories,'subjectlist'=>$subjectlist]);
    }

    public function edit_ccategories()
    {
        $coursecategories = coursecatrgories::all();
        return view('edit_ccategories',['coursecategories'=>$coursecategories]);

    }

    public function edit_courses()
    {
        $coursecategories = coursecatrgories::all()->sortBy('category');
        $subjectlist = subjectlists::all();
        return view('edit_courses',['coursecategories'=>$coursecategories,'subjectlist'=>$subjectlist]);

    }

    public function about()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();

        return view('about',['coursecategories'=>$coursecategories]);
    }

    public function management()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();

        return view('management',['coursecategories'=>$coursecategories]);
    }

    public function resources()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();

        return view('resources',['coursecategories'=>$coursecategories]);
    }

    public function events()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();
        $events = Contents::all();  
        return view('events',['coursecategories'=>$coursecategories,'events'=>$events]);
    }

    public function gallery()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();
        $events = Contents::all();  
        return view('gallery',['coursecategories'=>$coursecategories,'events'=>$events]);
    }

    public function news()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();

        return view('news',['coursecategories'=>$coursecategories]);
    }
    public function consultancy()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();

        return view('consultancy',['coursecategories'=>$coursecategories]);
    }

    public function brochure_nat()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();

        return view('brochure_nat',['coursecategories'=>$coursecategories]);
    }

    public function brochure_inter()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();

        return view('brochure_inter',['coursecategories'=>$coursecategories]);
    }

    public function brochure_cert()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();

        return view('brochure_cert',['coursecategories'=>$coursecategories]);
    }

    public function brochure_diploma()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();

        return view('brochure_diploma',['coursecategories'=>$coursecategories]);
    }

    public function social_media()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();

        return view('social_media',['coursecategories'=>$coursecategories]);
    }

    public function registercourse(Request $request){
        $subjectid = $request->subjectid;
        $amount = $request->amount;
        $subject = subjectlists::where('subjectid','=',$subjectid)->first(); 
        $user = Auth::user();
        courseregs::create([
            'name'=>$user->name,
            'email'=>$user->email,
            'coursename'=>$subject->subjectname,
            'courseid'=>$subjectid,
            'amount'=>$request->amount,
            'dates'=>$request->dates,
            'venue'=>$request->venue,
            'payment'=>"Unpaid",
            'approval'=>"Unapproved"            
        ]);        
        if($subject->amount=="Free"){
            session()->flash('message','Your registration was successful! This course is Free');
            return redirect()->back();
        }else{
            session()->flash('message','Your registration was successful, Please proceed to payment');
            return view('payment',['user'=>$user,'subject'=>$subject,'amount'=>$amount]);
        }
        
    }

    public function paycourse(Request $request, $id){
        $coursetable = courseregs::findOrFail($id);
        $coursetable->payment=$request->amount."/".$request->payername."/".$request->paymentmethod."/".$request->payparticulars."/".$request->bank."/".$request->datedpaid;
        $coursetable->save();
                
        
            session()->flash('message','Your payment details have been received by our accounts department, we will confirm it soon and send you the status soon by email. Thank you for your interest in this course!');
            return redirect('/home');
          
    }

    public function makepayment($id,$amount){

        $subject = subjectlists::where('id','=',$id)->first(); 
        
        return view('payment',['subject'=>$subject,'amount'=>$amount]);
    }

    public function mycourses(){
        $mycourses = courseregs::where('email','=',Auth::user()->email)->get();
        session()->flash('message','My Registered Courses!');
        return view('mycourses',['mycourses'=>$mycourses]);
    }

    public function deletecourse($id){
        $del=courseregs::where('id',$id)->delete();
            session()->flash('message','The selected course has been deleted successfully!');
        return redirect()->back();
    }

    public function mypayments(){
        if(Auth::user()->email!='coinmacsms@gmail.com'){
            $payments = courseregs::where('email','=',Auth::user()->email)->get();
        }else{
            $payments = courseregs::all();
        }
        
        return view('mypayments',['payments'=>$payments]);
    }

    public function approvereg($id){
        
        if(Auth::user()->email!='coinmacsms@gmail.com'){
            session()->flash('message','You dont have the permission to perform this action!');
        }else{
            $regdata = courseregs::where('id',$id)->first();
            $regdata->approval="Confirmed";        
            $regdata->save();
            session()->flash('message','The course payment has been confirmed and approved!');
        }
        return redirect()->back();
    }

    public function searchcourses(Request $request){
        $coursecategory = $request->coursecategory;
        $keyword = $request->keyword;

        $coursecategories = coursecatrgories::select('id','coursename','category','description','image','remarks','courseid')->get();
        // $subjectlist = subjectlists::select('id','subjectname', 'coursecategory', 'subjectid', 'amount', 'duration', 'category', 'image', 'author', 'coursecatid', 'date1', 'date2', 'date3', 'date4')->where('coursecatid','=',$courseid)->paginate(10); 
        $subjectlist = subjectlists::select('id','subjectname', 'coursecategory', 'subjectid', 'amount', 'duration', 'category', 'image', 'author', 'coursecatid', 'date1', 'date2', 'date3', 'date4')->where('subjectname', 'LIKE', '%'.$keyword.'%')->orWhere('coursecategory', 'LIKE', '%'.$coursecategory.'%')->get(); 
        $catimage = collect($coursecategories)->where('coursename', $coursecategory); 

        return view('searchcourses',['coursecategories'=>$coursecategories, 'subjectlist'=>$subjectlist,'catimage'=>$catimage,'coursecategory'=>$coursecategory,'keyword'=>$keyword]);
    }
}
