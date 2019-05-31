@extends('Layout.apps')

@section('content')
    <h1>Add new post</h1>
    {!! Form::open (['action'=>'DatabaseController@addBook','method'=>'POST','enctype'=>'multipart/form-data'])!!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('category','Category')}}
            {!! Form::select('category', $list,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}

        </div>
        <div class="form-group">
            
            {{Form::file('cover_image')}}

        </div>
        <div class="text-right">
            {{Form::submit('Create',['class'=>'btn btn-primary'])}}

        </div>
    
    {!!Form::close()!!}
@endsection