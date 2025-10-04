<?php

namespace App\Http\Controllers\Student\SevenHabbits;

use App\Http\Controllers\Controller;
use App\Models\StudentHabbit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class StudyController extends Controller
{
    public function saveStudy(Request $request)
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

        // Cek apakah sudah check-in belajar hari ini
        $already = StudentHabbit::where('student_id', $studentId)
            ->where('habbit_id', 5) // ID untuk belajar
            ->whereDate('date', $today)
            ->exists();

        if ($already) {
            return redirect()->back()->with('error', 'Kamu sudah check-in kegiatan belajar hari ini.');
        }

        // Simpan file foto
        $photoPath = $request->file('photo')->store('habbit_photos', 'public');

        // Simpan ke database
        StudentHabbit::create([
            'student_id' => $studentId,
            'habbit_id'  => 5,
            'date'       => $today,
            'time'       => Carbon::now('Asia/Jakarta')->format('H:i:s'),
            'status'     => 'done',
            'photo_path' => $photoPath,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Check-in Belajar berhasil disimpan 📚');
    }
}
