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
                            <h3>Payments</h3><hr>
                            <table class="table table-light table-striped">
                                <thead class="thead-light">
                                    <tr class="h3">
                                        @if (auth()->user()->email=="coinmacsms@gmail.com")
                                            <th>Student</th>
                                        @endif
                                        <th>Course Name</th>
                                        <th>Course Fee</th>
                                        <th>Payment Information</th>
                                        <th>Payment Status</th>
                                        @if (auth()->user()->email=="coinmacsms@gmail.com")
                                            <th>Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $pay)
                                        <tr>
                                            @if (auth()->user()->email=="coinmacsms@gmail.com")
                                                <td>{{$pay->name}}</td>
                                            @endif
                                            <td>{{$pay->coursename}}</td>
                                            <td>{{$pay->amount}}</td>
                                            <td>{{$pay->payment}}</td>
                                            <td>{{$pay->approval}}</td>
                                            @if (auth()->user()->email=="coinmacsms@gmail.com")
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Button group">
                                                            <a href="/approvereg/{{$pay->id}}" class="btn btn-sm btn-success btn-group">Approve</a>
                                                            <a href="/sendnotice/{{$pay->email}}" class="btn btn-sm btn-primary btn-group">Contact</a>
                                                    </div>
                                                    
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                                <tfoot class="h3">
                                        <tr>
                                            @if (auth()->user()->email=="coinmacsms@gmail.com")
                                                <th>Student</th>
                                            @endif
                                            <th>Course Name</th>
                                            <th>Course Fee</th>
                                            <th>Payment Information</th>
                                            <th>Payment Status</th>
                                            @if (auth()->user()->email=="coinmacsms@gmail.com")
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                </tfoot>
                            </table>
                            
                            
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
