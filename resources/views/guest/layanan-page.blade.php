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


  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="{{asset ('landing-page/assets/images/service-01.png') }}" alt="gelar online">
            </div>
            <div class="main-content">
              <h4>Gelar Online</h4>
              <p>Kapan pun Anda membutuhkan template gratis dalam HTML CSS, ingatlah situs web .</p>
              <div class="main-button">
                <a href="#">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="{{asset ('landing-page/assets/images/service-02.png') }}" alt="kursus singkat">
            </div>
            <div class="main-content">
              <h4>Kursus Singkat</h4>
              <p>Anda dapat menelusuri template gratis berdasarkan berbagai tag seperti pemasaran digital, dll.</p>
              <div class="main-button">
                <a href="#">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="{{asset ('landing-page/assets/images/service-03.png') }}" alt="ahli web">
            </div>
            <div class="main-content">
              <h4>Ahli Web</h4>
              <p>Anda dapat mulai belajar HTML CSS dengan memodifikasi template gratis dari situs web kami juga.</p>
              <div class="main-button">
                <a href="#">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Dari mana kita mulai?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed tidak eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Bagaimana kita bekerja sama?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed tidak eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Mengapa SCHOLAR yang terbaik?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Ada lebih dari seratus template HTML responsif yang dapat dipilih dari situs web <strong>Template</strong>Mo. Anda dapat menelusuri berdasarkan tag atau kategori yang berbeda.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Apakah kita mendapatkan dukungan terbaik?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Anda juga dapat mencari di Google dengan kata kunci spesifik seperti <code>templatemo business templates, templatemo gallery templates, admin dashboard templatemo, 3-column templatemo, dll.</code>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>Tentang Kami</h6>
            <h2>Apa yang membuat kami akademi online terbaik?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida risus commodo.</p>
            <div class="main-button">
              <a href="#">Temukan Lebih Banyak</a>
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
