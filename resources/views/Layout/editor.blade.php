@extends('Layout.apps')

@section('content')
<div style="margin-bottom:5%;margin-top:5%;">
    <h1>Add new post</h1>
    {!! Form::open (['action'=>'DatabaseController@addBook','method'=>'POST'])!!}
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
        <div class="text-right">
        {{Form::submit('Create',['class'=>'btn btn-primary'])}}
        </div>
    {!!Form::close()!!}
</div>
@endsection