@extends('amaster')

@section('content')
<hr>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <div class="card">
                <div class="card-header h1">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                        <div class="alert alert-success" role="alert">
                            
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                        </div>

                        <div class="float-right">
                            Already Verified? <a href="/login" class="btn btn-primary float-right">Click Here to Login</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
