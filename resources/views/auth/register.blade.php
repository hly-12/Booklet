@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-top:10%;">
    <div class="row full-height-vh">
        <div class="col-12 d-flex align-items-center justify-content-center gradient-aqua-marine">
            <div class="card px-4 py-2 box-shadow-2 width-400">
                <div class="text-center" style="margin-top:15px;">
                    <img src="{{asset('img/logo.png')}}" alt="company-logo" class="mb-3" width="60">
                    <h4 class="text-uppercase text-bold-400 grey darken-1" style="font-weight: bold;">SignUp</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control form-control-lg{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control form-control-lg" placeholder="Confirm Password" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="text-center col-md-12">
                                <button type="submit" class="btn btn-danger px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0">
                                    {{ __('SignUp') }}
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
