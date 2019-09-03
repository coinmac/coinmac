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
                                    <li class="list-group-item"><a href="/home">Register A New Course</a></li>
                                <li class="list-group-item active"><a href="/mycourses">My Courses</a></li>
                                <li class="list-group-item"><a href="#" onclick="return alert('Times table coming soon!')">Times table</a></li>
                                <li class="list-group-item"><a href="/mypayments">My Payments</a></li>
                                <li class="list-group-item"><a href="/home">Register New Course</a></li>
                                <li class="list-group-item"><a href="/notifications">Notifications</a></li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            @foreach ($mycourses as $course)
                                <div class="col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    @if ($course->payment=="Unpaid")
                                                        <span style="color: red">Unpaid</span>
                                                    @else
                                                        <span style="color: yellow">Payment Saved</span>
                                                    @endif
                                                </div>
                                            
                                                <div class="col-sm-6">
                                                        <b>Status:</b> {{$course->approval}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <h5 class="panel-title" style="color: blue; font-size: 1.5em;">{{$course->coursename}}</h5>
                                            <hr>
                                            <p class="panel-text"><b>Date:</b> {{$course->dates}}</p>
                                            <p class="panel-text"><b>Venue:</b> {{$course->venue}}</p>
                                        </div>
                                        <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-sm-4" style="font-weight: bold; color: red">
                                                            Fee: {{$course->amount}}
                                                    </div>
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
