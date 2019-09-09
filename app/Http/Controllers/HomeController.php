<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coursecatrgories;
use App\subscriptions;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $coursecategories = coursecatrgories::select('id','coursename','category','remarks','courseid')->get();
        $subs = subscriptions::all();
        $emails = "";
        foreach($subs as $s){
            $emails.=$s.",";
        }
        return view('home',['coursecategories'=>$coursecategories,'subs'=>$subs,'emails'=>$emails]);
    }

    
    
}
