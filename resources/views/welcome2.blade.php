<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>De Lampoeng Kopi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('welcome/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('welcome/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('welcome/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('welcome/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('welcome/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day - v2.2.1
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:delampoengkopi@gmail.com">delampoengkopi@gmail.com</a>
        <i class="icofont-phone"></i> +62878-9951-1178
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">DLK</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{route('welcome2')}}">Home</a></li>
          <li><a href="#about">About</a></li>
          <li class="drop-down"><a href="">Menu</a>
            <ul>
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Registrer</a></li>
              </li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
      <div class="container position-relative" data-aos="fade-up" data-aos-delay="500" >
        <center>
            <img src="{{asset('welcome/img/DLK.png')}}" alt="" width="1100" height="600">
        </center>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="{{ asset('welcome/img/DLK2.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
           <center>
                    <h3>PROFIL DE LAMPOENG KOPI</h3>
           </center>
            <p class="font-italic">
                Kopi adalah salah satu tanaman semak yang dapat tumbuh di daerah tropis dengan ketinggian 700 – 1600 mdpl. 
                Pohon kopi dipangkas pendek untuk menghemat energi dan bantuan panen, namun bisa tumbuh lebih dari 30 kaki (9 meter) tinggi. 
                Setiap pohon ditutupi daun hijau dan ranting yang saling bertautan saling berpasangan. Ceri kopi tumbuh di sepanjang cabang. 
                Kopi sudah menjadi kebutuhan hidup masyarakat. Tak hanya orang tua, saat ini banyak anak-anak muda yang menyukainya. 
                De Lampoeng Kopi merupakan salah satu produsen kopi yang berkualitas di Bandar Lampung.
                De Lampoeng Kopi berdiri sejak tahun 2010, berfokus untuk menghasilkan kopi yang berkualitas, baik dan terjangkau.   
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
    </section><!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Gg. Palem, Labuhan Dalam, Kec. Tj. Senang, Kota Bandar Lampung, Lampung</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>delampoengkopi@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+62878-9951-1178</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Day</h3>
              <p>
                Gg. Palem, Labuhan Dalam, Kec. Tj. Senang, Kota Bandar Lampung, Lampung <br>
                <br>
                <strong>Phone:</strong> +62878-9951-1178<br>
                <strong>Email:</strong> delampoengkopi@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Roastedbeans Kopi Susu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Roastedbeans For Cafe</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Jasa Roasting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Mesin Roasting</a></li>
            </ul>

        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('welcome/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('welcome/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('welcome/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('welcome/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('welcome/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('welcome/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('welcome/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('welcome/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('welcome/js/main.js') }}"></script>

</body>

</html>