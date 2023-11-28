<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Pioneer International Unversity</title>

  @vite('resources/css/app.css')





<body>
  <div class="contact-from-section mt-20 mb-10  col-span-2">
    <div class=" bg-white text-lg text-black">
      <div class="row ">

        <div>
          <div class="form-title content-center">
            <h2>Fill the Form</h2>
          </div>


          <div class="flex flex-row w-full justify-center width-full pt-4 pb-4">
            <div class="card bg-base-500 shadow-xl p-4 px-5 justify-center">



              <form action="{{ route('enrolls.update', $enroll->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="space-y-12">
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name"
                      placeholder="Enter your Name" value="{{ $enroll->name }}">
                    <span>
                      @error('name')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>


                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                      placeholder="Enter your Email" value="{{ $enroll->email }}">
                    <span>
                      @error('email')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>
                  <div class="mb-3">
                    <label for="regno" class="form-label">Registration Number</label>
                    <input type="text" class="form-control" name="regno" id="regno"
                      placeholder="Enter your Name" value="{{ $enroll->regno }}">
                    <span>
                      @error('regno')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="phone"
                      placeholder="Enter your Name" value="{{ $enroll->phone }}">
                    <span>
                      @error('phone')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="idno" class="form-label">ID Number</label>
                    <input type="text" class="form-control" name="idno" id="idno"
                      placeholder="Enter your Name" value="{{ $enroll->idno }}">
                    <span>
                      @error('idno')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>
                  <div class="mb-3">
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

                  <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control" name="country" id="country"
                      placeholder="Enter your Name" value="{{ $enroll->country }}">
                    <span>
                      @error('country')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>
                  <div class="mb-3">
                    <label for="county" class="form-label">County</label>
                    <input type="text" class="form-control" name="county" id="county"
                      placeholder="Enter your Name" value="{{ $enroll->county }}">
                    <span>
                      @error('county')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="level" class="form-label">Level of Study</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="level" type="checkbox" value="masters"
                        @if ($enroll->level == 'masters') @checked(true) @endif>
                      <label class="form-check-label" for="masters">Masters</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="level" value="degree"
                        @if ($enroll->level == 'degree') @checked(true) @endif>
                      <label class="form-check-label" for="degree">Degree</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="level" value="diploma"
                        @if ($enroll->level == 'diploma') @checked(true) @endif>
                      <label class="form-check-label" for="diploma">Diploma</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="level" value="certificate"
                        @if ($enroll->level == 'certificate') @checked(true) @endif>
                      <label class="form-check-label" for="certificate">Certificate</label>
                    </div>
                    <span>
                      @error('level')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>


                  <div class="mb-3">
                    <label for="faculty" class="form-label">Choose Faculty</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="faculty" type="checkbox" value="bit"
                        @if ($enroll->faculty == 'bit') checked @endif>
                      <label class="form-check-label" for="bit">BIT</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="faculty" value="bcom"
                        @if ($enroll->faculty == 'bcom') checked @endif>
                      <label class="form-check-label" for="bcom">BCOM</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="faculty" value="bair"
                        @if ($enroll->faculty == 'bair') checked @endif>
                      <label class="form-check-label" for="bair">BAIR</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="faculty" value="beda"
                        @if ($enroll->faculty == 'beda') checked @endif>
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

                  <div class="mb-3">
                    <label for="yearofenroll" class="form-label">Year of Enrollment</label>
                    <input type="text" class="form-control" name="yearofenroll" placeholder="Enter your Name"
                      value="{{ $enroll->yearofenroll }}">
                    <span>
                      @error('yearofenroll')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="admletter" class="form-label">Admission Letter</label>
                    <input class="form-control form-control-lg" name="admletter" type="file">
                    <span>
                      @error('admletter')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="passport" class="form-label">Passport</label>
                    <input class="form-control form-control-lg" name="passport" type="file">
                    <span>
                      @error('passport')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>


                  <div class="mb-3">
                    <label for="resultsslip" class="form-label">KSCE Result Slip</label>
                    <input class="form-control form-control-lg" name="resultsslip" type="file">
                    <span>
                      @error('resultsslip')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>




                  <div class="mb-3">
                    <label for="kcseliving" class="form-label">KSCE Living</label>
                    <input class="form-control form-control-lg" name="kcseliving" type="file">
                    <span>
                      @error('kcseliving')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="scannedid" class="form-label">Scanned ID</label>
                    <input class="form-control form-control-lg" name="scannedid" type="file">
                    <span>
                      @error('scannedid')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="birthcert" class="form-label">BIrth Certificate</label>
                    <input class="form-control form-control-lg" id="formFileLg" name="birthcert" type="file">
                    <span>
                      @error('birthcert')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <input type="submit" class="pt-2" name="update" id="update">
                </div>

              </form>
            </div>
          </div>
        </div>

      </div>
    </div>







    {{-- 
  <div class="contact-from-section mt-20 mb-10">
    <div class="container">
      <div class="row">
        <div class="">
          <div class="form-title content-center">
            <h2>Fill the Form</h2>
          </div>
          <div>
            <form action="{{ route('enrolls.update', $enroll->id) }}" method="POST">

              @csrf
              @method('PUT')
              <fieldset class="border-collapse">
                <label for="name">Name</label><br>
                <input type="text" name="name" id="name" value="{{ $enroll->name }}">
                <span>
                  @error('name')
                    {{ $message }}
                  @enderror
                </span>
                <br>

                <label for="email">Email</label>
                <br>
                <input type="email" name="email" id="email" value="{{ $enroll->email }}">
                <span>
                  @error('email')
                    {{ $message }}
                  @enderror
                </span><br>

                <label for="regno">Registration
                  Number</label><br>
                <input type="text" name="regno" id="" value="{{ $enroll->regno }}">
                <span>
                  @error('regno')
                    {{ $message }}
                  @enderror
                </span><br>

                <label for="pnumber">Phone
                  Number</label><br>
                <input type="tel" name="phone" id="phone" value="{{ $enroll->phone }}">
                <span>
                  @error('phone')
                    {{ $message }}
                  @enderror
                </span><br>

                <label for="idno">ID
                  Number</label><br>
                <input type="text" name="idno" id="idno" value="{{ $enroll->idno }}">
                <span>
                  @error('idno')
                    {{ $message }}
                  @enderror
                </span><br>

                <label for="gender">Gender</label>
                <br>
                <input type="radio" name="gender" value="male" value="{{ $enroll->gender }}"> Male
                <input type="radio" name="gender" value="female" value="{{ $enroll->gender }}"> Female
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
    {{--
  <label for="county">County</label>
  <br>
  <input type="text" name="county" id="county" value="{{ $enroll->county }}">
  <span>
    @error('county')
      {{ $message }}
    @enderror
  </span><br>

  <label for="level">Level
    of Study</label> <br>
  <input type="checkbox" name="level" value="Degree" value="{{ $enroll->level }}"> Degree
  <input type="checkbox" name="level" value="Diploma" value="{{ $enroll->level }}"> Diploma
  <input type="checkbox" name="level" value="Certificate" value="{{ $enroll->level }}">
  Certificate
  <span>
    @error('level')
      {{ $message }}
    @enderror
  </span>
  <br>

  <label for="Faculty">Choose
    your Faculty</label><br>
  <select name="faculty" id="faculty" value="{{ $enroll->faculty }}">
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
  <input type="radio" name="course_d" value="4y" value="{{ $enroll->course_d }}" /> 4years
  <input type="radio" name="course_d" value="3y" value="{{ $enroll->course_d }}" /> 3years
  <input type="radio" name="course_d" value="1y" value="{{ $enroll->course_id }}" /> 1year
  <span>
    @error('course_d')
      {{ $message }}
    @enderror
  </span><br>

  <label for="yearofenroll">Year
    of Enrollment</label> <br>
  <input type="text" name="yearofenroll" id="yearofenroll" value="{{ $enroll->yearofenroll }}" />
  <span>
    @error('yearofenroll')
      {{ $message }}
    @enderror
  </span>

  <br>
  <h4>Documents</h4>
  <p>The Document must be scanned </p>
  <div class="border">
    <label for="admletter">Admission Letter</label>
    <input type="file" name="admletter" id="" class="border border-gray-200 rounded p-2 w-full"
      value="{{ $enroll->admletter }}" />
    <span>
      @error('admletter')
        {{ $message }}
      @enderror
    </span><br>


    <label for="passport">Passport</label>
    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="passport"
      value="{{ $enroll->passport }}" />
    <span>
      @error('passport')
        {{ $message }}
      @enderror
    </span><br>

    <label for="kcse
                    result slip">KCSE Result Slip</label>
    <input type="file" name="resultsslip" id="" class="border border-gray-200 rounded p-2 w-full"
      value="{{ $enroll->resultsslip }}" />
    <span>
      @error('resultsslip')
        {{ $message }}
      @enderror
    </span> <br>

    <label for="kcse
                    living">KCSE Living</label>
    <input type="file" name="kcseliving" id="" class="border border-gray-200 rounded p-2 w-full"
      value="{{ $enroll->kcseliving }}" />
    <span>
      @error('kcseliving')
        {{ $message }}
      @enderror
    </span><br>

    <label for="scannedid">Scanned
      ID</label>
    <input type="file" name="scannedid" id="" class="border border-gray-200 rounded p-2 w-full"
      value="{{ $enroll->scannedid }}" />
    <span>
      @error('scannedid')
        {{ $message }}
      @enderror
    </span><br>

    <label for="birthcert">Birth
      Certificate</label>
    <input type="file" name="birthcert" id="" class="border border-gray-200 rounded p-2 w-full"
      value="{{ $enroll->birthcert }}" />
    <span>
      @error('birthcert')
        {{ $message }}
      @enderror
    </span> <br>
  </div>

  </fieldset>


  <button value="Submit">Submit</button>


  </form>
  </div>
  </div>

  </div>
  </div>
  </div>
  </div> --}}
