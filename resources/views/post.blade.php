@extends('master')
@section('content')

<!-- latest-events -->
<section class="flat-row" style="margin-top: 50px;">

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
                                        @php
                                        if($cn->subcategory!=""){
                                        $handle = opendir(public_path().'/images/contents/'.$cn->subcategory);
                                        @endphp
                                        @while($file = readdir($handle))
                                        @if($file !== '.' && $file !== '..')
                                            <img src="/images/contents/{{$cn->subcategory}}/{{$file}}" alt="image" style="height: 250px; width: auto; float: left; marging: 1px; border: 2px solid darkblue;">
                                        @endif
                                        @endwhile
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