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

  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <img src="{{asset ('landing-page/assets/images/logo_ked_academy.png') }}" alt="KED Academy" class="img-fluid">
        </div>
        <div class="col-lg-6">
          <div class="header-text">
            <h2 class="text-white">Dengan Guru Scholar, Segalanya Menjadi Lebih Mudah</h2>
            <p class="text-white">KED Academy adalah platform belajar online yang menyediakan berbagai kursus yang dirancang untuk mempermudah proses pembelajaran Anda. Dengan menggunakan teknologi terbaru dan metode pengajaran yang inovatif, KED Academy memastikan Anda mendapatkan hasil terbaik dari setiap usaha yang Anda lakukan.</p>
            <div class="buttons mt-2">
              <div class="main-button">
                <a href="#">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="container mt-5">
    <h2 class="text-center mb-4 font-style">Partner yang telah berkolaborasi</h2>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 mb-3 text-center">
            <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/02/23/20230223_063341_0000-1183403031.png" alt="Partner 1" class="img-fluid" style="max-width: 220px;">
        </div>
        <div class="col-lg-3 col-md-6 mb-2 text-center">
            <img src="http://3.bp.blogspot.com/-2mRi5l6ECmY/VvtG90ryp3I/AAAAAAAAD1s/b7gZEquhhe4wXqFkxYls0zGkgSAnFB5ng/s1600/Tut%2BWuri%2BHandayani%2Bvector%2Blogo.png" alt="Partner 2" class="img-fluid" style="max-width: 200px;">
        </div>
    </div>
     <!-- Button for Partner -->
     <div class="row justify-content-center">
        <div class="col text-center">
            <a href="#" class="btn btn-warning rounded mt-2">Bergabung Menjadi Partner</a>
        </div>
    </div>
</section>


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
