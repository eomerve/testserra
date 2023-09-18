<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ertunç Özcan</title>
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

  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    .grad {
      background-image: linear-gradient(to bottom right, #BBDEFB 20%, #E3F2FD 35%, white 30%);
    }
  </style>
  <script>
        function showForm1SuccessPopup() {
            alert("E-mail sent successfully");
            resetForm("form1"); 
        }

        function showForm2SuccessPopup() {
            alert("E-mail sent successfully");
            resetForm("form2");
        }

        function resetForm(formId) {
            $("#" + formId)[0].reset();
        }

        $(document).ready(function() {
            $("#form1").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "customer.php",
                    data: $("#form1").serialize(),
                    success: function() {
                        showForm1SuccessPopup();
                    }
                });
            });
        });

        $(document).ready(function() {
            $("#form2").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "contact.php",
                    data: $("#form2").serialize(),
                    success: function() {
                        showForm2SuccessPopup();
                    }
                });
            });
        });
    </script>

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
          <li class="dropdown"><a href="#aboutus"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#mission">Our Mission</a></li>
              <li><a href="#services">Our Products</a></li>
              <li><a href="CodeofConduct.pdf" target="_blank">Code of Coduct</a></li>
              <li><a href="security.pdf" target="_blank">Product Security Statement</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#customer"><span>Customer Access Portal</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="product.php">Product Manuals</a></li>
              <li><a href="security.php">Security Manuals</a></li>
            </ul>
          </li>
          
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center grad">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 style="text-align:center">Around the world, we are the first to embrace and hold our babies</h1>
          <h2 style="text-align:center">Discover the Innovation and Comfort of Our Neonatal Intensive Care Incubator</h2>
          <div style="text-align:center">
            <a href="https://ertuncozcan.com/" class="btn-get-started scrollto">More</a>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <!-- <img src="assets/img/img-2.jpeg" class="img-fluid animated" alt=""> -->
          <img src="assets/img/img-2.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="aboutus" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">

          <div style="text-align:center" class="col-lg-12 pt-4 pt-lg-0">
            <p>
              One of the pioneers of medical device production in Turkey <br><br>

              Ertunç Özcan Ithalat and Mumessillik were established in Ankara in 1968. Intensive care units, simulation centers, emergency units, operating room-anesthesia devices, intensive care - sterilization service and key delivery hospital projects are avaliable as a solution partner.
            </p>
            <a href="https://www.facebook.com/ertuncozcangroup/" target="_blank" class="btn-learn-more">More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start">
            <img src="assets/img/img-2.jpeg" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-graph-up-arrow"></i>
                    <p><strong>Strong Team</strong> Growing and getting stronger every day since 1968 we contribute to the country's economy and employment.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-people"></i>
                    <p><strong>Employment</strong> Our aim is to employ people who have adopted the prin development and development and the effectiveness of employees, to ensure the continuation of their happiness and success</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-check2-circle"></i>
                    <p><strong>Our Quality Standards</strong> Our productions ISO 9001:2015 and ISO 13485:2016 Standards.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-safe"></i>
                    <p><strong>Safe</strong> Our factory has the Facility Security Certificate issued by the Ministry of National Defense.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Technicial Specifications</h2>
          <p>Technical Specifications of the Magic Loggia Ultimate M Infant Incubator</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-life-preserver"></i></div>
              <h4 class="title"><a href="">Microenvironment Control:</a></h4>
              <i class="ri-check-double-line"></i> Precise temperature control: +/- 0.1°C accuracy. <br>
              <i class="ri-check-double-line"></i> Adjustable humidity settings:20% to 95% relative humidity. <br>
              <i class="ri-check-double-line"></i> Integrated servo-controlled heating system. <br>
              <i class="ri-check-double-line"></i> Dual temperature probes for accurate monitoring and safety redundancy. <br>
              </ul>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-mask"></i></div>
              <h4 class="title"><a href="">Access and Visibility</a></h4>
              <i class="ri-check-double-line"></i> Transparent and easily accessible canopy design. <br>
              <i class="ri-check-double-line"></i> Swiveling canopy with assisted lifting mechanism for effortless access to the infant. <br>
              <i class="ri-check-double-line"></i> Integrated grommet for medical procedures and minimal disturbance. <br>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Safety and Monitoring</a></h4>
              <i class="ri-check-double-line"></i> Continuous temperature and humidity monitoring with audible and visual alarms.<br>
              <i class="ri-check-double-line"></i> Oxygen saturation (SpO2), Non-invasive blood pressure (NIBP), Perfusion index, heart rate , scale and oxygen monitoring capabilities. <br>
              <i class="ri-check-double-line"></i> Independent air filtration system to maintain a clean environment. <br>
              <i class="ri-check-double-line"></i> Closed-loop incubator system for minimized heat loss. <br>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-columns-gap"></i></div>
              <h4 class="title"><a href="">Ergonomic Design</a></h4>
              <i class="ri-check-double-line"></i> Adjustable height for medical professionals' convenience. <br>
              <i class="ri-check-double-line"></i> 360-degree swivel with lockable positions. <br>
              <i class="ri-check-double-line"></i> Easy-to-clean, antimicrobial surfaces. <br>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <section id="mission" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>Our Mission </h2>
        </div>

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <h4>Mission Statement</h4>
          </div>
          <div class="col-lg-7">
            <p>
              At Ertunc Ozcan, we are committed to advancing global healthcare quality with innovative and superior medical device manufacturing.
              Our goal is to offer healthcare professionals and patients state-of-the-art, dependable, and secure medical devices that elevate diagnostics, treatment, and patient outcomes.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <h4>Innovation</h4>
          </div>
          <div class="col-lg-7">
            <p>
              We constantly challenge technology and design limits to develop medical devices that meet the ever-changing demands of the healthcare industry.
              We cultivate a culture of creativity and urge our teams to experiment with new ideas.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <h4>Quality</h4>
          </div>
          <div class="col-lg-7">
            <p>
              We are dedicated to maintaining the highest quality standards in all our operations.
              Our exacting quality control procedures guarantee that our products always comply with or surpass regulatory requirements and industry norms.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <h4>
              Patient-Centric
            </h4>
          </div>
          <div class="col-lg-7">
            <p>
              We prioritize the well-being and comfort of patients in every product we develop.
              We strive to uphold ethical standards in all our practices and decisions, ensuring patient safety and well-being. Our devices are designed to improve patients' lives, accessibility to healthcare, and the patient experience.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <h4>
              Collaboration
            </h4>
          </div>
          <div class="col-lg-7">
            <p>
              We work closely with healthcare professionals, researchers, and partners to gain insights into the evolving healthcare landscape. By fostering collaboration, we can develop solutions that effectively address complex medical challenges.
            </p>
          </div>
        </div>
        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <h4>
              Ethical Responsibility
            </h4>
          </div>
          <div class="col-lg-7">
            <p>
              We at the company uphold the highest ethical standards in all of our business practices.
              Our decision-making is guided by integrity, transparency, and accountability, ensuring the safety and trust of our customers and stakeholders.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services section-bg">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card-body">
              <p class="card-text">Environmental stewardship is of utmost importance to us. We are committed to reducing our environmental footprint by developing eco-friendly manufacturing processes and sustainable products that reduce waste and energy consumption.</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card-body">
              <p class="card-text">Employee well-being is at the forefront of our priorities. Our success is driven by our talented and dedicated team. We prioritize the well-being, growth, and development of our employees by creating an inclusive and supportive workplace where everyone can thrive.</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card-body">
              <p class="card-text">Our vision is to become a global leader in medical device manufacturing, known for our relentless pursuit of innovation, commitment to quality, and dedication to improving patient care. We aim to make significant contributions to healthcare advancements, positively impacting the lives of millions of people worldwide.</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card-body">
              <p class="card-text">Our vision is to become a global leader in medical device manufacturing, known for our relentless pursuit of innovation, commitment to quality, and dedication to improving patient care. We aim to make significant contributions to healthcare advancements, positively impacting the lives of millions of people worldwide. <br>• Code of Ethics.
                <br>• Product Security Statement.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section>

 <!-- ======= Contact Section ======= -->
 <section id="customer" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Customer Access Portal</h2>
          <p>Submit your Product Service Request here. An Ertunç Özcan Service Representative will respond within 8 hours</p>
        </div>

        <div class="row">

          <div class="col-lg-12 col-md-12">
            <form id="form1" method="post">
              <div class="row">
              <div class="col-lg-6">
              <div class="form-group">
                  <input style="border-radius: 0;box-shadow: none;font-size: 14px;padding: 10px 15px;" type="text" name="yname" class="form-control" id="yname" placeholder="Your Name" required>
                </div><br>
                <div class="form-group">
                  <input style="border-radius: 0;box-shadow: none;font-size: 14px;padding: 10px 15px;" type="text" class="form-control" name="hospital" id="hospital" placeholder="Hospital" required>
                </div><br>
                <div class="form-group">
                  <input style="border-radius: 0;box-shadow: none;font-size: 14px;padding: 10px 15px;" type="text" class="form-control" name="city" id="city" placeholder="City" required>
                </div><br>
                <div class="form-group">
                  <input style="border-radius: 0;box-shadow: none;font-size: 14px;padding: 10px 15px;" type="text" name="state" class="form-control" id="state" placeholder="State" required>
                </div><br>
                <div class="form-group">
                  <input style="border-radius: 0;box-shadow: none;font-size: 14px;padding: 10px 15px;" type="number" class="form-control" name="zip" id="zip" placeholder="Zip Code" required>
                </div><br>
                <div class="form-group">
                  <input style="border-radius: 0;box-shadow: none;font-size: 14px;padding: 10px 15px;" type="text" class="form-control" name="country" id="country " placeholder="Country " required>
                </div><br>
              </div>
              <div class="col-lg-6">
                
              <div class="form-group">
                  <input style="border-radius: 0;box-shadow: none;font-size: 14px;padding: 10px 15px;" type="number" name="telephone" class="form-control" id="telephone" placeholder="Telephone" required>
                </div><br>
                <div class="form-group">
                  <input style="border-radius: 0;box-shadow: none;font-size: 14px;padding: 10px 15px;" type="text" class="form-control" name="cell" id="cell" placeholder="Cell" required>
                </div><br>
                <div class="form-group">
                  <input style="border-radius: 0;box-shadow: none;font-size: 14px;padding: 10px 15px;" type="email" class="form-control" name="yemail" id="yemail" placeholder="Your Email" required>
                </div><br>
                <div class="form-group">
                  <textarea style="border-radius: 0;box-shadow: none;font-size: 14px;padding: 10px 15px;" class="form-control" name="ymessage" rows="7" placeholder="Message" required></textarea>
                </div><br>
              </div>
    
              <div class="text-center"><button style="background: #3498db;border: 0;padding: 10px 24px;color: #fff;transition: 0.4s;border-radius: 50px;" type="submit">Send</button></div>
              </div>
            </form>
            
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div style="text-align:center" class="col-lg-4 col-md-6">
            <div class="contact-about">
              <img src="assets/img/ertuncozcan.png" class="" alt="">
              <p>Ertunç Özcan Sağlık Tesisleri ve Tıbbi Cihazlar İnşaat San. Tic. A.Ş.</p>
              <div class="social-links">
                <a href="https://twitter.com/ertuncozcan" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/ertuncozcangroup/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.linkedin.com/company/ertuncozcan" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>Head Office : Aso 2. ve 3. Organize Sanayi Bölgesi Alcı (OSB) Mah. 2036 Cad. No:1 Sincan-Temelli-ANKARA</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p>contact@ertuncozcan.com</p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p>Phone: +90 312 641 41 34 - Fax: +90 312 641 40 06</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12">
            <form id="form2" method="post">
              <div class="form-group">
                <input style="border-radius: 0;box-shadow: none;font-size: 14px;padding: 10px 15px;" type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div><br>
              <div class="form-group">
                <input style="border-radius: 0;box-shadow: none;font-size: 14px;padding: 10px 15px;" type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div><br>
              <div class="form-group">
                <input style="border-radius: 0;box-shadow: none;font-size: 14px;padding: 10px 15px;" type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div><br>
              <div class="form-group">
                <textarea style="border-radius: 0;box-shadow: none;font-size: 14px;padding: 10px 15px;" class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div><br>
              <div class="text-center"><button style="background: #3498db;border: 0;padding: 10px 24px;color: #fff;transition: 0.4s;border-radius: 50px;" type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
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