<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>COINMAC Inc - the star solution for productivity</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="/stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="/stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="/stylesheets/responsive.css">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="/stylesheets/animate.css">

     <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/revolution/css/settings.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <!-- Favicon and touch icons  -->    
    <link href="icon/icon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
    <style>
        .time-list{
            width: 100% !important; 
            float: left;
            margin: 5% !important;
            text-align: center;
            font-size: 0.5em !important;
            line-height: 10px !important;
            padding: 5px !important;
        }
        .time-meta .title a{
            color: darkblue;
            font-size: 1.3em;
            font-weight: 300;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .form-text{
            font-size: 0.8em !important;
            color: darkorange;
            font-style: italic;
            padding-top: 0px;
        }

        .form-control{
            margin-bottom: 0px !important;
        }
    </style>
</head>                                
<body>
    <!-- Preloader -->
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading</h2>
        </div>
    </section> 

    <!-- Boxed --> 
    <div class="boxed position_form">
        <div class="wrap-header clearfix">
            <div class="top top-style3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="flat-information">
                                <li>Mon - Fri: 8.00 - 18:00</li>
                                <li><span>P:</span><a href=""> 234-802-326-2908</a></li>
                                <li><span>E:</span><a href="">  info[@]coinmac.org</a></li>
                            </ul>
                        </div><!-- col-md-8 -->
                        <div class="col-md-4">
                            <div class="wrap-flat">
                                <ul class="flat-login-register">
                                    <li><a href="/login">Login</a></li>
                                    <li><a href="/register">Register</a></li>
                                </ul>
                                <ul class="flat-socials">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div><!-- wrap-flat -->
                        </div><!-- col-md-4 -->
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- top -->
            <header id="header" class="header header-style3 styleheader">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="logo">
                                <a href="index.html"><img src="/images/logo.jpg" style="height: 100px !important;" alt="image"></a>
                            </div><!-- /logo -->
                            <div class="flat-search">
                                <ul>
                                    <li class="show-search"><a href="#"><i class="lnr lnr-magnifier"></i></a></li>
                                    <li><a href="#"><i class="lnr lnr-cart"></i></a></li>
                                </ul>
                                <div class="btn-menu">
                                    <span></span>
                                </div><!-- //mobile menu button -->
                            </div><!-- /wrap-search -->
                            <div class="wrap-nav">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li class="active"><a href="/admin_area" title="">HOME</a></li>
                                        @auth
                                        @if (auth()->user()->email!="coinmacsms@gmail.com")
                                            <li><a href="/mycourses">My Courses</a></li>
                                            <li><a href="/mypayments">Payments</a></li>
                                            <li><a href="/messages">Messages</a></li>
                                            <li><a href="/logout">Logout</a></li>
                                        @else
                                            <li><a href="our-teacher.html" title="">TASKS</a>
                                                <ul class="submenu">
                                                    <li><a href="/syllabus">Add / Edit Course Contents</a></li>
                                                    <li><a href="/edit_courses">Add / Edit Courses</a></li>                                                
                                                    <li><a href="/edit_ccategories">Add / Edit Course Categories</a></li>
                                                    <li><a href="/contents">Publish / Edit Site Contents</a></li>
                                                    <li><a href="/logout">Logout</a></li>
                                                </ul>
                                            </li>
                                        @endif
                                        @endauth
                                    
                                    </ul>
                                </nav>
                                
                                <div class="top-search">                        
                                    <form action="#" id="searchform-all" method="get">
                                        <div>
                                            <input type="text" id="s" class="sss" placeholder="Search...">
                                            <input type="submit" value="" id="searchsubmit">
                                        </div>
                                    </form>
                                </div><!-- /top-search -->
                            </div><!-- /wrap-nav -->
                        </div><!-- /col-md-12 -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </header><!-- /header -->
        </div><!-- /header3 -->
        
        @if (session()->has('message'))
        <div class="row">
                <div class="alert alert-success col-md-offset-3 col-md-6" role="alert">
                    {{session()->get('message')}}
                </div>
        </div>                        
        @endif

        @if ($errors->all())
        <div class="row">
            <div class="alert alert-danger  col-md-offset-3 col-md-6" role="alert">
            @foreach ($errors->all() as $error)

            <li>{{$error}}</li>
                
            @endforeach
            </div>
        </div>            
        @endif

        @yield('content')

        <!-- Footer -->
        <footer id="footer" class="footer style2">
            <div class="container">
                <div class="footer-information">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 info-left">
                            <div class="logo-footer">
                                <a href="index.html"><img src="images/footer-logo.png" alt="image"></a>
                            </div><!-- logo-footer -->
                            <ul class="flat-socials">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div><!-- col-md-6 -->
                        <div class="col-md-6 col-sm-6 info-right">
                            <ul class="flat-information">
                            <li><span>P:</span><a href=""> 234-802-326-2908</a></li>
                            <li><span>E:</span><a href="">  info@coinmac.org</a></li>
                            <li><span>A:</span><a href=""> 2nd Floor, Bayelsa Guest House, Maitama, Abuja</a></li>
                        </ul>
                        </div><!-- col-md-6 -->
                    </div><!-- row -->
                </div><!-- footer-information -->
                <div class="footer-widget">
                       <div class="row">
                           <div class="col-md-3 col-sm-6">
                               <div class="widget widget-our-services">
                                    <h3 class="widget-title">OUR SERVICES</h3>
                                    <ul>
                                        <li><a href="">Courses</a></li>
                                        <li><a href="">Events</a></li>
                                        <li><a href="">Instructors</a></li>
                                        <li><a href="/events">Blog</a></li>
                                        <li><a href="">Awards</a></li>
                                    </ul>
                                </div><!-- /.wiget-categories -->
                           </div><!-- col-md-3 -->
                           <div class="col-md-3 col-sm-6">
                               <div class="widget widget-our-services">
                                    <h3 class="widget-title">MY ACCOUNT</h3>
                                    <ul>
                                        <li><a href="/myaccount">My Account</a></li>
                                        <li><a href="/">Membership</a></li>
                                        <li><a href="">FAQs</a></li>
                                        <li><a href="/newsletter">Newletter</a></li>
                                        <li><a href="">Specials</a></li>
                                    </ul>
                                </div><!-- /.wiget-categories -->
                           </div><!-- col-md-3 -->
                           <div class="col-md-3 col-sm-6">
                               <div class="widget widget-our-services">
                                    <h3 class="widget-title">OUR SUPPORT</h3>
                                    <ul>
                                        <li><a href="/contact_us">Contact Us</a></li>
                                        <li><a href="/social_media">Social Media</a></li>
                                        <li><a href="livechat">Live Chat</a></li>
                                        <li><a href="/sitemap">Site Map</a></li>
                                        <li><a href="/contact_us">Map Location</a></li>
                                    </ul>
                                </div><!-- /.wiget-categories -->
                           </div><!-- col-md-3 -->
                           <div class="col-md-3 col-sm-6">
                               <div class="widget widget-our-services">
                                    <h3 class="widget-title">IMFORMATION</h3>
                                    <ul>
                                        <li><a href="/about">About Us</a></li>
                                        <li><a href="/management">Management</a></li>
                                        <li><a href="/profile">Profile</a></li>
                                        <li><a href="/brochure_nat">National Brochure</a></li>
                                        <li><a href="/brochure_inter">International Brochure</a></li>
                                    </ul>
                                </div><!-- /.wiget-categories -->
                           </div><!-- col-md-3 -->
                       </div><!-- row -->
                </div><!-- footer-widget --> 
            </div><!-- container -->  
        </footer><!-- footer -->

        <div class="bottom style2">
            <div class="container">
                <div class="copyright">
                        <p>Copyright © {{date("Y")}} COINMAC International Inc | All rights reserved</p>
                </div>
            </div>
        </div><!-- bottom -->   

        <a class="go-top show"></a>
    </div>
    <!-- Boxed -->

    <!-- Javascript -->
    <script type="text/javascript" src="/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="/javascript/main.js"></script>
    <script type="text/javascript" src="/javascript/countdown.js"></script>
    <script type="text/javascript" src="/javascript/imagesloaded.min.js"></script>
    <script type="text/javascript" src="/javascript/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="/javascript/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="/javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="/javascript/jquery.easing.js"></script>
    <script type="text/javascript" src="/javascript/jquery.flexslider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">

        $('.date').datepicker({  
    
           format: 'dd M, yyyy'
    
         });  
    
    </script>  
    <!-- Revolution Slider -->
    <script type="text/javascript" src="/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="/revolution/js/slider.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.video.min.js"></script>
   
</body>
</html>