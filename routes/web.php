<?php

use App\Http\Controllers\Auth\RoleLoginController;
use App\Http\Controllers\Student\SevenHabbits\EatController;
use App\Http\Controllers\Student\SevenHabbits\PrayingController;
use App\Http\Controllers\Student\SevenHabbits\SleepEarlyController;
use App\Http\Controllers\Student\SevenHabbits\SocialController;
use App\Http\Controllers\Student\SevenHabbits\SportController;
use App\Http\Controllers\Student\SevenHabbits\StudyController;
use App\Http\Controllers\Student\SevenHabbits\UpEarlyController;
use App\Http\Controllers\TestController;
use App\Livewire\Auth\LoginGuruForm;
use App\Livewire\Auth\LoginSiswaForm;
use App\Livewire\Dashboard\GuruDashboard;
use App\Livewire\Dashboard\SiswaDashboard;
use App\Livewire\Student\Attendance\CheckIn;
use App\Livewire\Student\Attendance\GoHome;
use App\Livewire\Student\SevenHabits\Point\Eat;
use App\Livewire\Student\SevenHabits\Point\Praying;
use App\Livewire\Student\SevenHabits\Point\SleepEarly;
use App\Livewire\Student\SevenHabits\Point\Social;
use App\Livewire\Student\SevenHabits\Point\Sport;
use App\Livewire\Student\SevenHabits\Point\Study;
use App\Livewire\Student\SevenHabits\Point\UpEarly;
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


    // Up Early
    Route::get('/student/seven-habbits/up-early', UpEarly::class)->name('student.seven-habbits.up-early');
    Route::post('/student/seven-habbits/up-early/save', [UpEarlyController::class, 'saveUpEarly'])
        ->name('student.seven-habbits.up-early.save');

    // Praying
    Route::get('/student/seven-habbits/praying', Praying::class)->name('student.seven-habbits.praying');
    Route::post('/student/seven-habbits/praying/save', [PrayingController::class, 'savePraying'])
        ->name('student.seven-habbits.praying.save');

    // Sport
    Route::get('/student/seven-habbits/sport', Sport::class)->name('student.seven-habbits.sport');
    Route::post('/student/seven-habbits/sport/save', [SportController::class, 'saveSport'])
        ->name('student.seven-habbits.sport.save');

    //eat
    Route::get('/student/seven-habbits/eat', Eat::class)->name('student.seven-habbits.eat');
    Route::post('/student/seven-habbits/eat/save', [EatController::class, 'saveEat'])
        ->name('student.seven.habbits.eat.save');

    //study
    Route::get('/student/seven-habbits/study', Study::class)->name('student.seven-habbits.study');
    Route::post('/student/seven-habbits/study/save', [StudyController::class, 'saveStudy'])
        ->name('student.seven.habbits.study.save');

    //social
    Route::get('/student/seven-habbits/social', Social::class)->name('student.seven-habbits.social');
    Route::post('/student/seven-habbits/social/save', [SocialController::class, 'saveSocial'])
        ->name('student.seven.habbits.social.save');

    //Sleep Early
    Route::get('/student/seven-habbits/sleep-early', SleepEarly::class)->name('student.seven-habbits.sleep-early');
    Route::post('/student/seven-habbits/sleep-early/save', [SleepEarlyController::class, 'saveSleepEarly'])->name('student.seven-habbits.sleep-early.save');
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
