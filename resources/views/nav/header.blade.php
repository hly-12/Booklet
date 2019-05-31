<div class="container-fluid dropdown" style="margin-bottom:0px;margin-top:10px;padding-left:20%">    
    <ul class="list-inline">
      <li ><a href="/"><img src="{{asset('img/logo.png')}}" width="65" height="70"></a></li>
      <li style="margin-top:15px;margin-left:10px"><h1>Booklet</h1></li>
     
        @if (Auth::guest())
          <li class="float-right" style="padding-right:10%;margin-top:35px;padding-left:10px;"><a href="{{route('login')}}" class="btn btn-success" role="button">Log in</a></li>
          <li class="float-right" style="margin-top:15px;padding-top:1%;"><p style="font-weight: bold ;"><a href="/profile">Become a member</p></a></li>
        @else
          <!-- {{-- <li class="float-right" style="padding-right:10%;margin-top:35px;padding-left:10px;"><a href="{{route('logout')}}" class="btn btn-success" role="button">Log out</a><form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li> --}}
          {{-- <li class="float-right" style="margin-top:15px;padding-top:1%;"><p style="font-weight: bold ;"><a href="/profile">{{ Auth::user()->name }}</p></a></li> --}}
           -->
          <li class="float-right" >
            <ul class="dropdown-menu"  role="menu">
                  <li>
                    <a class="dropdown-item" href="/profile/{{Auth::user()->id}}"><i class="fa fa-btn fa-user"></i>Profile</a>
                    <a class="dropdown-item" href="{{ url('/create') }}"><i class="fa fa-btn fa-book"></i>New Story</a>
                    <a class="dropdown-item" href="{{route('logout')}}">
                               <i class="fa fa-btn fa-power-off"></i>
                        Logout
                        </a>
                    <form class="dropdown-item" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </li>
            </ul>        
            <a href="#" class="dropdown-toggle float-right" data-toggle="dropdown" role="button" aria-expanded="false" style="font-weight: boldposition:relative; ">
                {{ Auth::user()->name }}
            </a>
            <a href="#" class="float-right" data-toggle="dropdown" role="button" aria-expanded="false" style="font-weight: boldposition:relative;">
                <img class="float-right"   src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; top:10px;  border-radius:50%;">
            </a>
        @endif
        
    </ul>
</div> 
<nav class="navbar navbar-dark bg-dark">
    @foreach($categories as $category)
      @if($loop->first)
        <a class="nav-item nav-link text-ligh" style="padding-left:20%;color:white" href="/">{{ $category->Genre }}</a>
      @elseif($loop->last)
        <a class="nav-item nav-link text-ligh" style="padding-right:20%;color:white"  href="/profile">{{ $category->Genre }}</a>
      @else 
        <a class="nav-item nav-link text-ligh" style="color:white" href="#">{{ $category->Genre }}</a>
      @endif
    @endforeach
  </nav>
