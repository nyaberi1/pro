<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $admLetterPath = $request->file('admletter')->store('admission_letters');
        $passportPath = $request->file('passport')->store('passports');
        $resultSlipPath = $request->file('resultsslip')->store('results_slips');
        $kcseLivingPath = $request->file('kcseliving')->store('kcse_livings');
        $scannedIdPath = $request->file('scannedid')->store('scanned_ids');
        $birthCertPath = $request->file('birthcert')->store('birth_certificates');

        // Combine the paths into an array
        $enroll = new Enroll($incomingFields);
        $enroll->admletter = $admLetterPath;
        $enroll->passport = $passportPath;
        $enroll->resultsslip = $resultSlipPath;
        $enroll->kcseliving = $kcseLivingPath;
        $enroll->scannedid = $scannedIdPath;
        $enroll->birthcert = $birthCertPath;

        $enroll->save();

        return redirect()->route('enrolls')->with('message', 'You have been enrolled successfully!');
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

        return view('pages.edit', ['enroll' => $enroll]);
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
            'admletter' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'passport' => 'required|file|mimes:pdf,jpg,png|max:2048',
            'resultsslip' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'kcseliving' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'scannedid' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'birthcert' => 'required|file|mimes:pdf,doc,docx|max:2048',

        ]);

        $admLetterPath = $request->file('admletter')->store('admission_letters');
        $passportPath = $request->file('passport')->store('passports');
        $resultSlipPath = $request->file('resultsslip')->store('results_slips');
        $kcseLivingPath = $request->file('kcseliving')->store('kcse_livings');
        $scannedIdPath = $request->file('scannedid')->store('scanned_ids');
        $birthCertPath = $request->file('birthcert')->store('birth_certificates');

        $enroll = Enroll::find($enroll->id);
        if ($request->hasFile('admletter')) {
            Storage::delete($enroll->admletter);

            // Store the new file in the storage disk
            $admLetterPath = $request->file('admletter')->store('admission_letters');
            $enroll->admletter = $admLetterPath;
        }
        if ($request->hasFile('passport')) {
            Storage::delete($enroll->passport);

            // Store the new file in the storage disk
            $passportPath = $request->file('passport')->store('passports');
            $enroll->passport = $passportPath;
        }
        if ($request->hasFile('resultsslip')) {
            Storage::delete($enroll->resultsslip);

            // Store the new file in the storage disk
            $resultSlipPath = $request->file('resultsslip')->store('results_slips');
            $enroll->resultsslip = $resultSlipPath;
        }

        if ($request->hasFile('kcseliving')) {
            Storage::delete($enroll->kcseliving);

            // Store the new file in the storage disk
            $kcseLivingPath = $request->file('kcseliving')->store('kcse_livings');
            $enroll->kcseliving = $kcseLivingPath;
        }

        if ($request->hasFile('scannedid')) {
            Storage::delete($enroll->scannedid);

            // Store the new file in the storage disk
            $scannedIdPath = $request->file('scannedid')->store('scanned_ids');
            $enroll->scannedid = $scannedIdPath;
        }
        if ($request->hasFile('birthcert')) {
            Storage::delete($enroll->birthcert);

            // Store the new file in the storage disk
            $birthCertPath = $request->file('birthcert')->store('birth_certificates');
            $enroll->birthcert = $birthCertPath;
        }

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
