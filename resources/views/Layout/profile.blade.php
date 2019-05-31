@extends('layout.apps')

@section('content')
<div class="bodyshape">
<div style="margin-top:5%;">
    <div>
        <img style="margin-right:2%" src="/uploads/avatars/{{ Auth::user()->avatar }}" max-width="400" max-height="400" align="left" "> 
        <div>
        <h3>{{$profile->name}}</h3>
        <p>{{$profile->Carrer}}</p>
        <p style="text-align:justify;">{{$profile->BIOs}}</p>
        </div>
            </div>
        <div style="margin-bottom:30px">
                <h5>Publications</h5>
                <hr align="left" width="100%"  style="background-color:black">
        </div>
<div>

<div class="row">
@foreach($write_books as $book)
<a href="/viewdata/{{$book->id}}" style = "color: inherit;text-decoration: none;">
    <div class="col-xl col-lg-3 col-md-4 col-sm-6 pb-4">
        <div class="card card-block shadow">
            <img class="card-img-top" src="{{asset('img/bali.jpg')}}" width="380" height="160" alt="Card image cap">
            <div class="card-body" style="margin:10px">
                <h5>{{$book->Title}}</h5>
                {!!$book->Content!!}
                <p style="color:#808e95">yesterday, 23:22</p>
            </div>
        </div>
    </div>
</a>
@endforeach

</div>
</div>
</div>

</div>
</div>  
</div>   
@endsection