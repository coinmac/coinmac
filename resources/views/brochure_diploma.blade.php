@extends('master')
@section('content')

<!-- latest-events -->
    <hr>
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="title-section">
                    <h1 class="title">DIPLOMA COURSES BROCHURE</h1>
                    <div class="sub-title">
                        Download our {{date("Y")}}'s DIPLOMA Courses Brochure
                    </div>
                </div>
        </div><!-- col.md-12 -->
    </div>
</div><!-- container -->

<div class="container">
   
        <div class="row">
           <div class="col-md-4">
               <img src="/images/content/brochure_diploma.jpg" alt="2019 National Brochure" style="width: 200px !important">
           </div>

           <div class="col-md-8">
            <p>This brochure covers everything about this year's courses that will be taking place in various locations in Nigeria, South Africa, India, UK, USA, Dubai and so on.</p>
            <p>
                <div class="wrap-btn">
                    <a href="#" class="flat-btn bg-color">Download</a> 
                </div>
            </p>
            <p>
                <a href="/diploma">Also Click here to learn more about Diploa Courses</a>
            </p>
            </div
        </div><!-- row -->
    
</div><!-- container -->

@endsection