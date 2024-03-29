<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
    content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

  <!-- title -->
  <title>Pionneer International Unversity</title>

  <!-- favicon -->
  <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- owl carousel -->
  <link rel="stylesheet" href="assets/css/owl.carousel.css">
  <!-- magnific popup -->
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <!-- animate css -->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- mean menu css -->
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <!-- main style -->
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- responsive -->
  <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

  @if (session()->has('message'))
  <div class="alert alert-success">
      {{ session()->get('message') }}
  </div>
  <meta http-equiv="refresh" content="5">
@endif

  <!--PreLoader-->
  <div class="loader">
    <div class="loader-inner">
      <div class="circle"></div>
    </div>
  </div>
  <!--PreLoader Ends-->

  <!-- header -->
  <div class="top-header-area" id="sticker">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
          <div class="main-menu-wrap">
            <!-- logo -->
            <div class="site-logo">
              <a href="index.html">
                <img src="assets/img/logo.png" alt="">
              </a>
            </div>
            <!-- logo -->

            <!-- menu start -->
            <nav class="main-menu">
              @auth

                <ul>
                  <li class="current-list-item"><a href="/">Home</a>

                  </li>
                  <li><a href="/about">About</a></li>

                  <li><a href="/contact">Contact</a></li>
                  <li> <a href="/enrollment">Enrollment</a></li>
                  <li> <a href="/admin">Manage</a></li>


                  <li>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf

                      <a :href="route('logout')"
                        onclick="event.preventDefault();
                              this.closest('form').submit();">
                        {{ __('Log Out') }}
                      </a>
                    </form>
                  </li>


                </ul>
              @else
                <ul>
                  <li class="current-list-item"><a href="/">Home</a>

                  </li>
                  <li><a href="/about">About</a></li>

                  <li><a href="/contact">Contact</a></li>
                  <li> <a href="/enrollment">Enrollment</a></li>
                  <li> <a href="/login">Login</a></li>
                  <li> <a href="/register">Register</a></li>
                  <li>
                    <div class="header-icons">
                      <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                      <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    </div>
                  </li>


                </ul>
              @endauth

            </nav>
            <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
            <div class="mobile-menu"></div>
            <!-- menu end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header -->


  <!-- hero area -->
  <div class="hero-area hero-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 offset-lg-2 text-center">
          <div class="hero-text">
            <div class="hero-text-tablecell">
              <p class="subtitle">Pioneer International University</p>
              <h1>Your School of Choice</h1>
              <p></p>
              <div class="hero-btns">
                <a href="{{ route('contact') }}" class="bordered-btn">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end hero area -->

  <!-- features list section -->
  <div class="list-section pt-80 pb-80">
    <div class="container">

      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="list-box d-flex align-items-center">
            <div class="list-icon">
              <i class="fas fa-shipping-fast"></i>
            </div>
            <div class="content">
              <h3>Free Enrollment</h3>
              <p>Just click enrollment</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="list-box d-flex align-items-center">
            <div class="list-icon">
              <i class="fas fa-phone-volume"></i>
            </div>
            <div class="content">
              <h3>24/7 Support</h3>
              <p>Get support all day</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="list-box d-flex justify-content-start align-items-center">
            <div class="list-icon">
              <i class="fas fa-sync"></i>
            </div>
            <div class="content">
              <h3>Get in touch</h3>
              <p>Register with us!</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- end features list section -->

  <!-- product section -->
  <div class="product-section mt-150 mb-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="section-title">
            <h3><span class="orange-text">Our</span> Services</h3>
            <h4>We Offer Quality Education and Affordable to the Society.
            </h4>
            <p>
              At Pioneer International University, our commitment to excellence extends to making quality education
              accessible and affordable to society. We understand the significance of education as a transformative
              force, and we strive to eliminate financial barriers that may hinder individuals from pursuing their
              academic goals. Through strategic resource management and financial aid initiatives, we ensure that the
              cost of education remains reasonable without compromising on the quality of the learning experience. This
              approach is rooted in our belief that everyone, regardless of their financial background, should have the
              opportunity to access high-quality education and unlock their full potential. By offering a combination of
              quality education and affordability, Pioneer International University aims to contribute to the
              empowerment and advancement of individuals and communities, making a positive impact on society as a
              whole.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="list-section pt-80 pb-80">
    <div class="container">

      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="list-box d-flex align-items-center">
            {{--  <div class="list-icon">
              <i class="fas fa-shipping-fast"></i>
            </div --}}>
            <div class="content">
              <h3>Academic Excellence Programs</h3>
              <p>At Pioneer International University, our Academic Excellence Programs are designed to provide students
                with a rigorous and comprehensive education across various disciplines. Our faculty, comprised of
                experienced professionals in their respective fields, is committed to delivering top-notch education
                that goes beyond textbooks, fostering critical thinking and problem-solving skills. Through a
                combination ofntheoretical knowledge and practical application, students engage in a learning experience
                that prepares them for success in their chosen careers.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="list-box d-flex align-items-center">
            {{-- <div class="list-icon">
              <i class="fas fa-phone-volume"></i>
            </div> --}}
            <div class="content">
              <h3> Cutting-Edge Technology Integration</h3>
              <p>Pioneer International University is dedicated to staying at the forefront of educational innovation.
                Our Cutting-Edge Technology Integration service ensures that students have access to state-of-the-art
                resources and digital tools that enhance the learning process. From interactive online platforms to
                virtual laboratories, we leverage technology to create dynamic and engaging educational experiences.
                This
                service equips students with the digital literacy skills necessary for the evolving demands of the
                modern
                workforce.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="list-box d-flex justify-content-start align-items-center">
            {{-- <div class="list-icon">
              <i class="fas fa-sync"></i>
            </div> --}}
            <div class="content">
              <h3> Supportive Learning Environment and Campus Community</h3>
              <p>Recognizing the importance of a positive and supportive learning environment, Piooneer International
                University is committed to creating a campus community that nurtures personal and intellectual growth.
                Our dedicated faculty and staff work collaboratively to foster a sense of belonging, encouraging
                students to actively participate in various extracurricular activities and community events. </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>



  <!-- footer -->
  <div class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-box about-widget">
            <h2 class="widget-title">About us</h2>
            <p>Pioneer International University is a distinguished institution committed to fostering academic
              excellence, innovation, and global leadership. With a rich history of providing quality education, we
              empower students to excel in their chosen fields, preparing them for a dynamic and impactful future.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-box get-in-touch">
            <h2 class="widget-title">Get in Touch</h2>
            <ul>
              <li>PO Box 33421, Murangá road, Nairobi.</li>
              <li>info@piu.ac.ke</li>
              <li>0740 635 657</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-box pages">
            <h2 class="widget-title">Pages</h2>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-box subscribe">
            <h2 class="widget-title">Register With Us</h2>
            <p>Register with our School and have a Chance to Chase Your Dream.</p>
            <a href="/register">Register now</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end footer -->

  <!-- copyright -->
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>, All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 text-right col-md-12">
          <div class="social-icons">
            <ul>
              <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end copyright -->

  <!-- jquery -->
  <script src="assets/js/jquery-1.11.3.min.js"></script>
  <!-- bootstrap -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- count down -->
  <script src="assets/js/jquery.countdown.js"></script>
  <!-- isotope -->
  <script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
  <!-- waypoints -->
  <script src="assets/js/waypoints.js"></script>
  <!-- owl carousel -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- magnific popup -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- mean menu -->
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <!-- sticker js -->
  <script src="assets/js/sticker.js"></script>
  <!-- main js -->
  <script src="assets/js/main.js"></script>

</body>

</html>
