@extends('master')
@section('content')

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
                                    <div class="slidecontainer">
                                        @php    
                                        $handle = opendir(public_path().'/images/contents/'.$cn->subcategory);
                                        $i = 1;
                                        @endphp
                                        @while($file = readdir($handle))
                                        @if($file !== '.' && $file !== '..')
                                    
                                        <div class="mySlides">
                                            <div class="numbertext">{{$cn->title}}</div>
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
                                            @while($file = readdir($handle))
                                            @if($file !== '.' && $file !== '..')
                                        
                                            <div class="column">
                                                <div class="numbertext">{{$cn->title}}</div>
                                                <img class="demo cursor" src="/images/contents/{{$cn->subcategory}}/{{$file}}" onclick="currentSlide({{$i}})" alt="{{$cn->title}}" style="width: 100%">
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
@endsection