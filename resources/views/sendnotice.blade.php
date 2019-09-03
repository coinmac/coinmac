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
                                <li class="list-group-item disabled"><a href="/notifications">Notifications</a></li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <h2>SEND NOTIFICATION</h2>
                            <hr>
                            <form action="{{route('savenotice')}}" method="post">
                                @csrf
                                <input type="hidden" name="to" value="{{$receiver->email}}">
                                <div class="form-group">
                                    <label for="to">To</label>
                                    <input type="text" class="form-control" name="to" value="{{$receiver->name}}" id="to" placeholder="Receiver" readonly>
                                </div>
                                    
                                <div class="form-group">
                                  <label for="ntitle">Notiifcation Title</label>
                                  <input type="text" class="form-control" name="ntitle" id="ntitle" placeholder="Notification Title" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="Body">Body</label>
                                    <textarea name="body" id="body" cols="30" rows="10"></textarea>
                                </div>

                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>


                            </form>
                        </div>

                      
                    </div>

                    
                </div>
            </div>
        </div>
    
</div>
@endsection
