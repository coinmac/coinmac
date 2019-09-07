@extends('mmaster')

@section('content')

{!! $type = \App\use App\coursecatrgories::where('courseid','=',$cc->coursecatid)->first()->category; !!}
<div style="background-image:url('https://coinmac.org/images/course/{{$cc->subjectid}}/{{$cc->image}}'); background-size: cover; background-color:darkblue; width: 100%; min-heigh: 100px; height: auto; padding: 20px; text-align: center;">
    <h2 style="color: white; text-shadow: 2px 2px #000;">{{$cc->subjectname}}</h2>
    <h4>Category: {{$cc->coursecategory}} | {{$type}} </h4>
    
</div>

@endsection
