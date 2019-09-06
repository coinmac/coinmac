@extends('amaster')
@section('content')
<!-- portfolio-isotope -->
<section class="flat-row bg-theme wrap-price-post">
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="title-section title-height46">
                    <h1 class="title">EDIT COURSES</h1>
                    <div class="sub-title">
                        Select Course To Edit
                    </div>
                </div>
        </div><!-- col.md-12 -->
    </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-md-6" class="row" style="background-color: black;">
                    <div class="row">
                        <h1 class="text-center title" style="color: white;">National Course Categories</h2>
                    </div>
                <div>
                    @php
                    $bgcolors = array("bg-green","bg-red","bg-orange","bg-purple","bg-violet","bg-blue");
                    
                    @endphp
                    @foreach ($coursecategories as $cc) 
                        @if ($cc->category=="National")
                            
                            <div class="col-md-4 col-sm-6">
                                <div class="iconbox bg-style {{$bgcolors[array_rand($bgcolors)]}}">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <small>{{ucwords(strtolower($cc->category))}}</small>
                                        </div>
                                        <div class="box-title" style="margin-top:-15px;">
                                                <a href="/edit_coursecategory/{{$cc->courseid}}">{{ucwords(strtolower($cc->coursename))}}</a>
                                                <small><a href="/sendclist/{{$cc->id}}/{{$cc->coursename}}" class="btn btn-xs btn-primary">Send</a></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif                        
                    @endforeach
                    
                </div>
            </div>
            <div class="col-md-6"  class="row" style="background-color: darkred;">
                <div class="row">
                    <h1 class="text-center title" style="color: white;">International Course Categories</h1>                    
                </div>
                    <div class="row">
                        @php
                        $bgcolors = array("bg-green","bg-red","bg-orange","bg-purple","bg-violet","bg-blue", "lightgreen");
                        
                        @endphp
                        @foreach ($coursecategories as $cc) 
                            @if ($cc->category=="International")
                                
                                <div class="col-md-4 col-sm-6">
                                    <div class="iconbox bg-style {{$bgcolors[array_rand($bgcolors)]}}">
                                        <div class="box-header">
                                            <div class="box-icon">
                                                <small>{{ucwords(strtolower($cc->category))}}</small>
                                            </div>
                                            <div class="box-title" style="margin-top:-15px;">
                                                    <a href="/edit_coursecategory/{{$cc->id}}">{{ucwords(strtolower($cc->coursename))}}</a>
                                                    <small><a href="/sendclist/{{$cc->id}}/{{$cc->coursename}}" class="btn btn-xs btn-primary">Send</a></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif                        
                        @endforeach
                        
                    </div>
                </div>
            
        </div><!-- row -->
    </div><!-- Container -->
        
</section>
@endsection