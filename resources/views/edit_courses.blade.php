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
            <div class="col-md-3 small">
                <ul class="portfolio-filter style1">
                        <li class="active"><a data-filter=".All" href="/edit_courses">All</a></li>
                        @foreach ($coursecategories as $cc) 
                            <li style="margin:-5px;"><a  style="font-size: 0.9em;" data-filter=".{{$cc->courseid}}" href="#courses">{{$cc->coursename}}<small style="font-size:0.7em;"> ({{$cc->category}})</small></a></li>   
                        @endforeach
                </ul>
            </div>
        <div class="col-md-9 portfolio style2" id="courses">
            <div class="portfolio-wrap clearfix">
                @foreach ($subjectlist as $sc) 
                     
                    
                        <div class="item {{$sc->coursecatid}}" style="@media screen and (min-width: 800px) { width: 25% !important;}">
                            <article class="entry ">
                                <div class="featured-post" style="margin-bottom: 0px !important">
                                        @php
                                        if ($sc->image!="bookcover.jpg"){
                                            $image = $sc->subjectid."/".$sc->image;
                                        }else{
                                            $image = $sc->image; 
                                        @endphp
                                            <a href="/sc/{{$sc->subjectid}}"><img src="images/course/{{$image}}" alt="image"></a>
                                        @php
                                        } 
                                        @endphp
                                    
                                </div>
                                <div class="entry-post">
                                    <h3 class="entry-title" style="font-size: 0.8em !important; line-height: 15px;"><a href="/sc/{{$sc->subjectid}}">{{$sc->subjectname}}</a></h3>
                                    <div class="entry-author">
                                        <div class="btn-group" role="group" aria-label="Button group">
                                            <a class="btn btn-xs btn-primary" href="/edit_course/{{$sc->id}}">Edit</a>
                                            <a class="btn btn-xs btn-warning" href="/sendcc/{{$sc->id}}/{{$sc->subjectname}}">Send</a>
                                            <a class="btn btn-xs btn-success" href="/new_coursecontent/{{$sc->id}}">Add Course Content</a>
                                        </div>
                                        
                                    </div>
                                    
                                </div><!-- entry-post -->
                            </article>
                        </div><!-- item -->
                    
                    
                @endforeach
                
            </div><!-- portfolio-wrap -->
        </div><!-- portfolio --> 
        <div class="row">
            <div class="dividers h30">
                
            </div>
        </div>
    </div><!-- container -->

    <div class="button-style center mg-left2">
        <div class="wrap-btn">
            <a class="flat-btn pdwith57" href="#">VIEW ALL</a>
        </div>
    </div>
</section>
@endsection