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
                            <h2>Send Course List</h2>
                            <small>Course Count: {{$counted}}</small>
                            <hr>
                            <form action="{{route('sendlist')}}" method="post">
                                @csrf
                                
                                <input type="hidden" name="id" value="{{$id}}">
                                <div class="form-group">
                                    <label for="coursecategory">Select Course Category</label>
                                    <select id="coursecategory" class="form-control" name="coursecategory">
                                        <option value="{{$coursename}}" selected readonly>{{$coursename}}</option>                                        
                                    </select>
                                </div>                                

                                <div class="form-group">
                                    <label for="recipients">Enter Recipient(s)</label>
                                    <input type="text" class="form-control" name="recipients" id="recipients" placeholder="Multiple emails seperated by comma">
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
