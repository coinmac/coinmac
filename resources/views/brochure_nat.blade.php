@extends('master')
@section('content')

<!-- latest-events -->
    <hr>
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="title-section">
                    <h1 class="title">NATIONAL BROCHURE</h1>
                    <div class="sub-title">
                        Download our {{date("Y")}}'s National Brochure
                    </div>
                </div>
        </div><!-- col.md-12 -->
    </div>
</div><!-- container -->

<div class="container">
   
        <div class="row">
           <div class="col-md-4">
               <img src="/images/content/brochure_nat.jpg" alt="2019 National Brochure" style="width: 200px !important">
           </div>

           <div class="col-md-8">
            <p>This brochure covers everything about this year's courses that will be taking place in various locations in Nigeria.</p>
            <p>
                <div class="wrap-btn">
                    <a href="https://drive.google.com/open?id=1iTa8eaj4Ho2GZNaWsLqDH3Il7rkWohyh" class="flat-btn bg-color">Download</a> 
                </div>
            </p>
            </div
        </div><!-- row -->
    
</div><!-- container -->

@endsection