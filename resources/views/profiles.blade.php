@extends('Layout.apps')

@section('content')
<div class="container" style="margin-bottom:5%;">
    <div class="row">
        {{-- <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }}'s Profile</h2>
            <form enctype="multipart/form-data" action="/profiles" method="POST">
                @csrf
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div> --}}
         <div class="card-body">
                    <form  action="/profiles" method="POST" >
                        @csrf
                        <input type="hidden" id="id_user" name="id_user" value="{{$user->id}}">
                        {{-- <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"> --}}
                        <img src="/uploads/avatars/{{ $user->avatar }}" class="rounded mx-auto d-block mb-4" alt="...">
                        <div class="form-group">

                            <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{$user->name}}">
                                {{-- <input id="name" type="text" class="form-control form-control-lg{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus> --}}
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Email" name="email" value="{{$user->email}}" >
                                {{-- <input id="email" type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required> --}}
                            </div>
                        </div>

                        
                        {{-- add new data --}}
                        <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="Carrer" value="{{$user->Carrer}}">
                                    {{-- <input id="Carrer" type="text" class="form-control form-control-lg{{ $errors->has('Carrer') ? ' is-invalid' : '' }}" placeholder="Carrer" name="Carrer" value="{{ old('Carrer') }}" required autofocus> --}}
                                </div>
                            </div>
                            <div class="form-group">

                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Bio" name="BIOs" value="{{$user->BIOs}}">
                                
                                        {{-- <input id="BIOs"    type="text" class="form-control form-control-lg{{ $errors->has('BIOs') ? ' is-invalid' : '' }}" placeholder="BIOs" name="BIOs" value="{{ old('BIOs') }}" required autofocus> --}}
        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="avatar" class="col-md-3 col-form-label text-md-right">{{ __('Avatar') }}</label>
                                
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" name="avatar">
                                
                                        {{-- <input id="avatar" type="file" class="form-control form-control-lg" name="avatar"> --}}
                                    </div>
                                </div>

                        <div class="form-group">
                            <div class="text-center col-md-12">
                                <button type="submit" class="btn btn-danger px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                        <
                    </form>
                </div>
    </div>
</div>
@endsection