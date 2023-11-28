<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;

class EnrollsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $title = 'Enrollment List';
        $enrolls = Enroll::latest()->paginate(5);

        return view('enrolls.enrollmentlist', ['enrolls' => $enrolls])->with(compact('title', 'enrolls'));
    }
    /* public function show(Enroll $enroll)
    {
        return view('enrolls.enrollmentlist', [
            'Enroll' => $enroll
        ]);
    } */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enrolls = Enroll::get();

        return view('pages.enrollment')->with(compact('title', 'enrolls'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'regno' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'idno' => 'required',
            'country' => 'required',
            'county' => 'required',
            'level' => 'required',
            'faculty' => 'required',
            'course_d' => 'required',
            'yearofenroll' => 'required',
            'admletter' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'passport' => 'required|file|mimes:pdf,jpg,png|max:2048',
            'resultsslip' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'kcseliving' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'scannedid' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'birthcert' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);
        $path = $request->file('admletter')->store('admission_letters');
        $path = $request->file('passport')->store('passports');
        $path = $request->file('resultsslip')->store('results_slips');
        $path = $request->file('kcseliving')->store('kcse_livings');
        $path = $request->file('scannedid')->store('scanned_ids');
        $path = $request->file('birthcert')->store('birth_certificates');

        $enroll = Enroll::create($incomingFields)->file_path = $path;

        /*  Enroll::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'regno' => $request->regno,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'idno' => $request->idno,
                'country' => $request->country,
                'county' => $request->county,
                'level' => $request->level,
                'faculty' => $request->faculty,
                'course_d' => $request->course_d,
                'yearofenroll' => $request->yearofenroll,
                'admletter' => $request->admletter,
                'passport' => $request->passport,
                'resultsslip' => $request->resultsslip,
                'kcseliving' => $request->kcseliving,
                'scannedid' => $request->scannedid,
                'birthcert' => $request->birthcert,

            ]

        ); */

        return redirect()->route('enrolls')->with('messsage', 'You have been enroll successfull!!!');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enroll $enroll)
    {
        //$enrolls = Enroll::find($enroll);

        return view('enrolls.editen', ['enroll' => $enroll]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enroll $enroll)
    {

        $incomingFields = $request->validate([

            'name' => 'required',
            'email' => 'required|email',
            'regno' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'idno' => 'required',
            'country' => 'required',
            'county' => 'required',
            'level' => 'required',
            'faculty' => 'required',
            'course_d' => 'required',
            'yearofenroll' => 'required',
            /*        'admletter' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'passport' => 'required|file|mimes:pdf,jpg,png|max:2048',
            'resultsslip' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'kcseliving' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'scannedid' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'birthcert' => 'required|file|mimes:pdf,doc,docx|max:2048',
 */
        ]);
        /* $path = $request->file('admletter')->store('admission_letters');
        $path = $request->file('passport')->store('passports');
        $path = $request->file('resultsslip')->store('results_slips');
        $path = $request->file('kcseliving')->store('kcse_livings');
        $path = $request->file('scannedid')->store('scanned_ids');
        $path = $request->file('birthcert')->store('birth_certificates');
 */

        $enroll = Enroll::find($enroll->id);
        /*  if ($request->hasFile('file')) {

            Storage::delete($enroll->file_path);

            // Store the new file in the storage disk
            $path = $request->file('file')->store('uploads');

            // Update the file path in the database
            $upload->file_path = $path;
        }
 */

        $enroll->update($incomingFields);
        $enroll->save();

        return redirect()->route('enrolls', ['enroll' => $enroll])->with('message', 'Enrollment has updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enroll $enroll)
    {

        //$enrolls = Enroll::find($enroll->id);
        $enroll->delete();

        return redirect()->route('enrolls', ['enroll' => $enroll])->with('message', 'Enrollment delete');
    }
}
