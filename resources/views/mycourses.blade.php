@extends('amaster')

@section('content')
<hr>
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
                            @foreach ($mycourses as $course)
                            
                            
                                <div class="col-md-6">
                                    <div class="card bg-info">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                        {{$course->payment}}
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                        Status: {{$course->approval}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{$course->coursename}}</h5>
                                            <p class="card-text">Date: {{$course->dates}}</p>
                                            <p class="card-text">Venue: {{$course->venue}}</p>
                                        </div>
                                        <div class="card-footer">
                                                <div class="row">
                                                    <div class="col-sm-4" style="font-weight: bold; color: red">
                                                            Fee: {{$course->amount}}
                                                    </div>
                                                </div>
            
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                            <div class="btn-group" role="group" aria-label="Button group">
                                                                <a href="/deletecourse/{{$course->id}}" class="btn-group btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this course from your account?')">Delete</a>
                                                                <a href="/makepayment/{{$course->id}}/{{$course->amount}}" class="btn-group btn-xs btn-success">Make Payment</a>
                                                                <a href="/sc/{{$course->courseid}}" class="btn-group btn-xs btn-primary">Open Course</a>
                                                            </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>                                
                            @endforeach
                            
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
