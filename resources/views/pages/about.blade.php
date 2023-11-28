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

  <!-- search area -->
  <div class="search-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="close-btn"><i class="fas fa-window-close"></i></span>
          <div class="search-bar">
            <div class="search-bar-tablecell">
              <h3>Search For:</h3>
              <input type="text" placeholder="Keywords">
              <button type="submit">Search <i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end search arewa -->

  <!-- breadcrumb-section -->
  <div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <p>Pioneer International Unversity</p>
            <h1>About Us</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->

  <!-- featured section -->
  <div class="feature-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="featured-text">
            <h2 class="pb-3">Why<span class="orange-text"> Pioneer</span></h2>
            <div class="row">
              <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                <div class="list-box d-flex">
                  <div class="list-icon">
                    <i class="fas fa-shipping-fast"></i>
                  </div>
                  <div class="content">
                    <h3>Learning to Know</h3>
                    <p>Dedicated to cultivating critical thinking, empowering students for challenges in academics and
                      professions. </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                <div class="list-box d-flex">
                  <div class="list-icon">
                    <i class="fas fa-money-bill-alt"></i>
                  </div>
                  <div class="content">
                    <h3>Learning to Be</h3>
                    <p>Fostering support, diverse learning empowers students for personal, professional excellence,
                      lifelong dedication.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                <div class="list-box d-flex">
                  <div class="list-icon">
                    <i class="fas fa-briefcase"></i>
                  </div>
                  <div class="content">
                    <h3>Leaning to Do</h3>
                    <p> Empowering students through hands-on experiences, real-world projects, and industry training for
                      practical proficiency.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="list-box d-flex">
                  <div class="list-icon">
                    <i class="fas fa-sync-alt"></i>
                  </div>
                  <div class="content">
                    <h3> Learning to Leave Together</h3>
                    <p>Nurturing a diverse, inclusive community, fostering collaboration, cultural exchange, and a
                      global mindset.
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="section-title">
            <h3>Our <span class="orange-text">Team</span></h3>
            <p>Students at various activities within School premises.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-team-item">
            <div class="team-bg team-bg-1"></div>
            <h4>Students <span>Heading To Lecture</span></h4>

          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-team-item">
            <div class="team-bg team-bg-2"></div>
            <h4>Students<span>AT Library</span></h4>

          </div>
        </div>
        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
          <div class="single-team-item">
            <div class="team-bg team-bg-3"></div>
            <h4>Student <span>Training</span></h4>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end featured section -->
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
              <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
              <li>support@fruitkha.com</li>
              <li>+00 111 222 3333</li>
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
            <a href="/">Register now</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- copyright -->
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>, All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 text-right col-md-12">
          <div class="social-icons">

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
