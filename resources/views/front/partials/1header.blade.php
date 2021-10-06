  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">

          <h1 class="logo"><a href="index.html">{{$header[0]->name}}</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto active" href="#hero">{{$header[0]->nav1}}</a></li>
                  <li><a class="nav-link scrollto" href="#about">{{$header[0]->nav2}}</a></li>
                  <li><a class="nav-link scrollto" href="#services">{{$header[0]->nav3}}</a></li>
                  <li><a class="nav-link scrollto " href="#portfolio">{{$header[0]->nav4}}</a></li>
                  <li><a class="nav-link scrollto" href="#team">{{$header[0]->nav5}}</a></li>
                  <li><a class="nav-link scrollto" href="#contact">{{$header[0]->nav6}}</a></li>
                  <li><a class="getstarted scrollto" href="#about">{{$header[0]->nav7}}</a></li>

                  @auth

                      <li>
                          <a class="getstarted scrollto" href="{{ url('/dashboard') }}">Dashboard</a>
                      </li>

                      <li>
                          <form class="getstarted scrollto" method="POST" action="{{ route('logout') }}">
                              @csrf
                              <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                          this.closest('form').submit();">
                                  {{ __('Log Out') }}
                              </x-dropdown-link>
                          </form>
                      </li>

                  @else

                      <li>
                          <a class="getstarted scrollto" href="{{ route('login') }}">Log in</a>
                      </li>

                      @if (Route::has('register'))

                          <li>
                              <a class="getstarted scrollto" href="{{ route('register') }}">Register</a>
                          </li>
                      @endif

                  @endauth
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
          <h1>{{$titre[0]->titreheader}}</h1>
          <h2>{{$titre[0]->sous_titreheader}}</h2>
          <a href="#about" class="btn-get-started scrollto">{{$titre[0]->boutonheader}}</a>
          <img src="{{ asset("img/" . $titre[0]->url) }}" alt="" class="img-fluid hero-img" data-aos="zoom-in" data-aos-delay="150">
          
        </div>
    
      </section><!-- End Hero -->
