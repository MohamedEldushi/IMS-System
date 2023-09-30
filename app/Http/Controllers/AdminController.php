<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index() {
        $data['applications'] = Application::all();
        return view('admin.index', $data);
    }

    public function profile () {
        $data['user'] = auth()->user();
        return view('admin.profile', $data);
    }

    public function approve ($id) {
        $application = Application::find($id);

        if ($application->status == 'pending') {
            $application->status = "accepted";
            $application->save();
            return redirect()->back()->with('success', 'Application Approved');
        } else {
            return redirect()->back()->with('error', 'Application Already Approved');
        }
    }

    public function reject ($id) {
        $application = Application::find($id);

        if ($application->status == 'pending') {
            $application->status = "rejected";
            $application->save();
            return redirect()->back()->with('success', 'Application Rejected');
        } else {
            return redirect()->back()->with('error', 'Application Already Rejected');
        }
    }
}
