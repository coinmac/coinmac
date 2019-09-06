@extends('mmaster')

@section('content')

            <div style="text-align: center;">
                <a href="https://coinmac.org"><img src="/images/logo.jpg" style="height: 100px !important;" alt="image"></a>
            </div>
            
            <h3>{{$clist[0]->subjectname}}</h3>
            <p>This are course list for {{$clist[0]->subjectname}}.</p>
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
                        <td>{{$c->subjectname}}</td>
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
                            
@endsection
