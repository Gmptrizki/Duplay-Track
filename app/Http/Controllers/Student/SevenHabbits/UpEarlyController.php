<?php

namespace App\Http\Controllers\Student\SevenHabbits;

use App\Http\Controllers\Controller;
use App\Models\StudentHabbit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpEarlyController extends Controller
{
    public function saveUpEarly(Request $request)
    {
        try {
            $user = Auth::user();

            if (!$user->student) {
                return redirect()->back()->with('error', 'Akun ini belum terhubung ke data siswa.');
            }

            $studentId = $user->student->id;

            $today = Carbon::now('Asia/Jakarta')->toDateString(); 
            $currentTime = Carbon::now('Asia/Jakarta')->format('H:i:s');

            $alreadyExists = StudentHabbit::where('student_id', $studentId)
                ->where('habbit_id', 1)
                ->whereDate('date', $today) 
                ->exists();

            if ($alreadyExists) {
                return redirect()->back()->with('error', 'Kamu sudah melakukan check-in Bangun Pagi hari ini.');
            }

            StudentHabbit::create([
                'student_id' => $studentId,
                'habbit_id'  => 1,
                'date'       => $today,      
                'time'       => $currentTime,
                'status'     => 'done',
            ]);

            return redirect()->back()->with(
                'success',
                'Check-in Bangun Pagi berhasil disimpan 🎉 Jam: ' . $currentTime . ' WIB'
            );
        } catch (\Exception $e) {
            \Log::error('Error in saveUpEarly: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan sistem. Silakan coba lagi.');
        }
    }
}
