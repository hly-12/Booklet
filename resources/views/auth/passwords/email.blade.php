@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-top:10%;">
    <div class="row full-height-vh">
        <div class="col-12 d-flex align-items-center justify-content-center gradient-aqua-marine">
            <div class="card px-4 py-2 box-shadow-2 width-400">
                <div class="text-center" style="margin-top:15px;">
                    <img src="{{asset('img/logo.png')}}" alt="company-logo" class="mb-3" width="60">
                    <h4 class="text-uppercase text-bold-400 grey darken-1" style="font-weight: bold;">Reset Password</h4>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12 ">
                                <input id="email" type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="email" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="text-center col-md-12">
                                <button type="submit" class="btn btn-danger px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0">
                                    {{ __('Sent to your email') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
