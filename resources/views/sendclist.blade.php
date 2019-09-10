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
                            <small style="color: red;">Course Count: {{$counted}}</small>
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
                                    <label for="banner">Select Banner</label>
                                    <select name="banner" class="form-control">
                                        <option value="project_appraisal.jpg">Project Appraisal Banner</option>
                                        <option value="report_writing.jpg">Report Writing Banner</option>
                                        <option value="IPSAS_Banner.jpg">IPSAS Banner</option>
                                        <option value="FIRS_Banner.jpg">FIRS Banner</option>
                                        <option value="Tax_Banner.jpg">Tax Banner</option>
                                        <option value="Computer_Banner.jpg">Computer Banner</option>
                                        <option value="Computer3_Banner.jpg">Computer Banner 2</option>
                                        <option value="GIS_Banner.jpg">GIS Banner</option>
                                        <option value="International_Banner.jpg">International Banner</option>
                                        <option value="International2_Banner.jpg">International Banner2</option>
                                        <option value="Sharepoint_banner.jpg">Sharepoint Banner</option>
                                        <option value="Project_Banner.jpg">Project Management Banner</option>
                                        <option value="slide1.JPG">Latest Picture 1</option>
                                        <option value="slide2.jpg">Latest Picture 2</option>
                                        <option value="slide3.JPG">Latest Picture 3</option>
                                        <option value="slide4.JPG">Latest Picture 4</option>
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
