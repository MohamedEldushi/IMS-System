<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicantDashboardController extends Controller
{
    //
    public function index() {

        $data['applications'] = auth()->user()->applications;
        return view('applicant.index', $data);
    }

    public function profile () {
        $data['user'] = auth()->user();
        return view('applicant.profile', $data);
    }

    public function application() {
        return view('applicant.form');
    }

    public function post_application (Request $request) {
        $user = auth()->user();

        $request->validate([
            'university' => 'required',
            'major' => 'required',
            'year' => 'required',
        ]);

        $application = new Application();
        $application->university = $request->input('university');
        $application->major = $request->input('major');
        $application->year = $request->input('year');


        $application->applicant()->associate($user);
        $application->save();

        return redirect()->route('dashboard.index');
    }

}
