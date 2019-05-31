@extends('layout.apps')

@section('content')
<div class="bodyshape">
<div class="row" style="margin-top:5%;">
    <div class="col-auto">
    <img style="margin-right:2%;" src="/uploads/avatars/{{ Auth::user()->avatar }}" max-width="400" max-height="400" align="left"> 
    </div >
    <div class="col">
    <h3>{{$profile->name}}</h3>
    <p>{{$profile->Carrer}}</p>
    <p style="text-align:justify;">{{$profile->BIOs}}</p>
    </div>
</div>
<div style="margin-top:2%;">
    <div style="margin-bottom:30px">
        <h5>Publications</h5>
        <hr align="left" width="100%"  style="background-color:black">
</div>
<div class="row" style="margin-bottom:20px;">
@foreach($write_books as $book)
<a href="/viewdata/{{$book->id}}" style = "color: inherit;text-decoration: none;margin:1%;width:355px;">
        <div class="card card-block shadow" style="height: 100%;margin-bottom:3%;">
            <img class="card-img-top" src="{{asset('img/bali.jpg')}}" width="380" height="160" alt="Card image cap">
            <div class="card-body">
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
</div>
</div>
 
@endsection