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

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h6>Hubungi Kami</h6>
            <h2>Jangan ragu untuk menghubungi kami kapan saja</h2>
            <p>Terima kasih telah memilih template kami. Kami menyediakan template CSS terbaik untuk Anda secara gratis 100%. Anda dapat mendukung kami dengan membagikan situs web kami kepada teman-teman Anda.</p>
            <div class="special-offer">
              <span class="offer">diskon<br><em>50%</em></span>
              <h6>Berlaku: <em>24 April 2036</em></h6>
              <h4>Penawaran Spesial <em>Diskon 50%</em>!</h4>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Nama Anda..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-mail Anda..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Pesan Anda"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Kirim Pesan Sekarang</button>
                  </fieldset>
                </div>
              </div>
            </form>
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
