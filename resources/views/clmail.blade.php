@extends('mmaster')

@section('content')
<hr>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="text-align: center;">
                <a href="index.html"><img src="/images/logo.jpg" style="height: 100px !important;" alt="image"></a>
            </div>
            <div class="card">               

                <div class="card-body">
                    <div class="row">
                       
                        <div class="col-md-10 col-md-offset-1">
                            <h3>{{$clist->first()->coursename}}</h3>
                            <hr>

                            <table class="table table-dark">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Course Fee</th>
                                        <th>Dates</th>
                                        <th>Duration</th>
                                        <th>Contents</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clist as $c)                                        
                                    <tr>
                                        <td>{{$c->sujectname}}</td>
                                        <td>{{$c->amount}}</td>
                                        <td>{{$c->date1}}<br>{{$c->date2}}<br>{{$c->date3}}<br>{{$c->date4}}</td>
                                        <td>{{$c->duration}}</td>
                                        <td><a href="/sc/{{$c->subjectid}}">View Contents</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Course Name</th>
                                                <th>Course Fee</th>
                                                <th>Dates</th>
                                                <th>Duration</th>
                                                <th>Contents</th>
                                            </tr>
                                        </thead>
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
