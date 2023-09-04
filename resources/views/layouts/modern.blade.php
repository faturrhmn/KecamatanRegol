<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Kecamatan Regol</title>
  <link rel="shortcut icon" type="image/png" href="/Modern/src/assets/images/logos/logooo.png" />
  <link rel="stylesheet" href="/Modern/src/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="/admin/dashboard" class="text-nowrap logo-img">
            <img src="/Modern/src/assets/images/logos/capture.png" width="200" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Data Master</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/sliders" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Data Slider</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/profils" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Data Profil</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/services" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Data Layanan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/portfolios" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Data Berita</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/teams" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Data Struktur Organisasi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/ifografis" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Data Infografis</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/ppids" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Data PPID</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/about" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Tentang</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/admin/contact" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Contact</span>
              </a>
            </li>
          </ul>

        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="/Modern/src/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="/logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        @yield('content')
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by Faturrohman</a></a></p>
        </div>
      </div>
    </div>
  </div>


  <script src="/Modern/src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="/Modern/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/Modern/src/assets/js/sidebarmenu.js"></script>
  <script src="/Modern/src/assets/js/app.min.js"></script>
  <script src="/Modern/src/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="/Modern/src/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="/Modern/src/assets/js/dashboard.js"></script>
</body>

</html>