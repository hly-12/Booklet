@extends('layout.apps')

@section('content')
<div class="card shadow p-3 mb-5 bg-white rounded" style="margin-top:5%">
    <h1>{{$book->Title}}</h1>
    <div class="row user-row">
        <div class="col-lg-12">
            <div class="media">
                <a class="pull-left" href="#">
                <img class="media-object dp img-circle" src="/uploads/avatars/{{ $book->user->avatar }}" style="width: 60px;height:60px;margin-bottom:20px;">
                </a>
                <div class="media-body" style="margin-left:20px;">
                    <h5 class="media-heading">{{$book->user->name}}</h5>
                    <p>{{$book->user->Carrer}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="font-family: Lucida Console, Courier, monospace;font-size:medium;margin-left:2%;text-align: justify;">
                    {!!$book->Content!!}
                </div>
            </div>
        </div>   
        <div>
            <div style="margin-top:30%" class="card-text">
                
            </div>
        </div>           
    </div>
</div>
<div class="row" style="margin-top:3%;margin-bottom:3%;">
        <div class="col-xl col-lg-3 col-md-4 col-sm-6 pb-4">
            <div class="card card-block shadow">
                <img class="card-img-top" src="{{asset('img/bali.jpg')}}" width="380" height="160" alt="Card image cap">
                <div class="card-body" style="margin:10px">
                    <h5>Tittle</h5>
                    <p class="card-text">Some quick example text to build on the
                         card title and make up the bulk of the card's content.</p>
                    <p style="color:#808e95">yesterday, 23:22</p>
                </div>

                <div class="media" style="margin-left:10%">
                        <a class="pull-left" href="#">
                        <img class="media-object dp img-circle" src="{{asset('img/man1.png')}}" style="width: 30px;height:30px;">
                        </a>
                        <div class="media-body" style="margin-left:20px;">
                        <p class="media-heading">Pory Sovann</p>
                    </div>
                    <div class="media-body">
                            <a class="pull-left" href="#">
                                    <i class="far fa-handshake"></i>
                            </a>
                            <p>2234</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl col-lg-3 col-md-4 col-sm-6 pb-4">
            <div class="card card-block shadow">
                <img class="card-img-top" src="{{asset('img/asib.jpg')}}" width="380" height="160" alt="Card image cap">
                <div class="card-body" style="margin:10px">
                    <h5>Tittle</h5>
                    <p class="card-text">Some quick example text to build on the
                         card title and make up the bulk of the card's content.</p>
                    <p style="color:#808e95">yesterday, 23:22</p>
                </div>
                <div class="media" style="margin-left:10%">
                        <a class="pull-left" href="#">
                        <img class="media-object dp img-circle" src="{{asset('img/man1.png')}}" style="width: 30px;height:30px;">
                        </a>
                        <div class="media-body" style="margin-left:20px;">
                        <p class="media-heading">Pory Sovann</p>
                    </div>
                    <div class="media-body">
                            <a class="pull-left" href="#">
                                    <i class="far fa-handshake"></i>
                            </a>
                            <p>2234</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-xl col-lg-3 col-md-4 col-sm-6 pb-4">
            <div class="card card-block shadow">
                <img class="card-img-top" src="{{asset('img/indai.jpg')}}" width="380" height="160" alt="Card image cap">
                <div class="card-body" style="margin:10px">
                    <h5>Tittle</h5>
                    <p class="card-text">Some quick example text to build on the
                         card title and make up the bulk of the card's content.</p>
                    <p style="color:#808e95">yesterday, 23:22</p>
                </div>
                <div class="media" style="margin-left:10%">
                        <a class="pull-left" href="#">
                        <img class="media-object dp img-circle" src="{{asset('img/man1.png')}}" style="width: 30px;height:30px;">
                        </a>
                        <div class="media-body" style="margin-left:20px;">
                        <p class="media-heading">Pory Sovann</p>
                    </div>
                    <div class="media-body">
                            <a class="pull-left" href="#">
                                    <i class="far fa-handshake"></i>
                            </a>
                            <p>2234</p>
                    </div>
                </div>
            </div>
            
     </div>
</div>   
<h4><b>Responses</b></h4>
<div style="margin:3%">
        <input type="text" id="fname" name="fname"  placeholder="Write something here...">
</div>

@endsection