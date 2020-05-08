<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">
    <img src= "{{ asset('images/logo2.png') }}" height="10" alt="Logo here">
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::is('/') ? "active" : "" }}">
          <a class="nav-link" href="/"><b>Home</b></a>
        </li>
        <li class="nav-item {{ Request::is('blog') ? "active" : "" }}">
          <a class="nav-link" href="/blog"><b>Blog</b></a>
        </li>
        <li class="nav-item {{ Request::is('about') ? "active" : "" }}">
          <a class="nav-link" href="/about"><b>About</b></a>
        </li>
        <li class="nav-item {{ Request::is('contact') ? "active" : "" }}">
          <a class="nav-link" href="/contact"><b>Contact</b></a>
        </li>
      </ul>
    @if (Auth::check())
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Hello {{Auth::user()->name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a>
          <a class="dropdown-item" href="#">Profile</a>
        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
        </div>
      </li>
      @else
      <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
    @endif
    </div>
  </nav>