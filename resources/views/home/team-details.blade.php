<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kecamatan Regol - Kota Bandung</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/background.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <div class="loader"></div>
    <script>
      $(window).on("load",function(){
        $(".loader").fadeOut("slow");
      });
    </script>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><img src="{{ asset('assets/img/background.png') }}" a href="/">Kecamatan Regol</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{ url('/') }}">Beranda</a></li>

          <li class="dropdown"><a href="" class="active"><span>Pemerintahan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/visi-misi') }}">Visi dan Misi</a></li>
              <li class="dropdown"><a href="" ><span>Struktur Organisasi</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
               
                  <li><a href="{{ route('team.show', ['id' => 1]) }}">Kecamatan Regol</a></li>
                  <li><a href="{{ route('team.show', ['id' => 2]) }}">Kelurahan Ancol</a></li>
                  <li><a href="{{ route('team.show', ['id' => 3]) }}">Kelurahan Balonggede</a></li>
                  <li><a href="{{ route('team.show', ['id' => 4]) }}">Kelurahan Cisereuh</a></li>
                  <li><a href="{{ route('team.show', ['id' => 5]) }}">Kelurahan Ciateul</a></li>
                  <li><a href="{{ route('team.show', ['id' => 6]) }}">Kelurahan Cigereleng</a></li>
                  <li><a href="{{ route('team.show', ['id' => 7]) }}">Kelurahan Pasirluyu</a></li>
                  <li><a href="{{ route('team.show', ['id' => 8]) }}">Kelurahan Pungkur</a></li>
    
                </ul>
              </li>
              <li><a href="{{ url('/tugas-dan-fungsi') }}">Tugas dan Fungsi</a></li>
              <li><a href="{{ url('/sejarah') }}">Sejarah</a></li>
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

          <li><a href="{{ url('/portfolio') }}">Berita</a></li>
          <li><a href="{{ url('/ppids') }}">PPID</a></li>
          <li><a href="{{ url('/contact') }}">Kontak</a></li>

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

      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <ol>
              <li><a href="/">Beranda</a></li>
              <li>Struktur Organisasi</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>{{ $team->title}}</h2>
        </div>

        <div class="team-images">
              <img src="/image/{{ $team->image }}" class="img-fluid" alt="">
        </div>
      
      </div>
    </section><!-- End Our Team Section -->
  
  


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

        <div class="footer-contact">
            <h1 class="logo me-auto"><img src="{{ asset('assets/img/background.png') }}" alt="Logo Kecamatan Regol" style="max-width: 50px;">Website Resmi Kecamatan Regol</a></h1>
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
        <a href="https://www.youtube.com/@kecamatanregol5785/videos" class="youtube" target="_blank"><i class="bu bi-youtube"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="https://wa.me/6285659723324" class="back-to-top d-flex flex-column align-items-center justify-content-center" target="_blank">
    <i class="bi bi-whatsapp whatsapp-icon"></i>
    <span class="call-center-label">Call Center</span>
  </a>
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  
  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  

</body>

</html>

