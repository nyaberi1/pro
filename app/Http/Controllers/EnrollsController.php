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
        $enrolls = Enroll::get();

        return view('enrolls.enrollmentlist')->with(compact('title', 'enrolls'));
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
            //'country' => 'required',
            'county' => 'required',
            'level' => 'required',
            'faculty' => 'required',
            'course_d' => 'required',
            'yearofenroll' => 'required',
            /*'admletter' => 'required', */
            /*   'passport' => 'required',
            'resultsslip' => 'required',
            'kcseliving' => 'required',
            'scannedid' => 'required',
            'birthcert' => 'required', */

        ]);

        /*  $path = $request->file('admletter')->store('public' 'stores'); */
        /*
        $path = $request->file('passport')->store('public_stores');
        $path = $request->file('resultsslip')->store('public_stores');
        $path = $request->file('kcseliving')->store('public_stores');
        $path = $request->file('scannedid')->store('public_stores');
        $path = $request->file('birthcert')->store('public_stores'); */

        Enroll::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'regno' => $request->regno,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'idno' => $request->idno,
                //'country' => $request->country,
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

        );

        return redirect()->route('enrolls')->with('success', 'You have been enroll!!!');
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
            //'country' => 'required',
            'county' => 'required',
            'level' => 'required',
            'faculty' => 'required',
            'course_d' => 'required',
            'yearofenroll' => 'required',
            /* 'admletter' => 'required', */
            /*   'passport' => 'required',
            'resultsslip' => 'required',
            'kcseliving' => 'required',
            'scannedid' => 'required',
            'birthcert' => 'required', */

        ]);

        /*  $path = $request->file('admletter')->store('public' 'stores'); */
        /*
        $path = $request->file('passport')->store('public_stores');
        $path = $request->file('resultsslip')->store('public_stores');
        $path = $request->file('kcseliving')->store('public_stores');
        $path = $request->file('scannedid')->store('public_stores');
        $path = $request->file('birthcert')->store('public_stores'); */

        $enroll->Enroll::update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'regno' => $request->regno,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'idno' => $request->idno,
                //'country' => $request->country,
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

        );

        return redirect()->route('enrolls', ['enroll' => $enroll])->compact('enrolls')->with('message', 'You have been enroll!!!');
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
