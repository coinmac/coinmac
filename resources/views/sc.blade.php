@extends('master')
@section('content')
<style>

    .label{color: white !important;}
</style>
<div class="wrap-slider" style="background-image:url('/images/course/{{$course->subjectid}}/{{$course->image}}'); background-size: cover; background-color:darkblue;">
    <div class="container page-container">
        <div class="page-content">
            <div class="page-title">
                <h1 style="text-shadow: 2px 2px #000000;">{{$course->subjectname}}</h1>
                <div class="breadcrumbs">
                    <ul style="text-shadow: 2px 2px #000000;">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li>{{$course->subjectname}}</li>
                    </ul><small>({{$ccat->category}})</small>
                    
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
                                                <span><a href="/coursegroup/{{$course->coursecatid}}/{{$ccat->first()->category}}/{{$course->coursecategory}}">{{$course->coursecategory}}</a></span>
                                            </div>
                                            <h3 class="entry-title"><a href="#">{{$course->subjectname}}</a></h3>
                                            @if ($ccat->category=="National")
                                            <div class="entry-author">
                                                <span>Dates: <a href="#">{{$course->author}}</a></span>
                                                <span class="calendar"> <a href="#" class="label label-primary">{{$course->date1}}</a> <a href="#" class="label label-success">{{$course->date2}}</a> <a href="#" class="label label-warning">{{$course->date3}}</a> <a href="#" class="label label-danger">{{$course->date4}}</a></span>
                                            </div>
                                            @else
                                            <div class="entry-author">
                                                <span>Dates:</span>
                                                <span class="calendar"> <a href="#" class="label label-primary">{{$course->date1i}}</a> <a href="#" class="label label-success">{{$course->date2i}}</a> <a href="#" class="label label-warning">{{$course->date3i}}</a> <a href="#" class="label label-danger">{{$course->date4i}}</a></span>
                                            </div>
                                            @endif
                                        </div><!-- wrap-entry -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="dividers h58">
                                            
                                        </div>
                                        <div class="entry-number">
                                            <div class="entry-count">
                                                COURSE FEE
                                            </div>
                                            @if ($ccat->category=="National")
                                            <div class="entry-price color-green">
                                                            
                                                <span class="price"> {{$course->amount}}</span>
                                            </div>
                                            @else
                                            <div class="entry-price color-green">                                                
                                            <span class="price"> {{$course->amounti}}</span>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div><!-- entry-post -->
                            <div class="featured-post ">
                                <div class="flex-viewport">
                                    <ul class="slides">
                                        @php
                                            $handle = opendir(public_path().'/images/course/'.$course->subjectid);
                                        @endphp
                                        @while($file = readdir($handle))
                                        @if($file !== '.' && $file !== '..')
                                            <li><a href="#"><img src="/images/course/{{$course->subjectid}}/{{$file}}" alt="image"></a></li>
                                        @endif
                                        @endwhile
                                    </ul>
                                </div>
                            </div>
                        </article>
                        
                    </div>
                    <div class="course-text">
                        <h3 class="course-title-text">
                            <a href="#">COURSE INFORMATION</a>
                        </h3>
                        @if ($course->description=="")
                        <p>
                        The course information for this selected course will soon be published on this page. For further enquiries, please call: <b>2348023262908, 09060008932</b> or send us email to: <b>info@coinmac.org</b>.</p>
                        @else
                        {!!$course->description!!}
                        @endif
                        <hr>
                        
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="text-align: center !important;">
                            <h2>Share this page on ...</h2>
                        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_twitter"></a>
                        <a class="a2a_button_whatsapp"></a>
                        <a class="a2a_button_sms"></a>
                        <a class="a2a_button_email"></a>
                        </div>
                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                        
                    </div>
                    <!--
                    <div class="course-testimonials">
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <i class="fa fa-quote-left"></i>
                                <p>{!!$course->testimony!!}</p>
                            </div>
                            <div class="author-comment">
                                <span>{{$course->student}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="course-text content2">
                        <h3 class="course-title-text">
                            <a href="#">WHAT YOU WILL LEARN?</a>
                        </h3>
                        <p>{!!$course->tolearn!!}</p>
                    </div>
                    <div class="course-text style2">
                        <h3 class="course-title-text">
                            <a href="#">REQUIREMENTS / PREREQUISITE</a>
                        </h3>
                        <p>{!!$course->prerequisite!!}</p>
                        
                    </div>
                    -->
                    
                </div>
                <!--
                <div class="wrap-course-syliabus">
                    <h3 class="course-title-text title-sylia">
                        <a href="#">COURSES SYLLABUS</a>
                    </h3>
                    <div class="flat-table-topic">
                        <div class="table-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="title-col1">TITLE</th>
                                        <th class="title-col2">ESTIMATE TIME</th>
                                        <th class="title-col3">TYPE</th>
                                        <th class="title-col4">FREE</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($syllabus)
                                        @foreach ($syllabus as $sy)
                                            <tr>
                                                <td class="icon-play">{{$sy->stitle}}</td>
                                                <td>{{$sy->stime}} Minutes</td>
                                                <td>{{$sy->stype}}</td>
                                                <td class="td-color">{{$sy->sfee}}</td>
                                                <td> <a href="/lesson/{{$sy->id}}" class="btn btn-primary">Read</a></td>
                                            </tr>
                                        @endforeach
                                        
                                    @endisset
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
                -->
                
            </div>

            <div class="col-md-3 col-sm-4 wrap-overflow">
                <div class="sidebar" style="font-size: 0.8 em !important;">
                    <div class="widget widget-button">
                        @if ($ccat->category=="National")
                        <p class="button-free"> {{$course->amount}}</p>
                        @else
                        <p class="button-free"> {{$course->amounti}}</p>
                        @endif
                        <ul class="infomation-free">
                            <li>Length: <span>{{count($syllabus)}}</span></li>
                            <li>Level: <span>{{$course->level}}</span></li>
                            <li>Courses Category:<span>{{$course->coursecategory}}</span></li>
                        </ul>
                        <hr>
                        <br>
                        @if ($ccat->category=="National")
                        <form action="{{route('registercourse')}}" method="post"  style="background-color: lightgreen;">
                            
                            @csrf
                            <input type="hidden" name="subjectid" value="{{$course->subjectid}}">
                            <input type="hidden" name="amount" value="{{$course->amount}}">
                            <div class="form-group">                                
                                    <select class="form-control" name="dates">
                                        <option value="Not Selected" selected>Select Date</option>
                                        <option value="{{$course->date1}}">{{$course->date1}}</option>
                                        <option value="{{$course->date2}}">{{$course->date2}}</option>
                                        <option value="{{$course->date3}}">{{$course->date3}}</option>
                                        <option value="{{$course->date4}}">{{$course->date4}}</option>
                                    </select>
                                </div>
                                <div class="form-group">                                
                                    <select class="form-control" name="venue">
                                        <option value="Not Selected" selected>Select Venue</option>
                                        <option value="Abuja">Abuja</option>
                                        <option value="Lagos">Lagos</option>
                                        <option value="Ibadan">Ibadan</option>
                                        <option value="Port Harcourt">Port Harcourt</option>
                                        <option value="Bauchi">Bauchi</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            <div style="text-align: center">
                                <button class="btn btn-primary btn-xs" type="submit">REGISTER</button>
                            </div>
                        </form>
                        @else
                        <hr><br>
                        <form action="{{route('registercourse')}}" method="post" style="background-color: lightgrey; padding: 5px;">
                                
                            @csrf
                            <input type="hidden" name="subjectid" value="{{$course->subjectid}}">
                            <input type="hidden" name="amount" value="{{$course->amounti}}">
                            <div class="form-group">                                
                                <select class="form-control" name="dates">
                                    <option value="Not Selected" selected>Select Date</option>
                                    <option value="{{$course->date1i}}">{{$course->date1i}}</option>
                                    <option value="{{$course->date2i}}">{{$course->date2i}}</option>
                                    <option value="{{$course->date3i}}">{{$course->date3i}}</option>
                                    <option value="{{$course->date4i}}">{{$course->date4i}}</option>
                                </select>
                            </div>
                            <div class="form-group">                                
                                <select class="form-control" name="venue">
                                    <option value="Not Selected" selected>Select Date</option>
                                    <option value="USA">USA</option>
                                    <option value="DUBAI (U.A.E)">DUBAI (U.A.E)</option>
                                    <option value="INDIA">INDIA</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div style="text-align: center">
                                <button class="btn btn-primary btn-xs" type="submit">REGISTER</button>
                            </div>
                        </form>
                        @endif
                    </div>
                    <!--
                    <div class="widget widget-teacher">
                        <h3 class="widget-title">ABOUT TEACHER</h3>
                        <div class="flat-teammember">
                            <div class="team-image">
                                <img alt="image" src="/images/team/4.jpg">
                            </div>
                            <div class="profile">
                                <h6 class="name"><a href="#">{{$course->author}}</a></h6>
                                <p class="position">INSTRUCTOR</p>
                            </div>
                            <ul class="flat-socials">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget widget-categories">
                        <h3 class="widget-title">SUBJECT LIST</h3>
                        <ul>

                            <li><a href="#">Subject List Comming Up</a></li>
                            
                        </ul>
                    </div>
                    -->
                   
                </div>
            </div>

        </div>
    </div>
</section>
@endsection