<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>SSB PSAD Brawijaya Surabaya</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="/assets/img/logo.psad.JPG" rel="icon" />
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link
      href="/assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="/assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link
      href="/assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />

    <!-- Main CSS File -->
    <link href="/assets/css/main.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Day
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Updated: Jun 14 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body class="index-page">
    <header id="header" class="header fixed-top">
      <div class="topbar d-flex align-items-center">
        <div
          class="container d-flex justify-content-center justify-content-md-between"
        >
          <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"
              ><a href="mailto:contact@example.com"
                >ssbpsadbrawijaya@gmail.com</a
              ></i
            >
            <i class="bi bi-phone d-flex align-items-center ms-4"
              ><span>+1 5589 55488 55</span></i
            >
          </div>
          <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
      <!-- End Top Bar -->

      <div class="branding d-flex align-items-center">
        <div
          class="container position-relative d-flex align-items-center justify-content-between"
        >
          <a href="{{route('index')}}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="/assets/img/logo.png" alt=""> -->
            <h1 class="sitename">SSB PSAD Brawijaya</h1>
          </a>
          
          @auth
          @if(Auth::user()->roles == 'admin')
            <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="{{route('index')}}" class="active">Home</a></li>
              <li><a href="{{route('index')}}#about">About</a></li>
              
              <li><a href="{{route('admin.index')}}">Dashboard</a></li>
              
              <li><a href="{{route('index')}}#news">News</a></li>
              <li><a href="{{route('index')}}#portfolio">Portfolio</a></li>
              <li class="dropdown">
                <a href="#"
                  ><span>Information</span>
                  <i class="bi bi-chevron-down toggle-dropdown"></i
                ></a>
                <ul>
                  <li><a href="{{route('players.index')}}">Pemain</a></li>
                  <li><a href="{{route('coach.index')}}">Pelatih</a></li>
                </ul>
              </li>
              <li><a href="{{route('index')}}#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#"
                  ><span>Account</span>
                  <i class="bi bi-chevron-down toggle-dropdown"></i
                ></a>
                <ul>
                  <li><a href="{{route('profile.show', ['id' => Auth::id()])}}">Profile</a></li>
                  <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
              </li>
              
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            @elseif(Auth::user()->roles == 'user')
            <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="{{route('index')}}" class="active">Home</a></li>
              <li><a href="{{route('index')}}#about">About</a></li>
              <li><a href="{{route('index')}}#news">News</a></li>
              <li><a href="{{route('index')}}#portfolio">Portfolio</a></li>
              <li class="dropdown">
                <a href="#"
                  ><span>Information</span>
                  <i class="bi bi-chevron-down toggle-dropdown"></i
                ></a>
                <ul>
                  <li><a href="{{route('players.index')}}">Pemain</a></li>
                  <li><a href="{{route('coach.index')}}">Pelatih</a></li>
                  <li><a href="{{route('payment.create')}}">Pembayaran</a></li>
                </ul>
              </li>
              <li><a href="{{route('index')}}#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#"><span>Account</span><i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{route('profile.show', ['id' => Auth::id()])}}">Profile</a></li>
                  <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                  </li>
                </ul>
              </li>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            @endauth
            @else
            <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="{{route('index')}}" class="active">Home</a></li>
              <li><a href="{{route('index')}}#about">About</a></li>
              <li><a href="{{route('index')}}#news">News</a></li>
              <li><a href="{{route('index')}}#portfolio">Portfolio</a></li>
              <li class="dropdown">
                <a href="#"
                  ><span>Information</span>
                  <i class="bi bi-chevron-down toggle-dropdown"></i
                ></a>
                <ul>
                  <li><a href="{{route('players.index')}}">Pemain</a></li>
                  <li><a href="{{route('coach.index')}}">Pelatih</a></li>
                  <li><a href="{{route('players.create')}}">Pendaftaran</a></li>
                </ul>
              </li>
              <li><a href="{{route('index')}}#contact">Contact</a></li>
              <li><a href="{{route('login')}}">Login</a></li>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            @endif
            
              
          


            
          
           
        </div>
      </div>
    </header>
    @yield('content')
    <footer id="footer" class="footer position-relative">
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6">
            <div class="footer-about">
              <a href="index.html" class="logo sitename">SSB PSAD Brawijaya</a>
              <div class="footer-contact pt-3">
                <p class="mt-3">
                  <strong>Phone:</strong> <span>+1 5589 55488 55</span>
                </p>
                <p><strong>Email:</strong> <span>ssbpsadbrawijaya@gmail.com</span></p>
              </div>
              <div class="social-links d-flex mt-4">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-12 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
  

      <div class="container copyright text-center mt-4">
        <p>
          © <span>Copyright</span> <strong class="px-1 sitename">SSBPSADBRAWIJAYA</strong>
          <span>All Rights Reserved</span>
        </p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://github.com/kvshelby">alkahfisyrr</a>
        </div>
      </div>
    </footer>

    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="/assets/js/main.js"></script>
    
  </body>
</html>
