<?php

namespace App\Http\Controllers\Student\SevenHabbits;

use App\Http\Controllers\Controller;
use App\Models\StudentHabbit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SportController extends Controller
{
    public function saveSport(Request $request)
    {
        try {
            $user = Auth::user();

            if (!$user->student) {
                return redirect()->back()->with('error', 'Akun ini belum terhubung ke data siswa.');
            }

            // ✅ Validasi input
            $validated = $request->validate([
                'photo' => 'required|image|max:2048', // max 2MB
                'description' => 'required|string|max:255',
            ]);

            $studentId = $user->student->id;
            $today = Carbon::now('Asia/Jakarta')->toDateString();
            $currentTime = Carbon::now('Asia/Jakarta')->format('H:i:s');

            // ✅ Cek apakah sudah pernah melakukan olahraga hari ini
            $alreadyExists = StudentHabbit::where('student_id', $studentId)
                ->where('habbit_id', 3) // 3 = ID kebiasaan olahraga
                ->whereDate('date', $today)
                ->exists();

            if ($alreadyExists) {
                return redirect()->back()->with('error', 'Kamu sudah mencatat kegiatan olahraga hari ini.');
            }

            // ✅ Simpan file foto ke storage
            $photoPath = $request->file('photo')->store('sports', 'public');

            // ✅ Simpan ke database
            StudentHabbit::create([
                'student_id' => $studentId,
                'habbit_id'  => 3, // id untuk olahraga
                'date'       => $today,
                'time'       => $currentTime,
                'status'     => 'done',
                'photo_path' => $photoPath,
                'description'=> $validated['description'],
            ]);

            return redirect()->back()->with(
                'success',
                'Kegiatan olahraga berhasil dicatat 🏃 Jam: ' . $currentTime . ' WIB'
            );
        } catch (\Exception $e) {
            \Log::error('Error in saveSport: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan sistem. Silakan coba lagi.');
        }
    }
}
