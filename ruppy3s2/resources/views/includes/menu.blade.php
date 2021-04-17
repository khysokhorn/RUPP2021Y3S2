<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pages.about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.detail', ['id' => 1]) }}">Sample Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pages.contact') }}">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('products.index') }}">Products</a>
          </li>

          @if(Auth::user())
            <form id="frmLogout" action="{{ url('/logout') }}" method="POST">
              @csrf
            </form>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="document.getElementById('frmLogout').submit();">Logout</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/register') }}">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/login') }}">Login</a>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>