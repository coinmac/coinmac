@extends('mmaster')

@section('content')

<div style="background-image:url('https://coinmac.org/images/course/logo.jpg'); background-size: cover; background-color:darkblue; width: 100%; min-heigh: 100px; height: auto; padding: 20px; text-align: center;">
    <h2 style="color: white; text-shadow: 2px 2px #000;">{{$clist->ntitle}}</h2>
</div>

<p>
    {!!$clist->body!!}
</p>

<hr>
<p style="color: red;">For more information, please call: <b>2348023262908, 09060008932</b> or <a href="mailto:info@coinmac.org">Click Here To Send us Email</a></p>
@endsection
