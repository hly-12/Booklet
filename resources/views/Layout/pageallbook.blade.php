@extends('layout.apps')

@section('content')
<div class="row" style="margin-top:3%;">
    @foreach($books as $book)
    <a href="/viewdata/{{$book->id}}" style = "color: inherit;text-decoration: none;min-height: 400px;" class="col-4" >
            <div class="card card-block shadow" style="height: 95%">
                <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Batian_Nelion_and_pt_Slade_in_the_foreground_Mt_Kenya.JPG/220px-Batian_Nelion_and_pt_Slade_in_the_foreground_Mt_Kenya.JPG" alt="Card image cap" width="250" height="240">
                <div class="card-body" style="margin:10px">
                    <h5>{{$book->Title}}</h5>
                    <div style="max-height:45px;overflow-y:hidden">
                    {!!$book->Content!!}
                    </div>
                    <p style="color:#808e95">yesterday, 23:22</p>
                </div>
            </div>  
    </a>
    @endforeach
</div>
    
@endsection