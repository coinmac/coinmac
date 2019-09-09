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
                                <li class="list-group-item active"><a href="/home">Register A New Course</a></li>
                                <li class="list-group-item "><a href="/mycourses">My Courses</a></li>
                                <li class="list-group-item"><a href="#" onclick="return alert('Times table coming soon!')">Times table</a></li>
                                <li class="list-group-item"><a href="/mypayments">My Payments</a></li>
                                <li class="list-group-item"><a href="/home">Register New Course</a></li>
                                <li class="list-group-item"><a href="/notifications">Notifications</a></li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            @if (auth()->user()->email!="coinmacsms@gmail.com")
                                <div style="text-align: center;">
                                    <a class="btn btn-success" href="/mycourses">Manage My Courses</a><br>
                                    
                                </div>
                                
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>National Courses</h2>
                                        <hr>
                                        <ul  class="c2">
                                            @foreach ($coursecategories as $cc) 

                                                @if ($cc->category=="National")
                                                    <li><a href="/coursegroup/{{$cc->courseid}}/{{$cc->category}}/{{$cc->coursename}}">{{ucwords(strtolower($cc->coursename))}}</a></li>
                                                @endif
                                                
                                            @endforeach                                                                
                                        </ul>
                                    </div>
                                   
                                    <div class="col-md-12">
                                        <hr>
                                        <h2>International Courses</h2>
                                        <hr>
                                        <ul  class="c2">
                                            @foreach ($coursecategories as $cc) 

                                                @if ($cc->category=="International")
                                                    <li><a href="/coursegroup/{{$cc->courseid}}/{{$cc->category}}/{{$cc->coursename}}">{{ucwords(strtolower($cc->coursename))}}</a></li>
                                                @endif
                                                
                                            @endforeach                                                                
                                        </ul>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <hr>
                                        <h2>Diploma Courses</h2>
                                        <hr>
                                        <ul  class="c2">
                                            @foreach ($coursecategories as $cc) 

                                                @if ($cc->category=="Diploma")
                                                    <li><a href="/coursegroup/{{$cc->courseid}}/{{$cc->category}}/{{$cc->coursename}}">{{ucwords(strtolower($cc->coursename))}}</a></li>
                                                @endif
                                                
                                            @endforeach                                                                
                                        </ul>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <hr>
                                        <h2>Certificate Courses</h2>
                                        <hr>
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
                                <hr>
                                <h2>Send Newsletter</h2>
                                <form action="{{route('newsletter')}}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                            <label for="to ">Subscriber(s) E-mails</label>
                                            <input type="text" class="form-control" name="to" id="to" placeholder="Subscriber(s) Email" value="{{$emails}}">
                                            
                                          </div>
          
                                          <div class="form-group">
                                            <label for="ntitle">Subject</label>
                                            <input type="text"
                                              class="form-control" name="ntitle" id="ntitle" placeholder="Newsletter Subject">
                                            
                                          </div>
          
                                          <div class="form-group">
                                              <label for="body">Body</label>
                                              <textarea id="body" class="form-control" name="body" rows="3"></textarea>
                                          </div>
                                          <div class="form-group" style="text-align: right;">
                                            <button type="submit" class="btn btn-primary">Send Newsletter</button>  
                                          </div>
                                </form>
                                
                                
                               <hr>
                               
                               <h2>Subscriber(s) List</h2>
                                <table class="table table-light">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Date</th>
                                            <th>E-mail Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subs as $s)                                          
                                        
                                        <tr>
                                            <td>{{$s->created_at}}</td>
                                            <td>{{$s->email}}</td>
                                        </tr>
                                        @endforeach   
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Date</th>
                                            <th>E-mail Address</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            @endif
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
