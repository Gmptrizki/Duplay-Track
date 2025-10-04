<?php

namespace App\Http\Controllers\Student\SevenHabbits;

use App\Http\Controllers\Controller;
use App\Models\StudentHabbit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



class EatController extends Controller
{
    public function saveEat(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|max:2048',
            'description' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        if (!$user->student) {
            return redirect()->back()->with('error', 'Akun ini belum terhubung ke data siswa.');
        }

        $studentId = $user->student->id;
        $today = Carbon::now('Asia/Jakarta')->toDateString();

        // Cek apakah sudah check-in hari ini
        $already = StudentHabbit::where('student_id', $studentId)
            ->where('habbit_id', 4) // ← ID untuk makan sehat
            ->whereDate('date', $today)
            ->exists();

        if ($already) {
            return redirect()->back()->with('error', 'Kamu sudah check-in kegiatan makan sehat hari ini.');
        }

        // Simpan file foto
        $photoPath = $request->file('photo')->store('habbit_photos', 'public');

        // Simpan ke DB
        StudentHabbit::create([
            'student_id' => $studentId,
            'habbit_id'  => 4, // sesuaikan ID kebiasaan makan sehat
            'date'       => $today,
            'time'       => Carbon::now('Asia/Jakarta')->format('H:i:s'),
            'status'     => 'done',
            'photo_path' => $photoPath,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Check-in Makan Sehat berhasil disimpan 🥗');
    }
}
