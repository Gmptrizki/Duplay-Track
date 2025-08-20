<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\TeacherDuty;

class TeacherDutySeeder extends Seeder
{
    public function run(): void
    {
        $duties = [
            'Senin'  => ['D4', 'L1', 'L2', 'L3', 'M1', 'M2', 'N1', 'N2', 'R3'],
            'Selasa' => ['D3', 'F1', 'F4', 'I2', 'O1', 'O2', 'P1', 'P2', 'Q2', 'R1'],
            'Rabu'   => ['A2', 'C1', 'C2', 'C3', 'D1', 'G2', 'J1', 'J2', 'R2'],
            'Kamis'  => ['A1', 'A3', 'B1', 'E2', 'G1', 'H1', 'H2', 'P3', 'R4'],
            'Jumat'  => ['A4', 'A5', 'D2', 'E1', 'F2', 'K1', 'Q1'],
        ];

        foreach ($duties as $day => $codes) {
            foreach ($codes as $code) {
                $teacher = Teacher::where('code', $code)->first();

                if (!$teacher) {
                    $this->command->warn("Guru dengan kode {$code} tidak ditemukan, jadwal hari {$day} dilewati.");
                    continue;
                }

                TeacherDuty::create([
                    'teacher_id' => $teacher->id,
                    'day' => $day,
                ]);
            }
        }

        $this->command->info('Seeding TeacherDuty selesai dengan pengecekan kode guru.');
    }
}
