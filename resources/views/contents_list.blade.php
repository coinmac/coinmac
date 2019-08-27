@extends('amaster')
@section('content')
<!-- portfolio-isotope -->
<section class="flat-row bg-theme wrap-price-post">
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="title-section title-height46">
                    <h1 class="title">EDIT CONTENTS / POSTS</h1>
                    <div class="sub-title">
                        Select Content To Edit
                    </div>
                </div>
        </div><!-- col.md-12 -->
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contents as $c)
                        <tr>
                            <td>{{$c->title}}</td>
                            <td>{{$c->category}}</td>
                            <td>{{$c->status}}</td>
                            <td><a href="edit_content/{{$c->id}}" class="btn btn-sm btm-primary">Edit</a></td>
                            <td><a href="delete_content/{{$c->id}}" class="btn btn-sm btm-danger">Delete</a></td>
                        </tr>
                    @endforeach
                    
                </tbody>
                <tfoot>
                    <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div><!-- container -->

    
</section>
@endsection