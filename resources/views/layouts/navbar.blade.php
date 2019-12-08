<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Famos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/posts')}}">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/about')}}">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('/contact')}}">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="main">
    <img src='{{asset("imgs/main.jpg")}}' alt="no logo" class="main-img">
    <div class="main-caption">
      <h1 class="text-center bg-secondry">@yield('title')</h1>  
    </div>
     
  </div>