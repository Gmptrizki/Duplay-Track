<?php

namespace App\Http\Controllers\Student\SevenHabbits;

use App\Http\Controllers\Controller;
use App\Models\StudentHabbit;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SleepEarlyController extends Controller
{
    public function saveSleepEarly(Request $request)
    {
        try {
            $user = Auth::user();

            if (!$user->student) {
                return redirect()->back()->with('error', 'Akun ini belum terhubung ke data siswa.');
            }

            $studentId = $user->student->id;
            $today = Carbon::now('Asia/Jakarta')->toDateString();
            $currentTime = Carbon::now('Asia/Jakarta')->format('H:i:s');

            // cek sudah check-in atau belum
            $alreadyExists = StudentHabbit::where('student_id', $studentId)
                ->where('habbit_id', 7) // 7 = Sleep Early (ganti sesuai ID kamu)
                ->whereDate('date', $today)
                ->exists();

            if ($alreadyExists) {
                return redirect()->back()->with('error', 'Kamu sudah melakukan check-in Tidur Lebih Awal hari ini.');
            }

            StudentHabbit::create([
                'student_id' => $studentId,
                'habbit_id'  => 7,
                'date'       => $today,
                'time'       => $currentTime,
                'status'     => 'done',
            ]);

            return redirect()->back()->with(
                'success',
                'Check-in Tidur Lebih Awal berhasil disimpan 😴 Jam: ' . $currentTime . ' WIB'
            );
        } catch (\Exception $e) {
            \Log::error('Error in saveSleepEarly: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan sistem. Silakan coba lagi.');
        }
    }
}
