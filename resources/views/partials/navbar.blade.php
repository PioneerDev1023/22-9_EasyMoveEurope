<!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('img/logo (2).png') }}" alt="logo">
        <!-- <h1>Logis</h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="/service">How it works</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/about">About us</a></li>
          <li class="dropdown">
            <a href="#">
              <span>
                @guest    
                    My account
                @else
                    {{ Auth::user()->name }}
                @endguest
              </span> 
              <i class="bi bi-chevron-down dropdown-indicator"></i>
            </a>
            <ul>
              @guest
                <li><a href="/whosignup">Sign Up</a></li>
                <li><a href="/login">Sign In</a></li>
              @else
                <li><a href="#">Dashboard</a></li>
                <li>
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>
              @endguest
            </ul>
          </li>
          <!-- <li><a class="get-a-quote" href="get-a-quote.html">Get a Quote</a></li> -->
        </ul>
      </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->
<!-- End Header -->