<?php

use App\Http\Controllers\Auth\RoleLoginController;
use App\Http\Controllers\TestController;
use App\Livewire\Auth\LoginGuruForm;
use App\Livewire\Auth\LoginSiswaForm;
use App\Livewire\Dashboard\GuruDashboard;
use App\Livewire\Dashboard\SiswaDashboard;
use App\Livewire\Student\Attendance\CheckIn;
use App\Livewire\Student\Attendance\GoHome;
use App\Livewire\Student\SevenHabits\SevenHabits;
use App\Livewire\Student\StudentClassForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome')->name('welcome');


//belum di gunakan karena belum ada fitur untuk guru
Route::get('/login-role', [RoleLoginController::class, 'index'])->name('login.role');



Route::get('/login-siswa', LoginSiswaForm::class)->name('login.siswa');
Route::get('/login-guru', LoginGuruForm::class)->name('login.guru');

/*
|--------------------------------------------------------------------------
| Dashboard - Siswa
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/dashboard-siswa', SiswaDashboard::class)->name('dashboard.siswa');
    Route::get('/jadwal/class', StudentClassForm::class)->name('student.class');


    //route absen masuk
    Route::get('/student/barcode-checkin', CheckIn::class)->name('student.barcode.checkin');


    //route absen keluar
    Route::get('/student/barcode-gohome', GoHome::class)->name('student.barcode.gohome');


    // Kebiasaan Anak Indonesia Hebat
    Route::get('/student/seven-habbits', SevenHabits::class)->name('student.seven.habbits');
});


Route::get('/login', function () {
    return redirect()->route('login.role');
})->name('login');
/*
|--------------------------------------------------------------------------
| Dashboard - Guru
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:guru'])->group(function () {
    Route::get('/dashboard-guru', GuruDashboard::class)->name('dashboard.guru');
});

Route::get('/testsaja', [TestController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/
Route::post('/logout', function (Request $request) {
    Auth::guard('web')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
})->name('logout');

/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


