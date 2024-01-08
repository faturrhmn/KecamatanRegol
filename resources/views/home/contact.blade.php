@extends('layouts.main')

@section('content')

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><img src="assets/img/background.png"a href="/">Kecamatan Regol</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/">Beranda</a></li>

          <li class="dropdown"><a href="#"><span>Pemerintahan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="visi-misi">Visi dan Misi</a></li>
              <li class="dropdown"><a href=""><span>Struktur Organisasi</span> <i class="bi bi-chevron-right"></i></a>
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
              <li><a href="tugas-dan-fungsi">Tugas dan Fungsi</a></li>
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
          <li><a href="ppids">PPID</a></li>
          <li><a href="contact" class="active">Kontak</a></li>

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
            <li>Kontak</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="{{ $contact->maps_embed }}" frameborder="0" allowfullscreen></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Alamat:</h4>
                  <p>{{ $contact->alamat }}</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>{{ $contact->email }}</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Telepon:</h4>
                  <p>{{ $contact->telepon }}</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <form action="/kritiksaran" method="post" role="form" class="php-email-form">

            <div class="section-title">
              <h2>KRITIK & SARAN</h2>
            </div>
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" required>
                @error('nama') <!-- Ubah dari 'name' ke 'nama' di sini -->
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
              <div class="col-md-6 form-group mt-3 mt-md-0">
                  <!-- Perubahan: Mengubah type menjadi "tel" untuk input nomor telepon -->
                  <input type="tel" class="form-control" name="nomor_telepon" id="nomor_telepon" placeholder="Nomor Telepon" required pattern="[0-9]+" title="Harap masukkan hanya angka.">
                  @error('nomor_telepon')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
              </div>
          </div>
          
          <div class="form-group mt-3">
              <textarea class="form-control" name="kritiksaran" rows="5" placeholder="Kritik dan Saran" required></textarea>
              @error('kritiksaran')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>
          
          

            <div class="form-group mt-3">
              <div class="captcha">
                <span>{!! captcha_img() !!}</span>
                <button type ="button" class="btn btn-danger reload" id="reload">
                  &#x21bb;
                </button>
              </div>
            </div>

            <div class="col-md-6 form-group">
              <input type="text" name="captcha" class="form-control" placeholder="Masukan Kode">
            </div>

            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesan Telah Terkirim</div>
            </div>
            <div class="text-center"><button type="submit">Kirim</button></div>
          </form>
        </div>

      </div>

    </div>

    </section><!-- End Contact Section -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
      $('#reload').click(function() {
        $.ajax({
          type: 'GET',
          url: 'reload-captcha',
          success: function(data) {
            $(".captcha span").html(data.captcha);
          }
        });
      });
    </script>
    
@endsection