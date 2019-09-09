@extends('mmaster')

@section('content')

@php 
    $type = \App\coursecatrgories::where('courseid','=',$clist->coursecatid)->first()->category;
@endphp
<div style="background-image:url('https://coinmac.org/images/course/{{$clist->subjectid}}/{{$clist->image}}'); background-size: cover; background-color:darkblue; width: 100%; min-heigh: 100px; height: auto; padding: 20px; text-align: center;">
    <h2 style="color: white; text-shadow: 2px 2px #000;">{{$clist->subjectname}}</h2>
    <h4 style="color: white; text-shadow: 2px 2px #000;">Category: {{$clist->coursecategory}} | {{$type}} </h4>
    
</div>

<h2 style="text-align: center; color:green">
    COURS FEE: 
    @if ($type=="National")
    {{$clist->amount}}
    @else
    {{$clist->amounti}}
    @endif
</h2>

<div style="float: right; background-color: darkblue; color: white; font-weight: bold; width: 30%; padding: 10px; border: double darkblue 2px; text-align: center">
<h3>Dates:</h3>
<hr>
@if ($type=="National")
{{$clist->date1}}<br>
{{$clist->date2}}<br>
{{$clist->date3}}<br>
{{$clist->date4}}
@else
{{$clist->date1i}}<br>
{{$clist->date2i}}<br>
{{$clist->date3i}}<br>
{{$clist->date4i}}
@endif
<hr>
<a href="https://coinmac.org/sc/{{$clist->subjectid}}" style="display: block; padding: 10px; text-decoration: none; background-color: #ffffff; border: 2px solid white">Register</a>
</div>
<p>
    {!!$clist->description!!}
</p>

<hr>
<p style="color: red;">For more information, please call: <b>2348023262908, 09060008932</b> or <a href="mailto:info@coinmac.org">Click Here To Send us Email</a></p>
@endsection
