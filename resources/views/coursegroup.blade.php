@extends('master')
@section('content')
    @if (count($subjectlist)>0)
    
        <div class="wrap-slider" style="background-image:url('/images/content/{{$catimage->first()->image}}'); background-size: cover; background-color: darkblue;">
            <div class="container page-container">
                <div class="page-content">
                    <div class="page-title">
                        
                            
                        
                        <h1 style="text-shadow: 2px 2px #000000;">{{$subjectlist->first()->coursecategory}} <br> <small style="color: yellow">({{$type}})</small></h1>
                        <div class="breadcrumbs">
                            <ul  style="text-shadow: 2px 2px #000000;">
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Courses</a></li>
                                <li>{{$subjectlist->first()->coursecategory}}</li>
                            </ul>
                        </div><!-- breadcrumb -->                     
                            
                        
                    </div><!-- page-title -->
                </div>
            </div><!-- container -->
        </div><!-- wrap-slider -->
        @else
        <div class="row">
            <div class="container page-container col-md-6 col-md-offset-3">
                <p style="color: green;">The course(s) information for this selected category will soon be published on this page. For further enquiries, please call: <b>2348023262908, 09060008932</b> or send us email to: <b>info@coinmac.org</b>.</p>
            </div>
        </div>
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
                                <h3 class="widget-title">AVAILABLE COURSES</h3>
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
                        <!--                
                        <div class="testimonial-content" style="background-color: white; padding: 20px;">
                            <h2>General Overview:</h2>
                            <hr>
                            <i class="fa fa-quote-left"></i>
                            
                            <p>{!!$catimage->first()->description!!}</p>
                            <hr>
                            <p><strong>Status: </strong> {{$catimage->first()->remarks}}</p>
                        </div>     
                        -->    
                        
                        @foreach ($subjectlist as $sc) 
                            <article class="entry" style="margin-bottom: 2px;">   
                                <div class="row">
                                    <div class="col-md-8">
                                        <a href="/sc/{{$sc->subjectid}}">
                                                                            
                                                <h2 class="entry-title" style="color: darkblue;">{{$sc->subjectname}}</h2>                                           
                                        </a>
                                        @if($type=="National")
                                            <a href="#" class="label label-primary">{{$sc->date1}}</a>
                                            <a href="#" class="label label-danger">{{$sc->date2}}</a>
                                            <a href="#" class="label label-success">{{$sc->date3}}</a>
                                            <a href="#" class="label label-warning">{{$sc->date4}}</a>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                            @if($type=="National")
                                            <div class="entry-price color-green col-md-6">
                                                <span class="green" style="color: green; font-weight: bold;">{{$sc->amount}}</span>
                                            </div>
                                            @else
                                            <div class="entry-price color-green col-md-6">
                                                <span class="green">{{$sc->amounti}}</span>
                                            </div>
                                            @endif
                                            <div class="wrap-btn col-md-6" style="float: right">
                                                <a class="flat-btn bg-color" href="/sc/{{$sc->subjectid}}">View</a> 
                                            </div>
                                    </div>
                                </div>
                            </article>
                            
                        @endforeach
                                        

                          
                        </div>
                        <div class="row" style="text-align: center;">
                                <hr>
                                <h2>Share this page on ...</h2>
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_twitter"></a>
                                <a class="a2a_button_whatsapp"></a>
                                <a class="a2a_button_sms"></a>
                                <a class="a2a_button_email"></a>
                                </div>
                                <script async src="https://static.addtoany.com/menu/page.js"></script>
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