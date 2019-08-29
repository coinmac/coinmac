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
                        <div class="col-md-12">
                            <div class="showing">
                                <p>Showing {{count($subjectlist)}} search results</p>
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
                            @foreach ($subjectlist as $sc)                            
                                <a href="/sc/{{$sc->subjectid}}">
                                    <article class="entry">                                    
                                        <h3 class="entry-title">{{$sc->subjectname}}</h3>                                                                      
                                    </article>
                                </a>
                            @endforeach                            
                        </div>
                       
                    </div><!-- portfolio -->
                </div>
            </div>
        </section>
        @endsection