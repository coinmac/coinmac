@extends('master')
@section('content')
<style>
    .label{color: white !important;}
</style>
<div class="wrap-slider" style="background-image:url('/images/course/{{$syllabus->subjectid}}/{{$syllabus->simage}}'); background-size: cover; background-color:darkblue;">
    <div class="container page-container">
        <div class="page-content">
            <div class="page-title">
                <h1 style="text-shadow: 2px 2px #000000;">{{$syllabus->stitle}}</h1>
                <div class="breadcrumbs">
                    <ul style="text-shadow: 2px 2px #000000;">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li>{{$course->subjectname}}</li>
                        <li>{{$syllabus->stitle}}</li>

                    </ul>
                </div><!-- breadcrumb -->
            </div><!-- page-title -->
        </div>
    </div><!-- container -->
</div><!-- wrap-slider -->

<!-- Details -->
<section class="flat-row bg-theme pd-top-100 pd-bottom-no">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 wrap-reponsive">
                <div class="wrap-course-details">
                    <div class="portfolio">
                        <article class="entry">
                            <div class="entry-post">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="wrap-entry">
                                            <div class="entry-categories">
                                                <span><a href="/coursegroup/{{$course->coursecatid}}/{{$ccat->first()->category}}">{{$course->coursecategory}}</a></span>
                                            </div>
                                            <h3 class="entry-title"><a href="#">{{$syllabus->stitle}}</a></h3>
                                        
                                        </div><!-- wrap-entry -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="dividers h58">
                                            
                                        </div>
                                        <div class="entry-number">
                                            <div class="entry-count">
                                                COURSE DURATION:<span class="count"> {{$syllabus->stime}}Mins</span>
                                            </div>
                                            <div class="entry-price color-green">
                                                    
                                                FEE:<span class="price"> {{$syllabus->sfee}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- entry-post -->
                            
                        </article>
                        
                    </div>
                    <div class="course-text">
                        <h3 class="course-title-text">
                            <a href="#">OVERVIEW</a>
                        </h3>
                        {!!$syllabus->soverview!!}
                    </div>
                    <div class="course-testimonials">
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <i class="fa fa-quote-left"></i>
                                <p>{!!$syllabus->sremarks!!}</p>
                            </div>
                            <div class="author-comment">
                                <span>{{$syllabus->sauthor}}</span>
                            </div>
                        </div><!-- testimonial -->
                    </div>
                    <div class="course-text content2">
                        <h3 class="course-title-text">
                            <a href="#">COURSE CONTENT</a>
                        </h3>
                        <p>{!!$syllabus->scontent!!}</p>
                    </div>
                   
                </div>
            </div><!-- col-md-9 -->
            <div class="col-md-3 col-sm-4 wrap-overflow">
                <div class="sidebar">
                    <div class="widget widget-button">
                        <p class="button-free"><s>N</s> {{$syllabus->sfee}}</p>
                        <ul class="infomation-free">
                            <li>Length: <span>{{$syllabus->stime}} Minutes</span></li>
                            <li>Type: <span>{{$syllabus->stype}}</span></li>
                            <li>Category:<span>{{$syllabus->scategory}}</span></li>
                            <li><div class="wrap-btn"><a href="{{$syllabus->surl}}" class="flat-btn">Download Material</a></div></li>
                        </ul>
                        
                    </div>
                    <div class="widget widget-teacher">
                        <h3 class="widget-title">ABOUT INSTRUCTOR</h3>
                        <div class="flat-teammember">
                            <div class="team-image">
                                <img alt="image" src="images/authors/{{$syllabus->sauthor}}">
                            </div>
                            <div class="profile">
                                <h6 class="name"><a href="#">{{$syllabus->sauthor}}</a></h6>
                                <p class="position">INSTRUCTOR</p>
                            </div>
                            <ul class="flat-socials">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div><!-- flat-teammember -->
                    </div>
                    <div class="widget widget-categories">
                        <h3 class="widget-title">SUBJECT LIST</h3>
                        <ul>

                            <li><a href="#">Subject List Comming Up</a></li>
                            
                        </ul>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
@endsection