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
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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

<body class="bg-purple-300">



  <div class="contact-from-section mt-20 mb-10 col-span-2 flex justify-center items-center mx-auto bg-white w-full">
    <div class="container ">
      <div class="row ">
        <div>
          <div class="form-title text-center content-center text-xl">
            <h2>Edit the Enrollment</h2>
          </div>

          <div class="flex flex-row w-full justify-center pt-4 pb-4">
            <div class="card bg-base-500 shadow-xl p-4 px-5 justify-center">


              <form action="{{ route('enrolls.update', $enroll->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <fieldset class="border">

                  <div class="mb-3  p-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control border border-gray-300 p-1" id="name"
                      value="{{ $enroll->name }}">
                    <span class="text-red-500">
                      @error('name')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>


                  <div class="mb-3  p-4">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control border border-gray-300 p-1"
                      id="exampleFormControlInput1" placeholder="Enter your Email" value="{{ $enroll->email }}">
                    <span class="text-red-500">
                      @error('email')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>
                  <div class="mb-3  p-4">
                    <label for="regno" class="form-label">Registration Number</label>
                    <input type="text" class="form-control border border-gray-300 p-1" name="regno" id="regno"
                      value="{{ $enroll->regno }}">
                    <span class="text-red-500">
                      @error('regno')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3   p-4">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control border border-gray-300  p-1" name="phone" id="phone"
                      value="{{ $enroll->phone }}">
                    <span class="text-red-500">
                      @error('phone')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3  p-4">
                    <label for="idno" class="form-label">ID Number</label>
                    <input type="text" class="form-control border border-gray-300  p-1" name="idno" id="idno"
                      value="{{ $enroll->idno }}">
                    <span class="text-red-500">
                      @error('idno')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>
                  <div class="mb-3">
                    <label for="birthdate" class="form-label">Date of Birth</label>
                    <input type="date" name="birthdate" class="form-control " id="birthdate">
                    @error('birthdate')
                      <span class="text-red-500">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3  p-4">
                    <label for="gender" class="form-label">Gender</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input bg-white" name="gender" type="checkbox" value="male"
                        @if ($enroll->gender == 'male') @checked(true) @endif>
                      <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="gender" value="female"
                        @if ($enroll->gender == 'female') @checked(true) @endif>
                      <label class="form-check-label" for="inlineCheckbox2">Female</label>
                    </div>
                    <span>
                      @error('gender')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3 p-4 ">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control border border-gray-300  p-1" name="country"
                      id="country" value="{{ $enroll->country }}">
                    <span class="text-red-500">
                      @error('country')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>
                  <div class="mb-3 p-4">
                    <label for="county" class="form-label">County</label>
                    <input type="text" class="form-control  border border-gray-300  p-1" name="county"
                      id="county" value="{{ $enroll->county }}">
                    <span class="text-red-500">
                      @error('county')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>
                  <div class="mb-3 p-4">
                    <label for="level" class="form-label">Level of Study</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="level" value="masters"
                        @if ($enroll->level == 'masters') checked @endif>
                      <label class="form-check-label" for="masters">Masters</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="level" value="degree"
                        @if ($enroll->level == 'degree') checked @endif>
                      <label class="form-check-label" for="degree">Degree</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="level" value="diploma"
                        @if ($enroll->level == 'diploma') checked @endif>
                      <label class="form-check-label" for="diploma">Diploma</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="level" value="certificate"
                        @if ($enroll->level == 'certificate') checked @endif>
                      <label class="form-check-label" for="certificate">Certificate</label>
                    </div>
                    <span>
                      @error('level')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>


                  <div class="mb-3 p-4">
                    <label for="faculty" class="form-label">Choose Faculty</label>
                    <select class="form-select" name="faculty">
                      <option selected>--chooose faculty---</option>
                      <option value="bit" @if ($enroll->faculty == 'bit') selected @endif>BIT</option>
                      <option value="bcom" @if ($enroll->faculty == 'bcom') selected @endif>BCOM</option>
                      <option value="bair" @if ($enroll->faculty == 'bair') selected @endif>BAIR</option>
                      <option value="beda" @if ($enroll->faculty == 'beda') selected @endif>BEDA</option>
                    </select>
                    <span>
                      @error('faculty')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>




                  <div class="mb-3 p-4">
                    <label for="faculty" class="form-label">Course Duration</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="course_d" type="checkbox" value="4y"
                        @if ($enroll->course_d == '4y') @checked(true) @endif>
                      <label class="form-check-label" for="4y">4 Years</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="course_d" value="3y"
                        @if ($enroll->course_d == '3y') @checked(true) @endif>
                      <label class="form-check-label" for="3y">3 Years</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="course_d" value="1y"
                        @if ($enroll->course_d == '1y') @checked(true) @endif>
                      <label class="form-check-label" for="1y">1 Year</label>
                    </div>
                    <span>
                      @error('course_d')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3 p-4">
                    <label for="yearofenroll" class="form-label">Year of Enrollment</label>
                    <input type="text" class="form-control border border-gray-300  p-1" name="yearofenroll"
                      value="{{ $enroll->yearofenroll }}">
                    <span class="text-red-500">
                      @error('yearofenroll')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3 p-4">
                    <label for="admletter" class="form-label">Admission Letter</label>
                    <input class="form-control form-control-lg" name="admletter" type="file">
                    <span class="text-red-500">
                      @error('admletter')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3 p-4">
                    <label for="passport" class="form-label">Passport</label>
                    <input class="form-control form-control-lg" name="passport" type="file">
                    <span class="text-red-500">
                      @error('passport')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>


                  <div class="mb-3 p-4">
                    <label for="resultsslip" class="form-label">KSCE Result Slip</label>
                    <input class="form-control form-control-lg" name="resultsslip" type="file">
                    <span class="text-red-500">
                      @error('resultsslip')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>




                  <div class="mb-3 p-4">
                    <label for="kcseliving" class="form-label">KSCE Living</label>
                    <input class="form-control form-control-lg" name="kcseliving" type="file">
                    <span class="text-red-500">
                      @error('kcseliving')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3 p-4">
                    <label for="scannedid" class="form-label">Scanned ID</label>
                    <input class="form-control form-control-lg" name="scannedid" type="file">
                    <span class="text-red-500">
                      @error('scannedid')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3 p-4">
                    <label for="birthcert" class="form-label">BIrth Certificate</label>
                    <input class="form-control form-control-lg" id="formFileLg" name="birthcert" type="file">
                    <span class="text-red-500">
                      @error('birthcert')
                        {{ $message }}
                      @enderror
                  </div>

                  <div class="p-4">
                    <button class="bg-blue-700 hover:bg-blue-500 p-4 rounded-xl ">Update</button>
                  </div>
                </fieldset>



              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  </div>
  </div>
  </div>
  </div>

  <nav class->

  </nav>






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
