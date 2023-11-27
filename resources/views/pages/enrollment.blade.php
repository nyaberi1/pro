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

  {{-- @vite('resources/css/app.css') --}}
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
          <div class="main-menu-wrap ">
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
                  {{--  <li>
                    <div class="header-icons">
                      <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                      <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    </div>
                  </li> --}}

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

  <div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
          <div class="breadcrumb-text">
            <h1>Enrollment Form</h1>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="contact-from-section mt-20 mb-10  col-span-2">
    <div class="container ">
      <div class="row ">
        {{--  <div class="text-auto "> --}}
        <div>
          <div class="form-title content-center">
            <h2>Fill the Form</h2>
          </div>


          <div class="flex flex-row w-full justify-center pt-4 pb-4">
            <div class="card bg-base-500 shadow-xl p-4 px-5 justify-center">



              <form action="{{ route('enrolls.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="space-y-12">
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name"
                      placeholder="Enter your Name" value="{{ old('name') }}">
                    <span>
                      @error('name')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>


                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                      placeholder="Enter your Email" value="{{ old('email') }}">
                    <span>
                      @error('email')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>


                  <div class="mb-3">
                    <label for="regno" class="form-label">Registration Number</label>
                    <input type="text" class="form-control" name="regno" id="regno"
                      placeholder="Enter your Name" value="{{ old('regno') }}">
                    <span>
                      @error('regno')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="phone"
                      placeholder="Enter your Name" value="{{ old('phone') }}">
                    <span>
                      @error('phone')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>


                  <div class="mb-3">
                    <label for="idno" class="form-label">ID Number</label>
                    <input type="text" class="form-control" name="idno" id="idno"
                      placeholder="Enter your Name" value="{{ old('idno') }}">
                    <span>
                      @error('idno')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>




                  <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="gender" type="checkbox" value="male">
                      <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="gender" value="female">
                      <label class="form-check-label" for="inlineCheckbox2">Female</label>
                    </div>
                    <span>
                      @error('gender')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>


                  <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control" name="country" id="country"
                      placeholder="Enter your Name" value="{{ old('country') }}">
                    <span>
                      @error('country')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>



                  <div class="mb-3">
                    <label for="county" class="form-label">County</label>
                    <input type="text" class="form-control" name="county" id="county"
                      placeholder="Enter your Name" value="{{ old('county') }}">
                    <span>
                      @error('county')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>



                  <div class="mb-3">
                    <label for="level" class="form-label">Level of Study</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="level" type="checkbox" value="master">
                      <label class="form-check-label" for="masters">Masters</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="level" value="degree"
                        onclick="onlyOne(this)">
                      <label class="form-check-label" for="degree">Degree</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="level" value="diploma"
                        onclick="onlyOne(this)">
                      <label class="form-check-label" for="diploma">Diploma</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="level" value="certificate"
                        onclick="onlyOne(this)">
                      <label class="form-check-label" for="certificate">Certificate</label>
                    </div>
                    <span>
                      @error('level')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="faculty" class="form-label">Choose of Faculty</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="faculty" type="checkbox" value="bit"
                        onclick="onlyOne(this)">
                      <label class="form-check-label" for="bit">BIT</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="faculty" value="bcom"
                        onclick="onlyOne(this)">
                      <label class="form-check-label" for="bcom">BCOM</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="faculty" value="bair"
                        onclick="onlyOne(this)">
                      <label class="form-check-label" for="bair">BAIR</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="faculty" value="beda"
                        onclick="onlyOne(this)">
                      <label class="form-check-label" for="beda">BEDA</label>
                    </div>
                    <span>
                      @error('faculty')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>




                  <div class="mb-3">
                    <label for="faculty" class="form-label">Course Duration</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="course_d" type="checkbox" value="4y"
                        onclick="onlyOne(this)">
                      <label class="form-check-label" for="4y">4 Years</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="course_d" value="3y"
                        onclick="onlyOne(this)">
                      <label class="form-check-label" for="3y">3 Years</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="course_d" value="1y"
                        onclick="onlyOne(this)">
                      <label class="form-check-label" for="1y">1 Year</label>
                    </div>
                    <span>
                      @error('course_d')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>



                  <div class="mb-3">
                    <label for="yearofenroll" class="form-label">Year of Enrollment</label>
                    <input type="text" class="form-control" name="yearofenroll" placeholder="Enter your Name"
                      value="{{ old('yearofenroll') }}">
                    <span>
                      @error('yearofenroll')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>





                  <div class="mb-3">
                    <label for="admletter" class="form-label">Admission Letter</label>
                    <input class="form-control form-control-lg" name="admletter" type="file"
                      value="{{ old('admletter') }}">
                    <span>
                      @error('admletter')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="passport" class="form-label">Passport</label>
                    <input class="form-control form-control-lg" name="passport" type="file"
                      value="{{ old('passport') }}">
                    <span>
                      @error('passport')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>


                  <div class="mb-3">
                    <label for="resultsslip" class="form-label">KSCE Result Slip</label>
                    <input class="form-control form-control-lg" name="resultsslip" type="file"
                      value="{{ old('resultsslip') }}">
                    <span>
                      @error('resultsslip')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>




                  <div class="mb-3">
                    <label for="kcseliving" class="form-label">KSCE Living</label>
                    <input class="form-control form-control-lg" name="kcseliving" type="file"
                      value="{{ old('kcseliving') }}">
                    <span>
                      @error('kcseliving')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="scannedid" class="form-label">Scanned ID</label>
                    <input class="form-control form-control-lg" name="scannedid" type="file"
                      value="{{ old('scannedid') }}">
                    <span>
                      @error('scannedid')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="birthcert" class="form-label">BIrth Certificate</label>
                    <input class="form-control form-control-lg" id="formFileLg" name="birthcert" type="file"
                      value="{{ old('birthcert') }}">
                    <span>
                      @error('birthcert')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <input type="submit" class="pt-2" name="submit" id="submit">
                </div>

              </form>
            </div>
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
            <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
              laudantium, totam rem aperiam, eaque ipsa quae.</p>
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
  <!-- form validation js -->
  {{-- <script src="assets/js/form-validate.js"></script> --}}
  <!-- main js -->
  <script src="assets/js/main.js"></script>

</body>

</html>
