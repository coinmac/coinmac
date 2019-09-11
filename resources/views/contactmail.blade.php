@extends('mmaster')

@section('content')

<h2>Message from COINMAC.ORG Feedback Form</h2><hr>
<p><b>Sender Name:</b> {{$clist->name}}</p>
<p><b>Phone Number: </b> {{$clist->phone}}</p>
<p><b>E-mail: </b> {{$clist->phone}} </p>

<p>
    {!!$clist->messages!!}
</p>

<hr>
<p style="color: red;">For more information, please call: <b>2348023262908, 09060008932</b> or <a href="mailto:{{$clist->email}}">Click Here To Reply</a></p>
@endsection
