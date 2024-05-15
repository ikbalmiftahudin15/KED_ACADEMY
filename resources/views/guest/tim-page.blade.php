<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ ('landing-page/assets/images/logo_ked_academy.png') }}">
    <title>KED ACADEMY || HOME PAGE</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset ('landing-page/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset ('landing-page/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset ('landing-page/assets/css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{asset ('landing-page/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{asset ('landing-page/assets/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Mulai ***** -->
                    <a href="index.html" class="logo">
                        <img src="{{ asset ('landing-page/assets/images/logo_ked_academy.png') }}" alt="Logo" class="logo-img" >
                        <h1>KED ACADEMY</h1>
                    </a>
                    <!-- ***** Logo Selesai ***** -->

                    <!-- ***** Menu Mulai ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ url ('/') }}" class="active">Beranda</a></li>
                        <li class="scroll-to-section"><a href="{{ route ('layanan') }}">Layanan</a></li>
                        <li class="scroll-to-section"><a href="{{ route ('kursus') }}">Kursus</a></li>
                        <li class="scroll-to-section"><a href="{{ route ('tim') }}">Tim</a></li>
                        <li class="scroll-to-section"><a href="{{ route ('kontak') }}">Kontak</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu Selesai ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>


  <div class="team section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{asset ('landing-page/assets/images/member-01.jpg') }}" alt="">
              <span class="category">UX Teacher</span>
              <h4>Sophia Rose</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{asset ('landing-page/assets/images/member-02.jpg') }}" alt="">
              <span class="category">Graphic Teacher</span>
              <h4>Cindy Walker</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{asset ('landing-page/assets/images/member-03.jpg') }}" alt="">
              <span class="category">Full Stack Master</span>
              <h4>David Hutson</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{asset ('landing-page/assets/images/member-04.jpg') }}" alt="">
              <span class="category">Digital Animator</span>
              <h4>Stella Blair</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- Social Icons Above Footer -->
    <div class="container-fluid bg-white py-3 mt-5">
        <div class="row justify-content-center">
            <div class="col-auto">
                <a href="#" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-dark me-3"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-dark me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-dark me-3"><i class="bi bi-tiktok"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-warning text-black py-3">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p style="font-weight: bold;">&copy; 2024 - PT Karya Edukasi Digital.</p>
                </div>
            </div>
        </div>
    </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset ('landing-page/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{asset ('landing-page/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{asset ('landing-page/assets/js/isotope.min.js') }}"></script>
  <script src="{{asset ('landing-page/assets/js/owl-carousel.js') }}"></script>
  <script src="{{asset ('landing-page/assets/js/counter.js') }}"></script>
  <script src="{{asset ('landing-page/assets/js/custom.js') }}"></script>

  </body>
</html>
