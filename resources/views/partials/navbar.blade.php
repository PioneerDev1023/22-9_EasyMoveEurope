<!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('img/logo(bg).png') }}" alt="logo">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
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
                <li><a class="account-link" href="/whosignup">Sign Up</a></li>
                <li><a class="account-link" href="/login">Sign In</a></li>
              @else
                <li>
                  @if(auth()->user()->type == 'user')
                    <a class="account-link" href="dashboard">Dashboard</a>
                  @elseif(auth()->user()->type == 'admin')
                    <a class="account-link" href="admin/adminDashboard">Dashboard</a>
                  @elseif(auth()->user()->type == 'company')
                    <a class="account-link" href="company/companyDashboard">Dashboard</a>
                  @endif
                </li>
                <li>
                  <a class="account-link nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>
              @endguest
            </ul>
          </li>
        </ul>
      </nav>
    </div>
</header>
<!-- End Header -->