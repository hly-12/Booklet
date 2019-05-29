@extends('Layout.apps')

@section('content')
    <h1>Add new post</h1>
    {!! Form::open (['action'=>'DatabaseController@addBook','method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}

        </div>
        {{Form::submit('Create',['class'=>'btn btn-primary'])}}
    
    {!!Form::close()!!}
@endsection