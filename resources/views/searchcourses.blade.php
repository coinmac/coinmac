@extends('master')
@section('content')
    @if (count($subjectlist)>0)
    
        <div class="wrap-slider" style="background-image:url('/images/content/{{$catimage->first()->image}}'); background-size: cover; background-color: teal;">
            <div class="container page-container">
                <div class="page-content">
                    <div class="page-title">
                        
                            
                        
                        <h1 style="text-shadow: 2px 2px #000000;">{{$subjectlist->first()->coursecategory}}</h1>
                        <div class="breadcrumbs">
                            <ul  style="text-shadow: 2px 2px #000000;">
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Search</a></li>
                                <li>{{$subjectlist->first()->coursecategory}}</li>
                            </ul>
                        </div><!-- breadcrumb -->                     
                            
                        
                    </div><!-- page-title -->
                </div>
            </div><!-- container -->
        </div><!-- wrap-slider -->
        @else
            <h1>No Course(s) Found!</h1>
    
        @endif

        <!-- Iconbox -->
        <section class="flat-row bg-theme pd-top-100 ">
            <div class="container">
                <div class="select-category">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="showing">
                                <p>Showing 1-10 of {{count($subjectlist)}} Courses</p>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="select-sort">
                                <div class="wrap-select">
                                    <select class="select-field all-select portfolio-filter" >
                                        <option value="" data-filter=".all" class="active">Select Category</option>
                                        <option value="" data-filter=".bussiness">Bussiness</option>
                                        <option value="" data-filter=".engin">Engineering</option>
                                        <option value="" data-filter=".life">Life Sciences</option>
                                        <option value="" data-filter=".manage">Managenment</option>
                                        <option value="" data-filter=".other">Other</option>
                                        <option value="" data-filter=".tech">Technology</option>
                                    </select>
                                </div>
                                <a href="#" class="sort-col active"></a>
                                <a href="#" class="sort-row"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dividers h30">   
            </div><!-- dividers h30 -->            

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 sidebar-reponsive flat-course-sidebar">
                        <div class="sidebar">
                            <div class="widget widget-categories">
                                <h3 class="widget-title">SEARCH RESULT</h3>
                                <ul>
                                    @foreach ($subjectlist as $scc) 
                                        <li><a href="/sc/{{$scc->subjectid}}" >&#10004; {{$scc->subjectname}}</a></li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                            <div class="widget widget-latest">
                                <h3 class="widget-title">COMING UP THIS MONTH</h3>
                                <ul>
                                    @foreach ($subjectlist as $upc) 
                                    @if (strpos($upc->date1, date("M, Y")) !== false || strpos($upc->date2, date("M, Y")) !== false || strpos($upc->date3, date("M, Y")) !== false || strpos($upc->date4, date("M, Y")) !== false)
                                    
                                        <li>
                                            <div class="thumb">
                                                <img src="images/course/{{$upc->image}}" alt="image">
                                            </div>
                                            <div class="text">
                                                <h6><a href="/sc/{{$upc->subjectid}}">{{$upc->subjectname}}</a></h6>
                                                <p>Date: 
                                                    <span>
                                                        @if (strpos($upc->date1, date("M, Y")) !== false)
                                                            <div class="col-md-6 time-list">                                    
                                                                <p class="text-mon">{{$upc->date1}}</p>                                    
                                                            </div>
                                                        @endif
                                                        
                                                        @if (strpos($upc->date2, date("M, Y")) !== false)
                                                            <div class="col-md-6 time-list">                                    
                                                                <p class="text-mon">{{$upc->date2}}</p>                                    
                                                            </div>
                                                        @endif
                
                                                        @if (strpos($upc->date3, date("M, Y")) !== false)
                                                            <div class="col-md-6 time-list">                                    
                                                                <p class="text-mon">{{$upc->date3}}</p>                                    
                                                            </div>
                                                        @endif
                
                                                        @if (strpos($upc->date4, date("M, Y")) !== false)
                                                            <div class="col-md-6 time-list">                                    
                                                                <p class="text-mon">{{$upc->date4}}</p>                                    
                                                            </div>
                                                        @endif
                                                    </span>
                                                </p>
                                            </div>
                                        </li>
                                    @endif
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8 portfolio-reponsive portfolio-reponsive2">         
                        <div class="portfolio style4">               
                                        
                        <div class="testimonial-content" style="background-color: white; padding: 20px;">
                            <h2>General Overview:</h2>
                            <hr>
                            <i class="fa fa-quote-left"></i>
                            
                            <p>{!!$catimage->first()->description!!}</p>
                            <hr>
                            <p><strong>Status: </strong> {{$catimage->first()->remarks}}</p>
                        </div>                                       
                                        

                            @foreach ($subjectlist as $sc)                            

                                <article class="entry">
                                    @php
                                    if($sc->image!="bookcover.jpg"){
                                        $image = $sc->subjectid.'/'.$sc->image;
                                    @endphp    
                                        <div class="featured-post" style="@media screen and (min-width: 800px) { width: 50% !important; overflow: hidden;} ">
                                            <a href="/sc/{{$sc->subjectid}}"><img src="/images/course/{{$image}}" alt="image"></a>
                                        </div>
                                    @php
                                    }
                                    @endphp
                                    <div class="entry-post">
                                        <div class="entry-categories">
                                            <span><a href="#">{{$sc->coursecategory}}</a></span>
                                        </div>
                                        <h3 class="entry-title"><a href="/sc/{{$sc->subjectid}}">{{$sc->subjectname}}</a></h3>
                                        <div class="entry-author">
                                            <span>Dates: <br>
                                                <a href="#">{{$sc->date1}}</a><br>
                                                <a href="#">{{$sc->date2}}</a><br>
                                                <a href="#">{{$sc->date3}}</a><br>
                                                <a href="#">{{$sc->date4}}</a>
                                            </span>
                                        </div>
                                        <div class="entry-number">
                                            <div class="entry-count">
                                                TOTAL COURSES:<span class="count"> 100</span>
                                            </div>
                                            <div class="entry-price color-green">
                                                COURSE FEE :<span class="green">{{$sc->amount}}</span>
                                            </div>
                                            <div class="wrap-btn" style="float: right">
                                                <a class="flat-btn bg-color" href="/sc/{{$sc->subjectid}}">View / Enroll</a> 
                                            </div>
                                        </div>
                                    </div><!-- entry-post -->
                                </article>
                            @endforeach
                            
                        </div>
                        <div class="row">
                            <div class="dividers h79">   
                            </div><!-- dividers flat30 -->
                        </div>

                        <div class="row">
                            <div class="blog-pagination">
                                <ul class="flat-pagination">
                                        {{ $subjectlist->links() }}
                                </ul>
                            </div><!-- /.blog-pagination -->
                        </div>
                    </div><!-- portfolio -->
                </div>
            </div>
        </section>
        @endsection