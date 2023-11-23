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
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <h1>Enrollment Form</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-from-section mt-20 mb-10">
    <div class="container">
      <div class="row">
        <div class="">
          <div class="form-title content-center">
            <h2>Fill the Form</h2>
          </div>
          <div>
            <form action="{{ route('/enrollslists/store') }}" method="POST">
              @csrf

              <fieldset class="border-collapse">
                <label for="name">Name</label><br>
                <input type="text" placeholder="Enter your Name" name="name" id="name">
                <span>
                  @error('name')
                    {{ $message }}
                  @enderror
                </span>
                <br>

                <label for="email">Email</label> <br>
                <input type="email" placeholder="Enter your Email" name="email" id="email">
                <span>
                  @error('email')
                    {{ $message }}
                  @enderror
                </span><br>

                <label for="regno">Registration Number</label><br>
                <input type="text" name="regno" id="" placeholder="Enter your registration Number">
                <span>
                  @error('regno')
                    {{ $message }}
                  @enderror
                </span><br>

                <label for="pnumber">Phone Number</label><br>
                <input type="tel" placeholder="Enter your Phone number" name="phone" id="phone">
                <span>
                  @error('phone')
                    {{ $message }}
                  @enderror
                </span><br>

                <label for="id">ID Number</label><br>
                <input type="text" placeholder="Enter ID number" name="idno" id="id">
                <span>
                  @error('idno')
                    {{ $message }}
                  @enderror
                </span><br>

                <label for="gender">Gender</label> <br>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <span>
                  @error('gender')
                    {{ $message }}
                  @enderror
                </span>
                <br>

                {{-- <label for="country">Country</label> <br>
                <input type="text" name="country " placeholder="Enter your Country" id="country">
                <span>
                  @error('country')
                    {{ $message }}
                  @enderror
                </span><br> --}}

                <label for="county">County</label> <br>
                <input type="text" name="county" placeholder="Enter your County" id="county">
                <span>
                  @error('county')
                    {{ $message }}
                  @enderror
                </span><br>

                <label for="level">Level of Study</label> <br>
                <input type="checkbox" name="level" value="Degree"> Degree
                <input type="checkbox" name="level" value="Diploma"> Diploma
                <input type="checkbox" name="level" value="Certificate"> Certificate
                <span>
                  @error('level')
                    {{ $message }}
                  @enderror
                </span>
                <br>

                <label for="Faculty">Choose your Faculty</label><br>
                <select name="faculty" id="faculty">
                  <option value="BIT">BIT</option>
                  <option value="BCOM">BCOM</option>
                  <option value="BAIR">BAIR</option>
                  <option value="BEDA">BEDA</option>

                </select>
                <span>
                  @error('faculty')
                    {{ $message }}
                  @enderror
                </span><br>

                <label for="course_d">Course Duration</label><br>
                <input type="radio" name="course_d" value="4y"> 4years
                <input type="radio" name="course_d" value="3y"> 3years
                <input type="radio" name="course_d" value="1y"> 1year
                <span>
                  @error('course_d')
                    {{ $message }}
                  @enderror
                </span><br>

                <label for="yearofenroll">Year of Enrollment</label> <br>
                <input type="text" name="yearofenroll" placeholder="Enter year of Enrollment" id="yearofenroll">
                <span>
                  @error('yearofenroll')
                    {{ $message }}
                  @enderror
                </span>

                <br>
                {{--  <label for="description">Description</label><br>
              <textarea name="message" id="message" cols="30" rows="10" placeholder="Describe your self"></textarea> --}}
                <h4>Documents</h4>
                <p>The Document must be scanned </p>
                <div class="border">
                  <label for="admletter">Admission Letter</label>
                  <input type="file" name="admletter" id=""
                    class="border border-gray-200 rounded p-2 w-full">
                  <span>
                    @error('admletter')
                      {{ $message }}
                    @enderror
                  </span><br>


                  <label for="passport">Passport</label>
                  <input type="file" class="border border-gray-200 rounded p-2 w-full" name="passport" />
                  <span>
                    @error('passport')
                      {{ $message }}
                    @enderror
                  </span><br>

                  <label for="kcse result slip">KCSE Result Slip</label>
                  <input type="file" name="resultsslip" id=""
                    class="border border-gray-200 rounded p-2 w-full">
                  <span>
                    @error('resultsslip')
                      {{ $message }}
                    @enderror
                  </span> <br>

                  <label for="kcse living">KCSE Living</label>
                  <input type="file" name="kcseliving" id=""
                    class="border border-gray-200 rounded p-2 w-full">
                  <span>
                    @error('kcseliving')
                      {{ $message }}
                    @enderror
                  </span><br>

                  <label for="scannedid">Scanned ID</label>
                  <input type="file" name="scannedid" id=""
                    class="border border-gray-200 rounded p-2 w-full">
                  <span>
                    @error('scannedid')
                      {{ $message }}
                    @enderror
                  </span><br>

                  <label for="birthcert">Birth Certificate</label>
                  <input type="file" name="birthcert" id=""
                    class="border border-gray-200 rounded p-2 w-full">
                  <span>
                    @error('birthcert')
                      {{ $message }}
                    @enderror
                  </span> <br>
                </div>


                <button class="bg-blue-500 transform duration-700 delay-500 hover:to-blue-400 rounded-2xl "
                  value="Submit">Submit</button>
              </fieldset>

            </form>
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
  <script src="assets/js/form-validate.js"></script>
  <!-- main js -->
  <script src="assets/js/main.js"></script>

</body>

</html>
