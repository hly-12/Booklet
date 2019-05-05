<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
    .fakeimg {
        height: 200px;
        background: #aaa;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        
    }

    li {
    float: left;
    }

    li a {
    display: block;
   color:grey;
    text-align: center;
    padding: 16px;
    text-decoration: none;
    }
    </style>
</head>
<body >

    <div class=" text-center" style="margin-bottom:0">
        <h1>Booklet</h1>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>    
        </ul>
    </div>  
    </nav>
    
    {!! Form::open(['url' => 'foo/bar']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body','', ['id'=>'article-ckeditor', 'class'=>'form-control','placeholder'=>'Body text'])}}
        </div>

    {!! Form::close() !!}
    
    <script src={{URL::asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    
    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>Footer</p>
    </div>
    

</body>
</html>
