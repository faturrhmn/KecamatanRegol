<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kecamatan Regol - Kota Bandung</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/kota-bandung.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><img src="assets/img/kota-bandung.png"a href="/">Kecamatan Regol</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/" class="active">Beranda</a></li>

          <li class="dropdown"><a href="#"><span>Pemerintahan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about">Visi dan Misi</a></li>
              <li><a href="team">Struktur Organisasi</a></li>
              <li><a href="testimonials">Tugas dan Fungsi</a></li>
              <li><a href="sejarah">Sejarah</a></li>
              {{-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> --}}
            </ul>
          </li>

          <li><a href="portfolio">Berita</a></li>
          <li><a href="services">PPID</a></li>
          <li><a href="contact">Kontak</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="https://twitter.com/kec_regolbdg" class="twitter" target="_blank"><i class="bu bi-twitter"></i></a>
        <a href="https://www.facebook.com/kec.regolbdg/" class="facebook" target="_blank"><i class="bu bi-facebook"></i></a>
        <a href="https://www.instagram.com/kecamatan_regol/" class="instagram" target="_blank">
        <i class="bu bi-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        @foreach ($sliders as $index => $slider)
            <!-- Slide 1 -->
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <img src="image/{{ $slider->image }}" class="img-fluid" alt="">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <p class="paragraph">{{ $slider->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
      </div>
        <!-- Slide 2 -->
 

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2>{{ $about->judul }}</h2>
            {{-- <h3>{{ $about->subjudul }}</h3> --}}
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p class="paragraph">
              {{ $about->deskripsi }}
            </p>
            {{-- <ul>
              <li><i class="ri-check-double-line"></i>{{ $about->kelebihan_1 }}</li>
              <li><i class="ri-check-double-line"></i>{{ $about->kelebihan_2 }}</li>
              <li><i class="ri-check-double-line"></i> {{ $about->kelebihan_3 }}</li>
              <li><i class="ri-check-double-line"></i> {{ $about->kelebihan_4 }}</li>
            </ul>
            <p class="fst-italic">
             {{ $about->deskripsi_2 }}
            </p> --}}
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

   <!-- ======= Portfolio Terbaru ======= -->
<section id="latest-portfolio" class="latest-portfolio">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Portfolio Terbaru</h2>
    </div>

    <div class="row">
      @foreach ($latestPortfolios as $portfolio)
        <div class="col-lg-4 col-md-6 portfolio-item">
          <img src="/image/{{$portfolio->image}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{$portfolio->title}}</h4>
            <p>{{$portfolio->description}}</p>
            <a href="/image/{{$portfolio->image}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" ><i class="bx bx-plus"></i></a>
            <a href="portfolio-details" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- ======= End Portfolio Terbaru ======= -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>
        </div>

        <div class="row">
          @foreach ($services as $service)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue">
                  <div class="icon">
                      <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                          <path stroke="none" stroke-width="0" fill="#f5f5f5"
                              d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                      </svg>
                      <i class="bi bi-file-text"></i>
                  </div>
                  <h4><a href="">{{ $service->title }}</a></h4>
                  <p class="paragraph">{{ $service->description }}</p>
              </div>
          </div>
          @endforeach
      </div>
      
      </div>
    </section>

    <section id="ifografi" class="ifografi section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Data INFOGRAFIS</h2>
        </div>
    
        <div class="ifografi-images">
          @foreach ($ifografis as $ifografi)
            <img src="/image/{{ $ifografi->image }}" class="img-fluid" alt="">
          @endforeach
        </div>
      </div>
    </section>

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pintasan Aplikasi Pemerintahan</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <a href="http://data.bandung.go.id/" target="_blank"><img src="assets/img/opendata.png" class="img-fluid" alt=""></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <a href="https://www.lapor.go.id/" target="_blank"><img src="assets/img/lapor.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <a href="http://data.bandung.go.id/arimbi/#/" target="_blank"><img src="assets/img/arimbi.png" class="img-fluid" alt=""></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <a href="https://disdukcapil.bandung.go.id/" target="_blank"><img src="assets/img/disdukcapil.png" class="img-fluid" alt=""></a>
            </div>
          </div>

          

        </div>

      </div>
    </section>

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

        <div class="footer-contact">
            <h1 class="logo me-auto"><img src="assets/img/kota-bandung.png" alt="Logo Kecamatan Regol" style="max-width: 50px;">Website Resmi Kecamatan Regol</a></h1>
            <p>
                {{ $contact ->alamat }}<br>
                <strong>Phone: </strong> {{ $contact ->telepon }}<br>
                <strong>Email: </strong> {{ $contact ->email }}<br>
            </p>
        </div>
      

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="text-center copyright">
          &copy; Copyright <strong><span>Kecamatan Regol</span></strong>
        </div>

      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/kec_regolbdg" class="twitter" target="_blank"><i class="bu bi-twitter"></i></a>
        <a href="https://www.facebook.com/kec.regolbdg/" class="facebook" target="_blank"><i class="bu bi-facebook"></i></a>
        <a href="https://www.instagram.com/kecamatan_regol/" class="instagram" target="_blank">
        <i class="bu bi-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="https://wa.me/6285659723324" class="back-to-top d-flex flex-column align-items-center justify-content-center" target="_blank">
    <i class="bi bi-whatsapp whatsapp-icon"></i>
    <span class="call-center-label">Call Center</span>
</a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>