<table class="class="border-separate border border-slate-500 ">

  <thead>
   <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Registration number</th>
    <th>Phone Number</th>
    <th>Gender </th>
    <th>ID number</th>
   {{--  <th>Country</th> --}}
    <th>County</th>
    <th>Level of Study</th>
    <th>Faculty</th>
    <th>Course Duration</th>
    <th>Year of Enrollment</th>
     <th>Admission Letter</th>
    <th>Passport</th>
    <th>KCSE Result Slip</th>
    <th>KCSE Living</th>
    <th>Scanned ID</th>
    <th>Birth Certificate</th>
   </tr>
  </thead>
  <tbody>
               @foreach ($enrolls as $enroll)
  <tr>
    <td>{{ $enroll->name }}</td>
    <td>{{ $enroll->email }}</td>
    <td>{{ $enroll->regno }}</td>
    <td>{{ $enroll->phone }}</td>
    <td>{{ $enroll->gender }}</td>
    <td>{{ $enroll->idno }}</td>
    {{-- <td>{{ $enroll->country }}</td> --}}
    <td>{{ $enroll->county }}</td>
    <td>{{ $enroll->level }}</td>
    <td>{{ $enroll->faculty }}</td>
    <td>{{ $enroll->course_d }}</td>
    <td>{{ $enroll->yearofenroll }}</td>
    <td>{{ $enroll->admletter }}</td>
    <td>{{ $enroll->passport }}</td>
    <td>{{ $enroll->resultsslip }}</td>
    <td>{{ $enroll->kcseliving }}</td>
    <td>{{ $enroll->scannedid }}</td>
    <td>{{ $enroll->birthcert }}</td>

  </tr>
  @endforeach
  </tbody>




</table>