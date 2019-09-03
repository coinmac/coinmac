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
                                <li class="list-group-item disabled"><a href="#">Notifications</a></li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <h3>Messages / Notifications </h3>
                            <hr>
                            <table class="table table-light table-striped">
                                <thead class="thead-light">
                                    <tr class="h3">
                                        @if (auth()->user()->email=="coinmacsms@gmail.com")
                                            <th>Reciever</th>
                                        @endif
                                        <th>Title</th>
                                        <th>Body</th>
                                        <th>Date</th>
                                        
                                        @if (auth()->user()->email=="coinmacsms@gmail.com")
                                            <th>Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notices as $n)
                                        <tr>
                                            @if (auth()->user()->email=="coinmacsms@gmail.com")
                                                <td>{{$n->to}}</td>
                                            @endif
                                            <td>{{$n->ntitle}}</td>
                                            <td>{{$n->body}}</td>
                                            <td>{{$n->created_at}}</td>
                                            
                                            @if (auth()->user()->email=="coinmacsms@gmail.com")
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Button group">
                                                            <a href="#" class="btn btn-sm btn-success btn-group">Delete</a>
                                                            <a href="#" class="btn btn-sm btn-primary btn-group">Read</a>
                                                    </div>
                                                    
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                                <tfoot class="h3">
                                        <tr class="h3">
                                            @if (auth()->user()->email=="coinmacsms@gmail.com")
                                                <th>Reciever</th>
                                            @endif
                                            <th>Title</th>
                                            <th>Body</th>
                                            <th>Date</th>
                                            
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
