<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Kokiku | @yield('title')</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

  <!-- Css Styles -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header Section Begin -->
  <header class="header-section-other">
    <div class="container-fluid">
      <div class="logo">
        <a href="/"><img src="{{ asset('images/kokiku.png') }}" alt="" height="50"></a>
      </div>
      <div class="nav-menu">
        <nav class="main-menu mobile-menu">
          <ul>
            <li class="active"><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/recipes') }}">Recipes</a></li>
            @if(empty(Auth::user()))
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Daftar</a></li>
            @else
            <li><a href="{{ route('login') }}">{{ ucfirst(Auth::user()->name) }}</a>
              <ul class="sub-menu">
                  <li><a href="{{ url('/profile') }}">Edit Profile</a></li>
                  <li><a href="{{ url('/upload-recipes') }}">Upload Resep</a></li>
                  <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </ul>
            </li>
            @endif
          </ul>
        </nav>
        <div class="nav-right search-switch">
          <i class="fa fa-search"></i>
        </div>
      </div>
      <div id="mobile-menu-wrap"></div>
    </div>
  </header>
  <!-- Header End -->

  <!-- Hero Search Section Begin -->
  <div class="hero-search set-bg" data-setbg="{{ asset('img/search-bg.jpg') }}">
    <div class="container">
      <div class="filter-table">
        <form action="{{ url('/search') }}" class="filter-search" method="post">
          @csrf
          <input name="search" type="text" placeholder="Search recipe">
          <button type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Hero Search Section End -->

  <!-- Recipe Section Begin -->
  <section class="recipe-section spad">

    @yield('content')

  </section>
  <!-- Recipe Section End -->

  <!-- Footer Section Begin -->
  <footer class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="fs-left">
            <div class="logo">
              <a href="/">
                <img src="{{ asset('images/kokiku.png') }}" alt="">
              </a>
            </div>
            <p>Platform kumpulan resep-resep masakan.</p>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1">
            <form action="#" class="subscribe-form">
              <h3>Subscribe to our newsletter</h3>
              <input type="email" placeholder="Your e-mail">
              <button type="submit">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model -->
    <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" method="post" action="{{ url('/search') }}">
          @csrf
          <input name="search" type="text" id="search-input" placeholder="Cari Resep.....">
        </form>
      </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @stack('script')

  </body>

  </html>
