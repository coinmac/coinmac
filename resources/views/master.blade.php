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
        .course-text p{
            margin: 0px;
            margin-top: 5px;
        }

        .course-text ul{
            list-style:none;
            padding: 0px;
        }

        .course-text ul li:before
        {
            content: '\2713';
            margin: 0 1em;    /* any design */
        }

        .pagepost, .entry-post ul{
            list-style:none;
            padding: 0px;
        }

        .pagepost, .entry-post ul li:before
        {
            content: '\2713';
            margin: 0 1em;    /* any design */
        }

        .pagepost ul{
            list-style:none;
            padding: 0px;
        }

        .pagepost ul li:before
        {
            content: '\2713';
            margin: 0 1em;    /* any design */
        }

        .tp-caption,.sub-title{
           text-shadow: 1px 1px #000;
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
                        <div class="col-md-6">
                            <ul class="flat-information">
                                <li>Mon - Fri: 8.00 - 18:00</li>
                                <li><span>P:</span><a href=""> 234-802-326-2908</a></li>
                                <li><span>E:</span><a href="">  info[@]coinmac.org</a></li>
                            </ul>
                        </div><!-- col-md-8 -->
                        <div class="col-md-6">
                            <div class="wrap-flat">
                                @auth
                                    <ul class="flat-login-register">
                                        <li><a href="#">Hello {{auth()->user()->name}}</a></li>
                                        <li><a href="/home">My Account</a></li>
                                        <li><a href="/logout" class="label label-danger">Logout</a></li>
                                    </ul>
                                @endauth
                                @guest
                                    <ul class="flat-login-register">
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="/register">Register</a></li>
                                    </ul>
                                @endguest
                                
                                <ul class="flat-socials">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
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
                                <a href="/"><img src="/images/logo.jpg" style="height: 80px !important;" alt="image"></a>
                            </div><!-- /logo -->
                            <div class="flat-search">
                                
                                <div class="btn-menu">
                                    <span></span>
                                </div><!-- //mobile menu button -->
                            </div><!-- /wrap-search -->
                            <div class="wrap-nav">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                            <li class="has-mega-menu" style="margin-right: 40px;"><a href="#" title="" class="has-mega" style="color: red; font-weight: bold;">COURSES</a>
                                                <ul class="submenu submenu-style2 mega-menu three-columns">
                                                    <li class="submenu-level">
                                                        <ul class="submenu2">
                                                            <li class="sub-title">
                                                                <a href="#">NATIONAL</a>
                                                                <span  class="btn-mega"></span>
                                                            </li>
                                                            <li  class="mega-menu-sub">
                                                                
                                                                <ul  class="c2">
                                                                    @foreach ($coursecategories as $cc) 

                                                                        @if ($cc->category=="National")
                                                                            <li><a href="/coursegroup/{{$cc->courseid}}/{{$cc->category}}/{{$cc->coursename}}">{{ucwords(strtolower($cc->coursename))}}</a></li>
                                                                        @endif
                                                                        
                                                                    @endforeach                                                                
                                                                </ul>
                                                            </li>
                                                            
                                                        </ul> 
                                                    </li>
                                                    <li class="submenu-level">
                                                        <ul class="submenu2">
                                                            <li class="sub-title">
                                                                <a href="#">INTERNATIONAL</a>
                                                                <span class="btn-mega"></span>
                                                            </li>
                                                            <li class="mega-menu-sub">
                                                                <ul class="c2">
                                                                    @foreach ($coursecategories as $cc) 

                                                                        @if ($cc->category=="International")
                                                                            <li><a href="/coursegroup/{{$cc->courseid}}/{{$cc->category}}/{{$cc->coursename}}">{{ucwords(strtolower($cc->coursename))}}</a></li>
                                                                        @endif
                                                                        
                                                                    @endforeach 
                                                                </ul>
                                                            </li>
                                                            
                                                        </ul> 
                                                    </li>
                                                    <li class="submenu-level">
                                                        <ul class="submenu2">
                                                            <li class="sub-title">
                                                                <a href="#">CERTIFICATION</a>
                                                                <span class="btn-mega"></span>
                                                            </li>
                                                            <li class="mega-menu-sub">
                                                                <ul>
                                                                    @foreach ($coursecategories as $cc) 

                                                                        @if ($cc->category=="Certificate")
                                                                            <li><a href="/coursegroup/{{$cc->courseid}}/{{$cc->category}}/{{$cc->coursename}}">{{ucwords(strtolower($cc->coursename))}}</a></li>
                                                                        @endif
                                                                        
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                            
                                                        </ul> 
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                        <li class="active"><a href="/" title="">HOME</a></li>
                                        <li><a href="#" title="">PROFILE</a>
                                            <ul class="submenu">
                                                <li><a href="/about">About COINMAC</a></li>
                                                <li><a href="/management">Management/Executives</a></li>
                                                <li><a href="/consultancy">Consultancy</a></li>
                                            </ul>
                                        </li>
                                        

                                        
                                        <li><a href="#" title="">RESOURCES</a>
                                            <ul class="submenu">
                                                <li><a href="https://drive.google.com/file/d/1lK2c116HiKVpicyloDCNCXO8t51oE_qt/view?usp=sharing">COINMAC Profile</a></li>
                                                <li><a href="/events">Programmes/Events</a></li>
                                                <li><a href="/gallery">Gallery</a></li>
                                                <li><a href="/brochure_nat">{{date("Y")}} National Brochure</a></li>
                                                <li><a href="/brochure_inter">{{date("Y")}} International Brochure</a></li>
                                                <li><a href="/brochure_diploma">{{date("Y")}} Diploma Programmes</a></li>
                                                <li><a href="/brochure_cert">{{date("Y")}} Certificate Courses Brochure</a></li>
                                            </ul>
                                        </li>
                                        <li class="active"><a href="/contact_us" title="">CONTACT</a></li>

                                    </ul>
                                </nav>                              
                               
                            </div><!-- /wrap-nav -->
                        </div><!-- /col-md-12 -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </header><!-- /header -->
        </div><!-- /header3 -->

        @if (session()->has('message'))
        <div class="row" style="background-color: #ffffff;">
                <div class="alert alert-success col-md-offset-3 col-md-6" role="alert">
                    {{session()->get('message')}}
                </div>
        </div>                        
        @endif

        @if ($errors->all())
        <div class="row"  style="background-color: #ffffff;">
            <div class="alert alert-danger  col-md-offset-3 col-md-6" role="alert">
            @foreach ($errors->all() as $error)

            <li>{{$error}}</li>
                
            @endforeach
            </div>
        </div>            
        @endif

        @yield('content')

        <!-- flat-contact -->
        <section class="flat-row bg-theme flat-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="title-section left color-sub">
                                <h1 class="title">COINMAC PROFESSIONAL TRAINING</h1>
                                <div class="sub-title">
                                    Enroll in any of our professional courses to build your portfolio, increase productivity and become employable in Nigeria <span class="color-gray"> and beyond.</span>
                                </div>
                            </div>
                    </div><!-- col.md-8 -->
                    <div class="col-md-4 right-contact">
                        <div class="wrap-btn">
                            <a class="flat-btn bg-color" href="/login">ENROLL NOW</a> 
                        </div>
                    </div><!-- col.md-4 -->
                </div><!-- row -->
            </div><!-- Container -->
            

            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="subsc">
                        <div class="subscribe-contact wrap-box pdfull">
                            <div class="title-section">
                                <h1 class="title">SUBSCRIBE TO OUR NEWSLETTER</h1>
                                <div class="sub-title">
                                    Subscribe now and receive weekly newsletter with educational materials, new courses,<br>interesting posts, popular books and much more!
                                </div>
                            </div>
                            <form action="{{route('subscribe')}}" method="post" id="formsubscribe" class="formsearch search-course">
                                @csrf
                                <p class="subscribe-email">
                                    <input type="text" id="emailsubscribe" name="email" value="" required="required" maxlength="50" placeholder="Your email here">
                                </p>
                                <div class="subscribe-btn">
                                    <div class="wrap-btn">
                                        <button class="flat-btn bg-color" type="submit">Subscribe</button> 
                                    </div>
                                </div>
                            </form>
                        </div><!-- subscribe-contact -->
                    </div><!-- Col-md-12 -->
                </div><!-- row -->
            </div><!-- Container -->
        </section>

        <!-- Footer -->
        <footer id="footer" class="footer style2">
            <div class="container">
                <div class="footer-information">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 info-left">
                            <div class="logo-footer">
                                <a href="/"><img src="/images/footer-logo.png" alt="image"></a>
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
                                        <li><a href="https://tawk.to/chat/5ab28fded7591465c708c7f8/default" target="_blank">Live Chat</a></li>
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
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5ab28fded7591465c708c7f8/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();

    </script>
    <!--End of Tawk.to Script-->
   
</body>
</html>