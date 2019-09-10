@extends('master')
@section('content')

<!-- latest-events -->
<section class="flat-row pd-top-93">
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="title-section">
                    <h1 class="title">{{$cn->title}}</h1>
                    <div class="sub-title">
                        {{$cn->subtitle}}
                    </div>
                </div>
        </div><!-- col.md-12 -->
    </div>
</div><!-- container -->

<div class="container">
    <div class="blog-list2 lates-new wrap-box pdbottom">
        <div class="row">

                    <div class="col-md-12 wrap-grid">
                        <article class="entry">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="entry-post">
                                        <div class="entry-meta">
                                            <span>{{$cn->created_at}}</span>
                                        </div>

                                        <div class="entry-author">
                                            <span>by <a href="#">{{$cn->author}}</a></span>
                                        </div>
                                        <div class="entry-content">                                                
                                            <p><img src="/images/content/{{$cn->featured_img}}" alt="" style="width: 40%; float:left; margin:10px;"> {!!$cn->content!!}...</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <h2>In Pictures</h2>
                                    <hr>
                                    @php
                                        $handle = opendir(public_path().'/images/contents/'.$cn->subcategory);
                                        @endphp
                                        @while($file = readdir($handle))
                                        @if($file !== '.' && $file !== '..')
                                            <img src="/images/contents/{{$course->subcategory}}/{{$file}}" alt="image" style="height: 300px; width: auto; float: left; marging: 1px; border: 2px solid darkblue;">
                                        @endif
                                        @endwhile
                                </div>
                                
                            </div>
                        </article>
                    </div><!-- col-md-6 -->
                
                
            
            
        </div><!-- row -->
    </div>
</div><!-- container -->

</section>
@endsection