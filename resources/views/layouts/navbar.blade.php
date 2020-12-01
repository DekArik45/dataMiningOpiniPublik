<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

<div class="navbar-header">
  <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
    data-toggle="menubar">
    <span class="sr-only">Toggle navigation</span>
    <span class="hamburger-bar"></span>
  </button>
  <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
    data-toggle="collapse">
    <i class="icon md-more" aria-hidden="true"></i>
  </button>
  <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
    <img class="navbar-brand-logo" src="{{asset('asset/images/Lambang Daerah Provinsi Bali.png')}}" title="Diskominfos">
    <span class="navbar-brand-text hidden-xs-down"> DISKOMINFOS</span>
  </div>
  <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
    data-toggle="collapse">
    <span class="sr-only">Toggle Search</span>
    <i class="icon md-search" aria-hidden="true"></i>
  </button>
</div>

<div class="navbar-container container-fluid">
  <!-- Navbar Collapse -->
  <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
    <!-- Navbar Toolbar -->
    <ul class="nav navbar-toolbar">
      <li class="nav-item hidden-float" id="toggleMenubar">
        <a class="nav-link" data-toggle="menubar" href="#" role="button">
            <i class="icon hamburger hamburger-arrow-left">
              <span class="sr-only">Toggle menubar</span>
              <span class="hamburger-bar"></span>
            </i>
          </a>
      </li>
      <li class="nav-item hidden-sm-down" id="toggleFullscreen">
        <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
          <span class="sr-only">Toggle fullscreen</span>
        </a>
      </li>
      <li class="nav-item hidden-float">
        <a class="nav-link icon md-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
          role="button">
          <span class="sr-only">Toggle Search</span>
        </a>
      </li>
    </ul>
    <!-- End Navbar Toolbar -->
  </div>
  <div class="collapse navbar-collapse navbar-collapse-toolbar" id="example-navbar-toolbar-1" style="margin-right: 35px">

    <!-- Authentication Links -->
    @guest
      <ul class="nav navbar-toolbar navbar-right">
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
      </ul>
      {{-- @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
      @endif --}}
    @else
      <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
        <li class="nav-item dropdown">
          <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false">
            <span class="avatar avatar-online">

              @if (Auth::user()->is_admin==1)
                <img src="{{asset('asset/global/portraits/11.jpg')}}" alt="...">
              @else
                <img src="{{asset('asset/global/portraits/9.jpg')}}" alt="...">
              @endif

              <i></i>
            </span>
          </a>
          <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
              <i class="icon md-account" aria-hidden="true"></i> {{ Auth::user()->name }}
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" role="menuitem" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="icon md-power" aria-hidden="true"></i> Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

          </div>
        </li>
      </ul>
    @endguest

    {{-- <button type="submit" class="btn btn-default navbar-right navbar-btn">Sign in</button> --}}

  </div>
  <!-- End Navbar Collapse -->

  <!-- Site Navbar Seach -->
  <div class="collapse navbar-search-overlap" id="site-navbar-search">
    <form role="search">
      <div class="form-group">
        <div class="input-search">
          <i class="input-search-icon md-search" aria-hidden="true"></i>
          <input type="text" class="form-control" name="site-search" placeholder="Search...">
          <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
            data-toggle="collapse" aria-label="Close"></button>
        </div>
      </div>
    </form>
  </div>
  <!-- End Site Navbar Seach -->
</div>
</nav>