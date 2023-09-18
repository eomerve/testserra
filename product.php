<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Vesperr Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/faviconn.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="passwordcontrol.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.php"><img src="assets/img/ertuncozcan.png" href="index.php" class="" alt=""></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="/fdi/index.php#aboutus"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/fdi/index.php#mission">Our Mission</a></li>
              <li><a href="/fdi/index.php#services">Our Products</a></li>
              <li><a href="CodeofConduct.pdf" target="_blank">Code of Coduct</a></li>
              <li><a href="security.pdf" target="_blank">Product Security Statement</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="/fdi/index.php#customer"><span>Customer Access Portal</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="product.php">Product Manuals</a></li>
              <li><a href="security.php">Security Manuals</a></li>
            </ul>
          </li>
          
          <li><a class="nav-link scrollto" href="/fdi/index.php#contact">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Product Manuals</h2>
          <ol>
            <li><a href="/fdi/index.php#customer">Customer Access Portal</a></li>
            <li>Product Manuals</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="">
      <div class="container">

        <div class="row gy-6">

          <div class="col-lg-4">
            <div style="text-align: center;" class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/img-2.jpeg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/img-2.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div style="text-align: center;" class="col-lg-6 mt-4">
            <div class="portfolio-info">
              <h3>This content is password protected. To view it please enter your password below:</h3> <br>
              <form method="POST" action="productpassword.php" onsubmit="return validatePassword();">
                <input type="password" name="password" id="password" class="form-control"  placeholder="Password" required> <br>
                <div class="g-recaptcha" data-sitekey="6LeEnSkoAAAAAHhXC6iDKahgaCnQ__XZa_ULLr0p"></div><br>
                <button style="background: #3498db; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 50px;" type="submit">Enter</button>
              </form>
            
            </div>
            <br>
            <div class="portfolio-description">
              <p>
              After filling out the form from the customer access portal menu, you can log in with the password in the e-mail sent to you.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer style=" position:fixed; bottom:0; left:0; width:100%;" id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-12 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Ertunç Özcan</strong>. All Rights Reserved
          </div>
        </div>

      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>