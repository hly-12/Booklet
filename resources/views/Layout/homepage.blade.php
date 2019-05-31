@extends('Layout.apps')

@section('content')
<div class="row" style="margin-top:3%;">
    @foreach($latest_books as $book)
    <a href="/viewdata/{{$book->id}}" style = "color: inherit;text-decoration: none;">
        <div class="col-xl col-lg-3 col-md-4 col-sm-6 pb-4">
            <div class="card card-block shadow">
                <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Batian_Nelion_and_pt_Slade_in_the_foreground_Mt_Kenya.JPG/220px-Batian_Nelion_and_pt_Slade_in_the_foreground_Mt_Kenya.JPG" alt="Card image cap">
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
<div class="row justify-content-end">
    <div class="col-2">
        <a href="#" class="badge badge-light" style="font-size:20px;color:#808e95">More features </a>
    </div>
</div>

<div class="row justify-content-center" style="margin-top: 24px">
    <div class="col-8 shadow mb-5">
        <div>
            {{-- Member block --}}
            <div style="padding:8%" >
                <div class="row border border-secondary border-top-0 border-right-0 border-left-0">
                    <div class="col-md-4 "style="font-size:1.5rem" >
                        <ul>
                            <li>Most View</li>
                        <ul>
                    </div>
                    <div class="col-md-3 ml-auto m-2">
                        <a href="#"  style="color:#808e95;">More features </a>
                    </div>
                    
                    
                    
                </div>
                @foreach($most_view_books as $book)
                    @if($loop->first)
                    <a href="/viewdata/{{$book->id}}" style = "color: inherit;text-decoration: none;">

                    <div class="media pt-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Batian_Nelion_and_pt_Slade_in_the_foreground_Mt_Kenya.JPG/220px-Batian_Nelion_and_pt_Slade_in_the_foreground_Mt_Kenya.JPG" class="rounded align-self-start mr-3" alt="...">
                        <div class="media-body">
                            <p style="font-size:90%;color:#808e95">{{$book->category->Genre}}</p>
                            <h5 class="mt-0">{{$book->Title}}</h5>
                            {!!$book->Content!!}
                        </div>
                    </div>
                    </a>
                    @else
                    <a href="/viewdata/{{$book->id}}" style = "color: inherit;text-decoration: none;">

                    <div class="media pt-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Batian_Nelion_and_pt_Slade_in_the_foreground_Mt_Kenya.JPG/220px-Batian_Nelion_and_pt_Slade_in_the_foreground_Mt_Kenya.JPG" class="rounded align-self-start mr-3" alt="...">
                        <div class="media-body">
                            <p style="font-size:90%;color:#808e95">{{$book->category->Genre}}</p>
                            <h5 class="mt-0">{{$book->Title}}</h5>
                            {!!$book->Content!!}
                        </div>
                    </div>
                    </a>
                    @endif

                @endforeach
               
            </div>
            {{-- Member block --}}
        </div>
        <div>
            {{-- Fiction block --}}
            <div style="padding:8%" >
                <div class="row border border-secondary border-top-0 border-right-0 border-left-0">
                    <div class="col-md-5" style="font-size:1.5rem">
                        <ul>
                            <li>Most popular</li>
                        <ul>
                    </div>
                    <div class="col-md-3 ml-auto m-2">
                        <a href="#"  style="color:#808e95;">Most Popular</a>
                    </div>
                    
                </div>
            @foreach($popular_books as $book)
                <a href="/viewdata/{{$book->id}}" style = "color: inherit;text-decoration: none;">

                    @if($loop->first)
                    <div class="media pt-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Batian_Nelion_and_pt_Slade_in_the_foreground_Mt_Kenya.JPG/220px-Batian_Nelion_and_pt_Slade_in_the_foreground_Mt_Kenya.JPG" class="rounded align-self-start mr-3" alt="...">
                        <div class="media-body">
                            <p style="font-size:90%;color:#808e95">{{$book->category->Genre}}</p>
                            <h5 class="mt-0">{{$book->Title}}</h5>
                            {!!$book->Content!!}
                        </div>
                    </div>
                    @else
                    <div class="media pt-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Batian_Nelion_and_pt_Slade_in_the_foreground_Mt_Kenya.JPG/220px-Batian_Nelion_and_pt_Slade_in_the_foreground_Mt_Kenya.JPG" class="rounded align-self-start mr-3" alt="...">
                        <div class="media-body">
                            <p style="font-size:90%;color:#808e95">{{$book->category->Genre}}</p>
                            <h5 class="mt-0">{{$book->Title}}</h5>
                            {!!$book->Content!!}
                        </div>
                    </div>
                    @endif
                </a>
                @endforeach
               
            </div>
            {{-- Fiction block --}}
        </div>
    </div>
    <div class="col-4">
        <div class="shadow">
             <div class="p-2"style="font-size:1.5rem">
                <ul>
                    <li>Most popular article</li>
                <ul>
            </div>
            <div class="row">
                <div class="col-10 ml-4" >
                    <p style="color:#808e95">technology</p>
                    <h5 >Top-aligned media</h5>
                    <p>Cras sit amet nibh libero, in gravida nulla. </p>
                        
                </div>
                <div class="col-10 ml-4" >
                    <p style="color:#808e95">technology</p>
                    <h5 >Top-aligned media</h5>
                    <p>Cras sit amet nibh libero, in gravida nulla. </p>
                        
                </div>
                <div class="col-10 ml-4" >
                    <p style="color:#808e95">technology</p>
                    <h5 >Top-aligned media</h5>
                    <p>Cras sit amet nibh libero, in gravida nulla. </p>
                        
                </div>
            </div>
        </div>
        <div class="row">
            <ul>
                <li><a href="#">Help</a></li>
                <li><a href="#">Status</a></li>
                <li><a href="#">Writers</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">About</a></li>
                
            </ul>
        </div>
    </div>
</div>
@endsection