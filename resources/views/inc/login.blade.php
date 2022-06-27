
    <nav class="navbar navbar-inverse navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
          {{-- </button> --}}
          <img src="#" href="#" w-10% h-10% class="mx-3">
          <a class="navbar-brand fs-5" href="#">{{config('app.name','Jobseek')}}</a>
          <div id="navbar" class="navbar-collapse navbar-right text-white" >
            <ul class="text-capitalize nav navbar-nav" >
                <li class="nav-item "><a class="text-white nav-link fs-5" href="#">feedback</a></li>
                <li class="nav-item "><a class="text-white nav-link fs-5" href="#">help</a></li>
                <li class="nav-item "><a class="text-white nav-link fs-5" href="#"></a></li>
            </ul>
          </div>
        <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            @if(Auth()->check())
              <li class="nav-item "> 
                <a class="nav-link text-white text-capitalize" href="{{url('/login') }}">
                <i class="bi bi-box-arrow-in-right text-danger"></i> login</a>
              </li> 
                @else 
                  <li class="nav-item">  <a class="nav-link text-white fs-5" href="{{url('/register') }}">
                  <i class="bi bi-person-plus"></i> Create Account</a></li> 
                @endif
            </ul>
        </div>
    </div> 
  <!--nav-collabse-->
  
   </nav>
   
  
      