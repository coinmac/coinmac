@extends('mmaster')

@section('content')
            <div class="header">
                    <div style="text-align: center;">
                        <a href="https://coinmac.org"><img src="https://coinmac.org/images/logo.jpg" style="height: 100px !important;" alt="image"></a>
                    </div>
                    
                    <h3 style="text-align: center;">{{$clist[0]->coursecategory}}</h3>
            </div>
            
            <p>This are course list for {{$clist[0]->coursecategory}}.</p>
            <hr>

            <table class="table" style="width: 100% !important;">
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
                    @php
                    $i = 0;
                    foreach ($clist as $c){     
                        if($i % 2 == 0){
                            $bg =  "background-color: light-blue;";
                        } else{
                            $bg = "";
                        }
                    @endphp                                  
                    <tr {{$bg}}>
                        <td><a href="https://coinmac.org/sc/{{$c->subjectid}}"><h2>{{$c->subjectname}}</h2></a></td>
                        <td>{{$c->amount}}</td>
                        <td><small>{{$c->date1}}<br>{{$c->date2}}<br>{{$c->date3}}<br>{{$c->date4}}</small></td>
                        <td>{{$c->duration}}</td>
                        <td><a href="https://coinmac.org/sc/{{$c->subjectid}}" class="button-primary">View Course</a></td>
                    </tr>
                    @php
                    $i++}
                    @endphp
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
