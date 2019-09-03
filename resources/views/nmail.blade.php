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
                            <h3>{{$request->ntitle}}</h3>
                            <hr>
                            <p>{{$request->body}}</p>                            
                            
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
