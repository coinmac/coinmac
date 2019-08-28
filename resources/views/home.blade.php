@extends('amaster')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Welcome {{auth()->user()->name}}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h4>USER MENU</h4>
                            <hr>
                            <ul class="list-group">
                                <li class="list-group-item active">My Courses</li>
                                <li class="list-group-item">Times table</li>
                                <li class="list-group-item disabled">Notifications</li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            @if (auth()->user()->email!="coinmacsms@gmail.com")
                                <div class="btn-group" role="group" aria-label="Button group">
                                    <a class="btn btn-primary" href="/allcourses">Register a New Course</a>
                                    <a class="btn btn-success" href="/mycourses">Manage My Courses</a>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>National Courses</h3>
                                        <ul  class="c2">
                                            @foreach ($coursecategories as $cc) 

                                                @if ($cc->category=="National")
                                                    <li><a href="/coursegroup/{{$cc->courseid}}/{{$cc->category}}/{{$cc->coursename}}">{{ucwords(strtolower($cc->coursename))}}</a></li>
                                                @endif
                                                
                                            @endforeach                                                                
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <h3>International Courses</h3>
                                        <ul  class="c2">
                                            @foreach ($coursecategories as $cc) 

                                                @if ($cc->category=="International")
                                                    <li><a href="/coursegroup/{{$cc->courseid}}/{{$cc->category}}/{{$cc->coursename}}">{{ucwords(strtolower($cc->coursename))}}</a></li>
                                                @endif
                                                
                                            @endforeach                                                                
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <h3>Diploma Courses</h3>
                                        <ul  class="c2">
                                            @foreach ($coursecategories as $cc) 

                                                @if ($cc->category=="Diploma")
                                                    <li><a href="/coursegroup/{{$cc->courseid}}/{{$cc->category}}/{{$cc->coursename}}">{{ucwords(strtolower($cc->coursename))}}</a></li>
                                                @endif
                                                
                                            @endforeach                                                                
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <h3>Certificate Courses</h3>
                                        <ul  class="c2">
                                            @foreach ($coursecategories as $cc) 

                                                @if ($cc->category=="Certificate")
                                                    <li><a href="/coursegroup/{{$cc->courseid}}/{{$cc->category}}/{{$cc->coursename}}">{{ucwords(strtolower($cc->coursename))}}</a></li>
                                                @endif
                                                
                                            @endforeach                                                                
                                        </ul>
                                    </div>


                                </div>
                            @else
                                <a href="/admin_area" class="btn btn-primary center">Manage Courses</a>
                            @endif
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
