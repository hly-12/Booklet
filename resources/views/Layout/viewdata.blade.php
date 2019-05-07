@extends('layout.apps')

@section('content')
<div class="shadow p-3 mb-5 bg-white rounded">
    <h1>Data Science Skills: Web scraping javascript using python</h1>
    <div class="row user-row">
     <div class="col-lg-5">
        <div class="media">
            <a class="pull-left" href="#">
            <img class="media-object dp img-circle" src="{{asset('img/man1.png')}}" style="width: 60px;height:60px;">
            </a>
            <div class="media-body" style="margin-left:20px;">
            <h5 class="media-heading">Pory Sovann <small> Cambodia</small></h5>
            <p>Software Developer at <a href="http://gridle.in">Gridle.in</a></p>
        </div>
    </div>
    </div>   
    <div>
        <h5 style="margin:3%">
            There are different ways of scraping web pages using python. In my previous article, I gave an introduction to web scraping by using the libraries:requests and BeautifulSoup. However, many web pages are dynamic and use JavaScript to load their content. These websites often require a different approach to gather the data.
            There are different ways of scraping web pages using python. In my previous article, I gave an introduction to web scraping by using the libraries:requests and BeautifulSoup. However, many web pages are dynamic and use JavaScript to load their content. These websites often require a different approach to gather the data.
        </h5>
                    </div>
                    <div class="shadow p-3 mb-5 bg-white rounded" style="margin-left:5%;margin-right:5%;">
                    <div class="row"> 
                        <div class="col-12 col-md-8">
                            <h1>Data Science Skills: Web scraping javascript using python</h1>
                            <p>Manager of Booklet, Pory.Co Ltd</p>
                
                            <div class="shadow-sm p-3 mb-5 bg-white rounded">
                                    <h5>MY BIOS</h5>
                                    <p>Pory Sovann is a content marketing professional at HubSpot, an inbound marketing and sales platform that helps companies attract visitors, convert leads, and close customers. Previously, Rodney worked as a marketing manager for a tech software startup. He graduated with honors from Columbia University with a dual degree in Business Administration and Creative Writing."
                                            Woof, that was dull. Are you still with me? I swear, not even adding a tidbit about his cats would liven that bio up.</p>
                            </div>
                        </div>
                    <div class="col-6 col-md-4">
                            <img class="img-rounded" alt="Cinque Terre" width="300" height="370" style="margin-bottom:10%;" src="{{asset('img/pc.png')}}">
                     </div>
            </div>
        </div>           
    </div>
</div>
<div class="shadow p-3 mb-5 bg-white rounded">
<div class="container">
        <div class="row">
                <div class="col">
                        <div class="media">
                                <a class="pull-left" href="#">
                                <img class="media-object dp img-circle" src="{{asset('img/man1.png')}}" style="width: 60px;height:60px;">
                                </a>
                    
                                <div class="media-body" style="margin-left:20px;">
                                <h5 class="media-heading">Pory Sovann</h5>
                                <p>Data Scientist at @iqblade 💻 PhD Physics 💥 #bigdata by day, fitness & yoga enthusiast by night 🧘‍♀️ All views here are my own.</p>
                            </div>
                        </div>
                        
                </div>
                <div class="col">
                   <div class="media">
                                <a class="pull-left" href="#">
                                <img class="media-object dp img-circle" src="{{asset('img/man1.png')}}" style="width: 60px;height:60px;">
                                </a>
                    
                                <div class="media-body" style="margin-left:20px;">
                                <h5 class="media-heading">Pory Sovann</h5>
                                <p>Data Scientist at @iqblade 💻 PhD Physics 💥 #bigdata by day, fitness & yoga enthusiast by night 🧘‍♀️ All views here are my own.</p>
                            </div>
                        </div>
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