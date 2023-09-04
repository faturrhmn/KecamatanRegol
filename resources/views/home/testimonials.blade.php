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

  <div class="loader">
    <span class="loader span"></span>
    <span class="loader span:nth-child(1)"></span>
    <span class="loader span:nth-child(2)"></span>
    <span class="loader span:nth-child(3)"></span>
    <span class="loader span:nth-child(4)"></span>
  </div>
  </div>
  
  <script>
    $(window).on("load",function(){
      $(".loader").fadeOut("slow");
    });
  </script>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><img src="assets/img/kota-bandung.png"a href="/">Kecamatan Regol</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/">Beranda</a></li>

          <li class="dropdown"><a href="#"  class="active"><span>Pemerintahan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about">Visi dan Misi</a></li>
              <li><a href="team">Struktur Organisasi</a></li>
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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="/">Beranda</a></li>
            <li>Tugas dan Fungsi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

        <!-- ======= Tugas dan Fungsi Section ======= -->
        <section id="about-us" class="about-us">
          <div class="container" data-aos="fade-up">
    
            <div class="row content">
              <div class="col-lg-6">
                <h2>Tugas dan Fungsi</h2>
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0">
                <p class="paragraph">
                  Sebagai institusi formal, keberadaan dan operasional Kecamtan Regol senantiasa mengacu kepada landasan hukum pembentukan Kecamatan yang berlaku yaitu :
                </p>
                <p class="fst-italic">
                  <li class="paragraph">Undang-undang No.23 Tahun 2014 Tentang Pemerintahan Daerah</li>
                  <li class="paragraph">Peraturan Pemerintah RI No.19 Tahun 2008 Tentang Kecamatan</li>
                  <li class="paragraph">Peraturan Daerah Kota Bandung No.6 Tahun 2006 Tentang Pemekaran dan Pembentukan Wilayah Kerja Kecamatan dan Kelurahan di Lingkungan Pemerintah Kota Bandung</li>
                  <li class="paragraph">Peraturan Daerah Kota Bandung No.6 Tahun 2006 Tentang Pemekaran dan Pembentukan Wilayah Kerja Kecamatan dan Kelurahan di Lingkungan Pemerintah Kota Bandung</li>
                  <li class="paragraph">Peraturan Walikota Bandung No. 1407 Tahun 2016 Tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi Serta Tata Kerja Kecamatan dan Kelurahan di Lingkungan Pemerintahan Kota Bandung</li>
                </p>
                <hr>
                <p class="paragraph">
                  Selanjutnya, kecamatan sebagi Prangkat Daerah menyelenggarakan sebagai tugas Umum Pemerintahan yang meliputi :
                </p>
                <p class="fst-italic">
                  <li class="paragraph">Mengkoordinasikan Kegiatan Pemberdayaan Masyarakat</li>
                  <li class="paragraph">Mengkoordinasikan Upaya Penyelenggaraan Ketentraman dan Ketertiban Umum</li>
                  <li class="paragraph">Mengkoordinasikan Penerapan dan Penegakan Peraturan Perundang undangan</li>
                  <li class="paragraph">mengkoordinasikan pemeliharaan prasarana dan pasilitas pelayanan umum</li>
                  <li class="paragraph">Mengkoordinasikan penyelenggaran kegiatan pemerintahan di tingkat Kecamatan</li>
                  <li class="paragraph">Membina Penyelenggaraan Pemerintahan Desa dan/atau Kelurahan; dan </li>
                  <li class="paragraph">Melaksakan pelayanan Masyarakat yang menjadi ruang lingkup tugasnya dan/atau yang belum dapat dilaksankan pemerintahan desa dan kelurahan</li>
                </p>

              </div>
            </div>
    
          </div>
        </section><!-- End Tugas dan Fungsi Section -->

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
