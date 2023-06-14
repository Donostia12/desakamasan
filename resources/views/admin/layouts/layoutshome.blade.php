<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Manajemen Desa Wisata - Halaman Utama</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets-client/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets-client/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets-client/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-client/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-client/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-client/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-client/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-client/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets-client/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-client/assets/css/owl-carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-client/assets/css/templatemo-main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Remember
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    {{-- <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section> --}}

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="#home">Desa Wisata Kamasan</a></h1>
                <a class="date" onclick="return false;">
                    <span class="top-key"></span>
                    <span class="text">
                        <div id="tanggal-waktu"></div>
                    </span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                </a>

                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li class="dropdown"><a href="" onclick="return false;"><span>Tentang Desa</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="#about">Profile Desa</a></li>
                            <li><a class="nav-link scrollto" href="#berita">Berita Desa</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#dawis">Daerah Wisata</a></li>
                    <li><a class="nav-link scrollto" href="#produk"><span>Produk Desa</span></a></li>
                    <li><a class="nav-link scrollto" href="#team">Pengurus</a></li>
                    <li><a class="nav-link scrollto" href="#peta">Lokasi Desa</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">

            <div class="container">

                <div class="row  justify-content-center">
                    <div class="col-lg-6">
                        <h3>Desa Wisata Kamasan</h3>
                        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe
                            commodi placeat.</p>
                    </div>
                </div>

                <div class="row footer-newsletter justify-content-center">
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Enter your Email"><input
                                type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>

            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Desa Kamasan</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">PBL - Kelompok 1</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets-client/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets-client/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets-client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-client/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets-client/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets-client/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets-client/assets/vendor/php-email-form/validate.js') }}"></script>
    {{-- <script src="{{ asset('assets-client/assets/vendor/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('assets-client/assets/vendor/jquery-1.11.2.min.js') }}"></script>
    {{-- <script src="{{ asset('assets-client/assets/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets-client/assets/vendor/npm.js') }}"></script> --}}

    <!-- Template Main JS File -->
    <script src="{{ asset('assets-client/assets/js/main.js') }}"></script>
    <script src="{{ asset('assets-client/assets/js/plugins.js') }}"></script>

</body>

</html>
