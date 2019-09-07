@extends('mmaster')

@section('content')

<div style="background-image:url('https://coinmac.org/images/course/{{$cc->subjectid}}/{{$cc->image}}'); background-size: cover; background-color:darkblue; width: 100%; min-heigh: 100px; height: auto; padding: 20px; text-align: center;">
    <h2 style="color: white; text-shadow: 2px 2px #000;">{{$cc->subjectname}}</h2>
    <h4>Category: {{$cc->coursecategory}} | {{$type}} </h4>
    
</div>

<h2 style="text-align: center; color:green">
    COURS FEE: 
    @if ($type=="National")
    {{$cc->amount}}
    @else
    {{$cc->amounti}}
    @endif
</h2>

<div style="float: right; background-color: darkblue; color: white; font-weight: bold; width: 30%; padding: 10px; border: double white 2px; text-align: center">
<h3>Dates:</h3>
<hr>
@if ($type=="National")
{{$cc->date1}}
{{$cc->date2}}
{{$cc->date3}}
{{$cc->date4}}
@else
{{$cc->date1i}}
{{$cc->date2i}}
{{$cc->date3i}}
{{$cc->date4i}}
@endif
<hr>
<a href="https://coinmac.org/sc/{{$cc->subjectid}}" style="display: block; padding: 10px;">Register</a>
</div>
<p>
    {{$cc->description}}
</p>

<hr>
<p style="color: red;">For more information, please call: <b>2348023262908, 09060008932</b> or <a href="mailto:info@coinmac.org">Click Here To Send us Email</a></p>
@endsection
