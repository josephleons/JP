<nav class="navbar navbar-inverse navbar-expand-lg navbar-dark bg-dark mx-auto">
  <div class="container-fluid">
    {{-- </button> --}}
    <img src="#" href="#" w-10% h-10% class="mx-3">
    <div class="navbar-header">
      <span class="open-slide">
        <a href="#" onclick="openSlideMenu()">
          <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5" />
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5" />
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5" />
          </svg>
        </a>
      </span>
      <a class="navbar-brand fs-4" href="#">{{config('app.name','Jobseek')}}</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="nav-item "><a class="nav-link text-white fs-5" href="{{url('/dashboard')}}">Dashboard</a></li>
        @if(Auth()->check())
        <li class="nav-item">
          <a class="nav-link text-white fs-5" href="{{Auth()->user()->username}}">HI mr welcome </a>
        </li>
        @else
        <li class="nav-item">
        <li class="nav-item"><a class="nav-link text-white fs-5" href="{{url('/login') }}">Your not Login</a></li>
        </li>
        @endif
      </ul>
    </div>
    {{-- drop menu --}}
    <!-- Right Side Of Navbar -->
    <span class="nav-item dropdown text-muted mr-5">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">
        <span class="text-muted ml-5" style="text-transform:capitalize">
          <i class="bi bi-person-circle"></i>
        </span>
      </a>
      <div class="dropdown-menu" style="text-transform:capitalize">
        <a class="dropdown-item" href="{{url('/profile')}}">Profile<i class="bi bi-person-square ml-5"></i></a>
        <a class="dropdown-item mt-1" href="#">Setting<i class="bi bi-sliders ml-5"></i></a>
        <a class="dropdown-item mt-1" href="#">Preference<i class="fas fa-user ml-4"></i></a>
        <div class="dropdown-divider"></div>
        @if(Auth()->check())
        <a class="dropdown-item mt-1" href="{{('/logout')}}">Logout<i class="bi bi-box-arrow-left ml-5"></i></a>
        @endif
      </div>
    </span>
  </div>
  </div>
</nav>
<!--nav-collabse-->
<div id="side-menu" class="side-nav">
  <ul class="nav navbar-nav" style="text-transform: capitalizes">
    <a href="#" class="btn-close" onclick="closeSlideMenu()"><small class="mr-5"></small>&times;</a>
    {{-- <p class="nav-link text-muted ml-5 text-white">Dashboard</p> --}}
    <li class="nav-item ml-5 pt-5">
      <a class='nav-link  active text-muted' href="{{url('/users')}}"> <em class="bi bi-person-plus m-3"
          style="color:#30BCED;"></em>Users</a>
    </li>
    <li class="nav-item ml-5">
      <a class='nav-link text-muted' href="{{url('/posts')}}"> <i class="bi bi-clipboard m-3"
          style="color:#F56565;"></i>Posts</a>
    </li>
    <li class="nav-item ml-5">
      <a class='nav-link text-muted' href="{{url('/company')}}"> <i class="bi bi-stickies-fill m-3"
          style="color:#30BCED;"></i>Companies</a>
    </li>
    <li class="nav-item ml-5">
      <a class='nav-link text-muted' href="{{url('/create')}}"> <i class="bi bi-person m-3"
          style="color:#30BCED;"></i>Applicants Form</a>
    </li>
    </hr>
    <h5 class="ml-5 text-white">Other</h5>
    <li class="nav-item ml-5">
      <a class='nav-link text-muted' href="{{url('/applicant')}}"> <i class="bi bi-card-checklist m-3"
          style="color:#F56565;"></i>Job
        applyed</a>
    </li>
    </hr>
  </ul>
</div>
<div id="main">
  <div class="row" style="margin-left:10%;padding-top:4%">
    <div class="col-lg-4">
      <div class="card" style="-webkit-box-shadow: 7px 9px 10px -6px rgba(57,57,58,0.98); 
                box-shadow: 7px 9px 10px -6px rgba(57,57,58,0.98);">
        <div class="card-body text-center">
          <a href="#" class="nav-link ">
            <i class="bi bi-stickies-fill nav-icon" style="color:#F56565;font-size:36px;"></i>
            <ul class="mx-5 pt-3 nav nav-item active"
              style="color:#2D3748;font-size:14px; text-transform:uppercase;font-weight:bold">
              <li class="lead">Manage Posts</li>
            </ul>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card" style="-webkit-box-shadow: 7px 9px 10px -6px rgba(57,57,58,0.98); 
                box-shadow: 7px 9px 10px -6px rgba(57,57,58,0.98);">
        <div class="card-body text-center">
          <a href="#" class="nav-link ">
            <i class="bi bi-person-plus nav-icon" style="color:#F56565;font-size:36px;"></i>
            <ul class="mx-5 pt-3 nav nav-item"
              style="color:#2D3748;font-size:14px; text-transform:uppercase;font-weight:bold">
              <li class="lead">Manage applicants</li>
            </ul>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card" style="-webkit-box-shadow: 7px 9px 10px -6px rgba(57,57,58,0.98); 
                          box-shadow: 7px 9px 10px -6px rgba(57,57,58,0.98);">
        <div class="card-body text-center">
          <a href="#" class="nav-link ">
            <i class="bi bi-book nav-icon" style="color:#F56565;font-size:36px;"></i>
            <ul class="mx-5 pt-3 nav nav-item"
              style="color:#2D3748;font-size:14px; text-transform:uppercase;font-weight:bold">
              <li class="lead">Manage Users</li>
            </ul>
          </a>
        </div>
      </div>
    </div>
  </div>
  {{-- row contente center --}}
</div>
<script>
  function openSlideMenu(){
            document.getElementById('side-menu').style.width ="200px";
            document.getElementById('main').style.marginLeft ="20px";
        }
        function closeSlideMenu(){
            document.getElementById('side-menu').style.width ="0";
            document.getElementById('main').style.marginLeft ="0";
        }
</script>