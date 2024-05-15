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



  <section class="section courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Kursus Terbaru</h6>
            <h2>Kursus Terbaru</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Tampilkan Semua</a>
        </li>
        <li>
          <a href="#!" data-filter=".design">Desain Web</a>
        </li>
        <li>
          <a href="#!" data-filter=".development">Pengembangan</a>
        </li>
        <li>
          <a href="#!" data-filter=".wordpress">Wordpress</a>
        </li>
      </ul>
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{asset ('landing-page/assets/images/course-01.jpg') }}" alt=""></a>
              <span class="category">Desain Web</span>
              <span class="price"><h6><em>Rp</em>2.400.000</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Stella Blair</span>
              <h4>Belajar Desain Web</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{asset ('landing-page/assets/images/course-02.jpg') }}" alt=""></a>
              <span class="category">Pengembangan</span>
              <span class="price"><h6><em>Rp</em>5.100.000</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Cindy Walker</span>
              <h4>Tips Pengembangan Web</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{asset ('landing-page/assets/images/course-03.jpg') }}" alt=""></a>
              <span class="category">Wordpress</span>
              <span class="price"><h6><em>Rp</em>9.600.000</h6></span>
            </div>
            <div class="down-content">
              <span class="author">David Hutson</span>
              <h4>Tren Web Terbaru</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{asset ('landing-page/assets/images/course-04.jpg') }}" alt=""></a>
              <span class="category">Pengembangan</span>
              <span class="price"><h6><em>Rp</em>6.750.000</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Stella Blair</span>
              <h4>Langkah-Langkah Belajar Online</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{asset ('landing-page/assets/images/course-05.jpg') }}" alt=""></a>
              <span class="category">Wordpress</span>
              <span class="price"><h6><em>Rp</em>4.800.000</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Sophia Rose</span>
              <h4>Menjadi Master WordPress</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{asset ('landing-page/assets/images/course-06.jpg') }}" alt=""></a>
              <span class="category">Desain Web</span>
              <span class="price"><h6><em>Rp</em>3.600.000</h6></span>
            </div>
            <div class="down-content">
              <span class="author">David Hutson</span>
              <h4>Pengembang Full Stack</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section testimonials mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item">
              <p>“Silakan beri tahu teman atau kolega Anda tentang situs web TemplateMo. Siapa pun dapat mengakses situs web untuk mengunduh template gratis. Terima kasih telah berkunjung.”</p>
              <div class="author">
                <img src="{{asset ('landing-page/assets/images/testimonial-author.jpg') }}" alt="">
                <span class="category">Ahli Full Stack</span>
                <h4>Claude David</h4>
              </div>
            </div>
            <div class="item">
              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.”</p>
              <div class="author">
                <img src="{{asset ('landing-page/assets/images/testimonial-author.jpg') }}" alt="">
                <span class="category">Ahli UI</span>
                <h4>Thomas Jefferson</h4>
              </div>
            </div>
            <div class="item">
              <p>“Scholar adalah template situs web gratis yang disediakan oleh TemplateMo untuk situs web terkait pendidikan. Tata letak CSS ini didasarkan pada kerangka Bootstrap v5.3.0.”</p>
              <div class="author">
                <img src="{{asset ('landing-page/assets/images/testimonial-author.jpg') }}" alt="">
                <span class="category">Animator Digital</span>
                <h4>Stella Blair</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>TESTIMONI</h6>
            <h2>Apa yang mereka katakan tentang kami?</h2>
            <p>Anda dapat mencari template CSS gratis di Google menggunakan kata kunci berbeda seperti templatemo portfolio, templatemo gallery, templatemo blue color, dll.</p>
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
