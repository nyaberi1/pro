<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <title>Pioneer International Unversity</title>

  @vite('resources/css/app.css')


</head>
<div class="navbar bg-base-200 width-full">
  <div class="flex-1">
    <a class="btn btn-ghost  text-xl">Enrollment List</a>
  </div>

</div>


<body>
  <div class="content pb-2 pt-4 ">




    @if (session()->has('message'))
      <div class="alert alert-success">
        {{ session()->get('message') }}
      </div>
    @endif


    <div class="pt-2 pb-2 width-full flex flex-row-reverse">
      <a href="{{ route('enrollment') }}">
        <button class=" flex  btn col-span-1 btn-primary "> ADD New{{-- </button> --}}</a>
    </div>

    <table class=" table-auto border-collapse border-spacing-6 border border-slate-500 text-center   ">

      <thead>
        <tr>
          <th class="border border-slate-600 ">ID</th>
          <th class="border border-slate-600 ">Name</th>
          <th class="border border-slate-600 ">Email</th>
          <th class="border border-slate-600 ">Registration number</th>
          <th class="border border-slate-600 ">Phone Number</th>
          <th class="border border-slate-600 ">Gender </th>
          <th class="border border-slate-600 ">ID number</th>
          <th class="border border-slate-600 ">Country</th>
          <th class="border border-slate-600">County</th>
          <th class="border border-slate-600">Level of Study</th>
          <th class="border border-slate-600">Faculty</th>
          <th class="border border-slate-600">Course Duration</th>
          <th class="border border-slate-600">Year of Enrollment</th>
          <th class="border border-slate-600">Admission Letter</th>
          <th class="border border-slate-600">Passport</th>
          <th class="border border-slate-600">KCSE Result Slip</th>
          <th class="border border-slate-600">KCSE Living</th>
          <th class="border border-slate-600">Scanned ID</th>
          <th class="border border-slate-600">Birth Certificate</th>
          <th class="border border-slate-600">Action</th>
          <th class="border border-slate-600">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($enrolls as $enroll)
          <tr>

            <td class="border border-slate-700 ">{{ $enroll->id }}</td>
            <td class="border border-slate-700 ">{{ $enroll->name }}</td>
            <td class="border border-slate-700 ">{{ $enroll->email }}</td>
            <td class="border border-slate-700 ">{{ $enroll->regno }}</td>
            <td class="border border-slate-700 ">{{ $enroll->phone }}</td>
            <td class="border border-slate-700 ">{{ $enroll->gender }}</td>
            <td class="border border-slate-700 ">{{ $enroll->idno }}</td>
            <td class="border border-slate-700 ">{{ $enroll->country }}</td>
            <td class="border border-slate-700 ">{{ $enroll->county }}</td>
            <td class="border border-slate-700 ">{{ $enroll->level }}</td>
            <td class="border border-slate-700 ">{{ $enroll->faculty }}</td>
            <td class="border border-slate-700 ">{{ $enroll->course_d }}</td>
            <td class="border border-slate-700 ">{{ $enroll->yearofenroll }}</td>
            <td class="border border-slate-700 ">{{ $enroll->admletter }}</td>
            <td class="border border-slate-700 ">{{ $enroll->passport }}</td>
            <td class="border border-slate-700 ">{{ $enroll->resultsslip }}</td>
            <td class="border border-slate-700 ">{{ $enroll->kcseliving }}</td>
            <td class="border border-slate-700 ">{{ $enroll->scannedid }}</td>
            <td class="border border-slate-700 ">{{ $enroll->birthcert }}</td>
            <td class="border border-slate-700   text-blue-400 hover:text-blue-500"><a
                href="{{ route('enrolls.edit', $enroll->id) }}">Edit</a></td>

            <td class="border border-slate-700 text-blue-400 hover:text-blue-500">
              <form action="{{ route('enrolls.delete', $enroll->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
              </form>
            </td>

          </tr>
        @endforeach
      </tbody>




    </table>


  </div>



</body>

</html>
