<?php

namespace App\Http\Controllers\Student\SevenHabbits;

use App\Http\Controllers\Controller;
use App\Models\StudentHabbit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class SocialController extends Controller
{
    public function saveSocial(Request $request)
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

        // Cek apakah sudah check-in bermasyarakat hari ini
        $already = StudentHabbit::where('student_id', $studentId)
            ->where('habbit_id', 6) // ID untuk bermasyarakat
            ->whereDate('date', $today)
            ->exists();

        if ($already) {
            return redirect()->back()->with('error', 'Kamu sudah check-in kegiatan bermasyarakat hari ini.');
        }

        // Simpan foto
        $photoPath = $request->file('photo')->store('habbit_photos', 'public');

        // Simpan ke database
        StudentHabbit::create([
            'student_id' => $studentId,
            'habbit_id'  => 6,
            'date'       => $today,
            'time'       => Carbon::now('Asia/Jakarta')->format('H:i:s'),
            'status'     => 'done',
            'photo_path' => $photoPath,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Check-in Bermasyarakat berhasil disimpan 🤝');
    }
}
