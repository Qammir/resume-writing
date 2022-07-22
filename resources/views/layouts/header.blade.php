 <!-- header section strats -->
    <header class="header_section" style="background:black;">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand mr-5" href="index.html">
            <img src="images/logo.png" alt="">
            <span>
              Fregg
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html"> Service </a>
                </li>
                @auth
                  {{auth()->user()->name}}
                  <li class="nav-item">
                    <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
                  </li>
                @endauth
                @guest
                <li class="nav-item">
                  <a class="nav-link btn btn-sm btn btn-info pull-right" href="{{ route('login.perform') }}">Login</a>
                </li>
                <li class="nav-item">
                  <a class=" nav-link btn btn-sm btn btn-warning float-right" href="{{ route('register.perform') }}">Register</a>
                </li>
                @endguest
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->