@extends('mmaster')

@section('content')
            <div class="header">
                    <div style="text-align: center;">
                        <a href="https://coinmac.org"><img src="https://coinmac.org/images/logo.jpg" style="height: 100px !important;" alt="image"></a>
                    </div>
                    
                    <h3 style="text-align: center;">{{$clist[0]->coursecategory}}</h3>
            </div>
            
            <p>These are course list for {{$clist[0]->coursecategory}}.</p>
            <hr>

            <table class="table" style="width: 100% !important;" cellspacing="0" border="1" bordercolor="#AEB6BF">
                <thead class="thead-dark">
                    <tr>
                        <th>Course Name</th>
                        <th>Course Fee</th>
                        <th>Dates</th>
                        <th>Contents</th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach ($clist as $key => $c)  
                    <tr 
                    @if($key % 2 != 0)                    
                    style='background-color: #D5D8DC;'
                    @endif
                    >
                        <td><a href="https://coinmac.org/sc/{{$c->subjectid}}" style="text-decoration: none;"><h3>{{$c->subjectname}}</h3></a></td>
                        <td>{{$c->amount}}</td>
                        <td><small>{{$c->date1}}<br>{{$c->date2}}<br>{{$c->date3}}<br>{{$c->date4}}</small></td>
                        
                        <td><a href="https://coinmac.org/sc/{{$c->subjectid}}" class="button-primary">View Course</a></td>
                    </tr>
                    @endforeach
                    
                </tbody>
                <tfoot>
                        <thead class="thead-dark">
                            <tr>
                                <th>Course Name</th>
                                <th>Course Fee</th>
                                <th>Dates</th>
                                <th>Contents</th>
                            </tr>
                        </thead>
                </tfoot>
            </table>    
            <hr>
            <p style="color: red;">For more information, please call: <b>2348023262908, 09060008932</b> or <a href="mailto:info@coinmac.org">Click Here To Email Me</a></p>                                                    
                            
@endsection
