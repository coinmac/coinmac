@extends('master')
@section('content')
<style>
        * {
            box-sizing: border-box;
          }
          
          /* Position the image container (needed to position the left and right arrows) */
          .slidecontainer {
            position: relative;
          }
          
          /* Hide the images by default */
          .mySlides {
            display: none;
          }
          
          /* Add a pointer when hovering over the thumbnail images */
          .cursor {
            cursor: pointer;
          }
          
          /* Next & previous buttons */
          .prev,
          .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
          }
          
          /* Position the "next button" to the right */
          .next {
            right: 0;
            border-radius: 3px 0 0 3px;
          }
          
          /* On hover, add a black background color with a little bit see-through */
          .prev:hover,
          .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
          }
          
          /* Number text (1/3 etc) */
          .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }
          
          /* Container for image text */
          .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
          }
          
          .row:after {
            content: "";
            display: table;
            clear: both;
          }
          
          /* Six columns side by side */
          .column {
            float: left;
            width: 16.66%;
          }
          
          /* Add a transparency effect for thumnbail images */
          .demo {
            opacity: 0.6;
          }
          
          .active,
          .demo:hover {
            opacity: 1;
          }
          
</style>

<!-- latest-events -->
<section class="flat-row">

<div class="container">
    <div class="blog-list2 lates-new wrap-box pdbottom">
        <div class="row">

                    <div class="col-md-12 wrap-grid">
                        <article class="entry">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                        <div class="title-section">
                                            <h1 class="title">{{$cn->title}}</h1> 
                                            <div class="sub-title">
                                                {{$cn->subtitle}}<br>
                                                <span>{{$cn->created_at}}</span><span> | by <a href="#">{{$cn->author}}</a></span>
                                            </div>
                                        </div>
                                    <div class="entry-post">
                                        <div class="entry-content">                                                
                                            <p><img src="/images/content/{{$cn->featured_img}}" alt="" style="width: 40%; float:left; margin:10px;"> {!!$cn->content!!}...</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <h2>In Pictures</h2>
                                    <hr>
                                    <!-- Container for the image gallery -->
                                    @php
                                    if($cn->subcategory!=""){
                                    @endphp
                                    <div class="slidecontainer col-md-10 col-md-offset-1">
                                        @php    
                                        $handle = opendir(public_path().'/images/contents/'.$cn->subcategory);                                        
                                        @endphp
                                        @while($file = readdir($handle))
                                        @if($file !== '.' && $file !== '..')
                                    
                                        <div class="mySlides">
                                            
                                            <img src="/images/contents/{{$cn->subcategory}}/{{$file}}" alt="{{$cn->title}}" style="width: 100%">
                                        </div>
                                            
                                        @endif
                                        @endwhile
                                        
                                      <!-- Full-width images with number text -->
                                      
                                    
                                      <!-- Next and previous buttons -->
                                      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                      <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                    
                                      <!-- Image text -->
                                      <div class="caption-container">
                                        <p id="caption"></p>
                                      </div>
                                    
                                      <!-- Thumbnail images -->
                                      <div class="row">
                                            @php    
                                            $handle2 = opendir(public_path().'/images/contents/'.$cn->subcategory);
                                            $i = 1;
                                            @endphp
                                            @while($file2 = readdir($handle2))
                                            @if($file2 !== '.' && $file2 !== '..')
                                        
                                            <div class="column">
                                                <div class="numbertext">{{$cn->title}}</div>
                                                <img class="demo cursor" src="/images/contents/{{$cn->subcategory}}/{{$file2}}" onclick="currentSlide({{$i}})" alt="{{$cn->title}}" style="width: 100%">
                                            </div>
                                            @php 
                                            $i++;
                                            @endphp  
                                            @endif
                                            @endwhile
                                        
                                      </div>
                                    </div>
                                    @php
                                    }
                                    @endphp
                                </div>
                                
                            </div>
                        </article>
                    </div><!-- col-md-6 -->
            
        </div><!-- row -->
    </div>
</div><!-- container -->

</section>

<script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
        }

</script>
@endsection