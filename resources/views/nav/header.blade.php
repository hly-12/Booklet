<div class="container-fluid" style="margin-bottom:10px;margin-top:10px;padding-left:20%">    
    <ul class="list-inline" style="padding-bottom:10%;">
      <li ><img src="{{asset('img/logo.png')}}" width="65" height="70"></li>
      <li style="margin-top:15px;margin-left:10px"><h1>Booklet</h1></li>
     
        @if (Auth::guest())
          <li class="float-right" style="padding-right:10%;margin-top:35px;padding-left:10px;"><a href="{{route('login')}}" class="btn btn-success" role="button">Log in</a></li>
          <li class="float-right" style="margin-top:15px;padding-top:1%;"><p style="font-weight: bold ;"><a href="/profile">Become a member</p></a></li>
        @else
          {{-- <li class="float-right" style="padding-right:10%;margin-top:35px;padding-left:10px;"><a href="{{route('logout')}}" class="btn btn-success" role="button">Log out</a><form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li> --}}
          {{-- <li class="float-right" style="margin-top:15px;padding-top:1%;"><p style="font-weight: bold ;"><a href="/profile">{{ Auth::user()->name }}</p></a></li> --}}
          
          <li class="dropdown float-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                  <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
             
            <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/home') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                  <li> <a href="{{route('logout')}}"
                    onclick="event.preventDefault();
                            document.getElementById('frm-logout').submit();">
                    Logout
                </a>
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form></li>
          </li>
    </ul>
        @endif
        <li class="float-right" style="margin-top:1%;"><a href="#" class="search_icon"><i class="fa fa-search" aria-hidden="true"></i></a></li>
    </ul>
</div> 
