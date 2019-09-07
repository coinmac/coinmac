@extends('amaster')

@section('content')

<div class="container">
    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Welcome {{auth()->user()->name}}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h4>USER MENU</h4>
                            <hr>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="/mycourses">My Courses</a></li>
                                <li class="list-group-item"><a href="#">Times table</a></li>
                                <li class="list-group-item active"><a href="#">My Payments</a></li>
                                <li class="list-group-item"><a href="/home">Register New Course</a></li>
                                <li class="list-group-item"><a href="/notifications">Notifications</a></li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <h2>Send Course Content</h2>
                            <hr>
                            <form action="{{route('sendcc')}}" method="post">
                                @csrf
                                
                                <input type="hidden" name="id" value="{{$id}}">

                                <div class="form-group">
                                    <label for="subjectname">Course Title</label>
                                    <input type="text" class="form-control" name="subjectname" id="subjectname" value="{{$subjectname}}" readonly>
                                </div>    
                                
                                <div class="form-group">
                                    <label for="type">Category</label>
                                    <select id="type" class="form-control" name="type">
                                        <option value="National" selected>National</option>
                                        <option value="International">International</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Certificate">Certificate</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="recipients">Enter Recipients</label>
                                    <input type="text" class="form-control" name="recipients" id="recipients" placeholder="Enter Recipient's E-mail(s)">
                                </div>
                                
                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-primary">Send Course list</button>
                                </div>


                            </form>
                        </div>

                  
                    </div>

                    
                </div>
            </div>
        </div>
    
</div>
@endsection
