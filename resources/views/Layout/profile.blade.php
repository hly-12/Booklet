@extends('layout.apps')

@section('content')
<div class="row">
        <div class="col-6 col-md-4">
            <img class="img-rounded" alt="Cinque Terre" width="300" height="370" style="margin-bottom:10%;" src="{{asset('img/profile.jpg')}}">
        </div>
        <div class="col-12 col-md-8">
            <h1 style="margin-top:8%;">PORY SOVANN</h1>
            <p>Manager of Booklet, Pory.Co Ltd</p>

            <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <h5>MY BIOS</h5>
                    <p>Pory Sovann is a content marketing professional at HubSpot, an inbound marketing and sales platform that helps companies attract visitors, convert leads, and close customers. Previously, Rodney worked as a marketing manager for a tech software startup. He graduated with honors from Columbia University with a dual degree in Business Administration and Creative Writing."
                            Woof, that was dull. Are you still with me? I swear, not even adding a tidbit about his cats would liven that bio up.</p>

            </div>
        </div>
</div>
<div style="margin-bottom:30px">
        <h5>Publications</h5>
        <hr align="left" width="100%"  style="background-color:black">
</div>
<div class="row">
<div class="col-xl col-lg-3 col-md-4 col-sm-6 pb-4">
    <a href="/viewdata">
    <div class="card card-block shadow">
        <img class="card-img-top" src="{{asset('img/bali.jpg')}}" width="380" height="160" alt="Card image cap">
        <div class="card-body" style="margin:10px">
            <h5>Tittle</h5>
            <p class="card-text">Some quick example text to build on the
                 card title and make up the bulk of the card's content.</p>
            <p style="color:#808e95">yesterday, 23:22</p>
        </div>
    </div>
    </a>
</div>
<div class="col-xl col-lg-3 col-md-4 col-sm-6 pb-4">
    <div class="card card-block shadow" >
        <a href="/viewdata">
        <img class="card-img-top" src="{{asset('img/asib.jpg')}}" width="380" height="160" alt="Card image cap">
        <div class="card-body" style="margin:10px">
            <h5>Tittle</h5>
            <p class="card-text">Some quick example text to build on the
                 card title and make up the bulk of the card's content.</p>
            <p style="color:#808e95">yesterday, 23:22</p>
        </div>
        </a>
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
        </div>
 </div>
</div>

        
@endsection