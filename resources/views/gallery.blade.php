@extends('master')
@section('content')

<!-- latest-events -->
<section class="flat-row pd-top-93">
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="title-section">
                    <h1 class="title">OUR GALLERY</h1>
                    <div class="sub-title">
                        COINMAC past, current and upcoming events gallery
                    </div>
                </div>
        </div><!-- col.md-12 -->
    </div>
</div><!-- container -->

<div class="container">
    <div class="blog-list2 lates-new wrap-box pdbottom">
        <div class="row">
            @foreach ($events as $cn)
                @if ($cn->category=="Gallery")
                    <div class="col-md-6 wrap-grid">
                        <article class="entry">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 left">
                                    <div class="entry-post">
                                        <div class="entry-meta">
                                            <span>{{$cn->created_at}}</span>
                                        </div>
                                        <h3 class="entry-title"><a href="/post/{{$cn->id}}">{{$cn->title}}</a></h3>
                                        <div class="entry-author">
                                            <span>by <a href="#">{{$cn->author}}</a></span>
                                        </div>
                                        <div class="entry-content">
                                            <p>{{substr($cn->content,0,50)}}...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 right">
                                    <div class="feature-post">
                                        <a href="/post/{{$cn->id}}"><img src="images/content/{{$cn->featured_img}}" alt="{{$cn->title}}"></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!-- col-md-6 -->
                @endif                
            @endforeach
                
            
            
        </div><!-- row -->
    </div>
</div><!-- container -->

</section>
@endsection