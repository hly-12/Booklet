@extends('layout.apps')

@section('content')
<div class="bodyshape">
<div style="margin-top:5%;">
    <div>
        <img style="margin-right:2%" src="{{asset('img/profile.jpg')}}" width="300" height="370" align="left" width="400px" height="400px""> 
        <div>
        <h3>PORY SOVANN</h3>
        <p>CEO of booklet, Booklet Co.LTD</p>
        <p style="text-align:justify;">My experience has been a short one, but it has been a life-changing one.

                You see, I used to be more calculating in my feeling, often colsing out of emotions, this led to a healthy lack of envy, anger, jealousy,,, and a questionable lack of emotions I could not explain,
                
                like love.
                
                Keep in mind this was all in high school, and specifially in the first years.
                
                This person, I shall name U, was what I liked about people (when I happened to like people), they were smart, determinated, good and humane,
                
                They fascinated me, the way they felt emotions particularly did, I was very interested in them.
                
                I was also introverted, and preferred to observe.
                
                I missed my chanches to get closer, I preferred to not rush, as I wanted the best for them, something I didn't consider me to be.
                
                Slowly, over the course of a year, we grew closer as people who cared for each other,
                
                One day, with the gentle push of a friend of theirs, they invited me to the movies, I gladly accepted. It was a nice experience, a romantic movie I seemed to enjoy more than them and the start of a habit of talking to them.
                
                Summertime. We had had some walks around the city together, and I wanted to continue that, so I took them to a nice place. The pier in this city has alongside it a big stack of rocks, never knew why, anyway, we got there and chatted, after some climbing. We repeated this the next time we met in very much the same way, except the ending, for, you see, I accompanied them home before heading my way, and as we got there, standing before the door inside the apartment block, we said our goodbyes and I quickly kissed her cheek, in the ensuing confusion, I darted down the stairs.</p>
        </div>
            </div>
        <div style="margin-bottom:30px">
                <h5>Publications</h5>
                <hr align="left" width="100%"  style="background-color:black">
        </div>
<div>

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

</div>
</div>  
</div>   
@endsection