<?php

use App\Http\Controllers\ApplicantDashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\FlightStatusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'dashboard'])->name('dashboard');
Route::get('checkin',[CheckinController::class, 'index'])->name('checkin');
Route::get('flightstatus',[FlightStatusController::class, 'index'])->name('flightstatus');

// Route::get('manage-checkin', 'CheckinController@index')->name('checkin');
Route::name('auth.')->prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('post-login', [AuthController::class, 'post_login'])->name('post-login');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('post-register', [AuthController::class, 'post_register'])->name('post-register');
    Route::get('logout', function () {
        Auth::logout();
        return redirect('auth/login');
    })->name('logout');
});

Route::name('dashboard.')->prefix('dashboard')->middleware(['auth', 'can:user-access'])->group(function () {
    Route::get('/', [ApplicantDashboardController::class, 'index'])->name('index');
    Route::get('application', [ApplicantDashboardController::class, 'application'])->name('application');
    Route::post('post-application', [ApplicantDashboardController::class, 'post_application'])->name('post-application');
    Route::get('profile', [ApplicantDashboardController::class, 'profile'])->name('profile');
    Route::get('edit-profile', [ApplicantDashboardController::class, 'editProfile'])->name('edit-profile');

    // Route::get('edit-profile',[ApplicantDashboardController::class,'editprofile'])->name('editprofile');
});
Route::get("/edit-profile", function() {
    return view("applicant.edit-profile");
  });

Route::name('admin.')->prefix('admin')->middleware(['auth', 'can:admin-access'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::post('approve/{id}', [AdminController::class, 'approve'])->name('approve');
    Route::post('reject/{id}', [AdminController::class, 'reject'])->name('reject');
    Route::get('profile', [AdminController::class, 'profile'])->name('profile');
});
