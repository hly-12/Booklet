@extends('layouts.app')

@section('content')

<div class="container-fluid" style="margin-top:10%;">
    <div class="row full-height-vh">
        <div class="col-12 d-flex align-items-center justify-content-center gradient-aqua-marine">
            <div class="card px-4 py-2 box-shadow-2 width-400">
                <div class="text-center" style="margin-top:15px;">
                    <img src="{{asset('img/logo.png')}}" alt="company-logo" class="mb-3" width="60">
                    <h4 class="text-uppercase text-bold-400 grey darken-1" style="font-weight: bold;">Login</h4>
                </div>

                
                <div class="card-body">
                    <div class="card-block">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Passwoord" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0 ml-5">
                                            <input type="checkbox" class="custom-control-input" checked id="rememberme" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label float-left" for="rememberme">Remember Me</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        

                        <div class="form-group">
                            <div class="text-center col-md-12">
                                <button type="submit" class="btn btn-danger px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                
                        <div class="text-center">
                            <div class="text-center mb-1">Forgot Password? @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"><b>Reset</b>
                                    @endif
                                </a></div>
                            <div class="text-center">Don't have an account? <a href="{{ route('register') }}"><b>Signup</b></a></div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
