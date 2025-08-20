<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClassScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjectCodes = [
            ['Senin', 'XA', ['F4', 'F4', 'F4', 'Q1', 'Q1', 'A2', 'A5', 'A2', 'A5']],
            ['Senin', 'XB', ['D4', 'D4', 'D4', 'G1', 'G1', 'Q2', 'Q2']],
            ['Senin', 'XC', ['Q1', 'Q1', 'L3', 'L3', 'M1', 'D4', 'D4']],
            ['Senin', 'XD', ['M1', 'M1', 'O2', 'O2', 'K1', 'C2', 'C2']],
            ['Senin', 'XE', ['C2', 'C2', 'C2', 'N2', 'N2', 'P2', 'K1', 'K1']],
            ['Senin', 'XF', ['G1', 'G1', 'D3', 'D3', 'D3', 'O2', 'N2', 'N2']],
            ['Senin', 'XG', ['K1', 'K1', 'P2', 'P2', 'L2', 'D3', 'D3']],

            // Selasa
            ['Selasa', 'XA', ['L1', 'L1', 'J1', 'J1', 'K2', 'K2', 'N1', 'N1', 'KO', 'KO']],
            ['Selasa', 'XB', ['K2', 'K2', 'A2', 'A4', 'A2', 'A4', 'N1', 'N1', 'L1', 'L1', 'KO', 'KO']],
            ['Selasa', 'XC', ['C1', 'C1', 'C1', 'F4', 'F4', 'F4', 'K2', 'K2', 'KO', 'KO']],
            ['Selasa', 'XD', ['Q2', 'Q2', 'N2', 'N2', 'Q1', 'Q1', 'L3', 'L3', 'KO', 'KO']],
            ['Selasa', 'XE', ['M2', 'M2', 'E2', 'E2', 'G1', 'G1', 'Q1', 'Q1', 'KO', 'KO']],
            ['Selasa', 'XF', ['E2', 'E2', 'K1', 'K1', 'M2', 'M2', 'Q2', 'Q2', 'KO', 'KO']],
            ['Selasa', 'XG', ['N2', 'N2', 'M2', 'M2', 'A2', 'A2', 'G1', 'G1', 'KO', 'KO']],

            // Rabu
            ['Rabu', 'XA', ['E1', 'E1', 'G1', 'G1', 'H1', 'H1', 'B2', 'B2', 'KO', 'KO']],
            ['Rabu', 'XB', ['J1', 'J1', 'C1', 'C1', 'C1', 'F4', 'F4', 'F4', 'KO', 'KO']],
            ['Rabu', 'XC', ['P3', 'P3', 'H1', 'H1', 'B2', 'B2', 'G1', 'G1', 'KO', 'KO']],
            ['Rabu', 'XD', ['H1', 'H1', 'P3', 'P3', 'G1', 'G1', 'J1', 'J1', 'KO', 'KO']],
            ['Rabu', 'XE', ['H2', 'H2', 'F4', 'F4', 'F4', 'D3', 'D3', 'D3', 'KO', 'KO']],
            ['Rabu', 'XF', ['B2', 'B2', 'H2', 'H2', 'J2', 'J2', 'D4', 'D4', 'KO', 'KO']],
            ['Rabu', 'XG', ['D4', 'D4', 'E2', 'E2', 'H2', 'H2', 'J2', 'J2', 'KO', 'KO']],

            // Kamis
            ['Kamis', 'XA', ['D4', 'D4', 'D4', 'C1', 'C1', 'C1', 'KO', 'KO', 'KO', 'KO']],
            ['Kamis', 'XB', ['E1', 'E1', 'H1', 'H1', 'B2', 'B2', 'KO', 'KO', 'KO', 'KO']],
            ['Kamis', 'XC', ['J1', 'J1', 'E1', 'E1', 'Q2', 'KO', 'KO', 'KO', 'KO']],
            ['Kamis', 'XD', ['B2', 'B2', 'A2', 'A5', 'A2', 'A5', 'E1', 'E1', 'KO', 'KO', 'KO', 'KO']],
            ['Kamis', 'XE', ['Q2', 'Q2', 'B2', 'B2', 'J1', 'J1', 'KO', 'KO', 'KO', 'KO']],
            ['Kamis', 'XF', ['C2', 'C2', 'C2', 'F4', 'F4', 'F4', 'KO', 'KO', 'KO', 'KO']],
            ['Kamis', 'XG', ['F4', 'F4', 'F4', 'C2', 'C2', 'C2', 'KO', 'KO', 'KO', 'KO']],

            // Jumat
            ['Jumat', 'XA', ['M1', 'M1', 'P1', 'P1', 'KO', 'Q2', 'Q2', 'J1']],
            ['Jumat', 'XB', ['O1', 'O1', 'M1', 'M1', 'KO', 'P1', 'P1', 'O1']],
            ['Jumat', 'XC', ['A2', 'A4', 'A5', 'A2', 'A4', 'A5', 'N2', 'N2', 'KO', 'O1', 'O1', 'M1']],
            ['Jumat', 'XD', ['F4', 'O2', 'F4', 'D4', 'KO', 'D4', 'D4', 'L3']],
            ['Jumat', 'XE', ['O2', 'L2', 'A2', 'A2', 'KO', 'L2', 'L2', 'L2']],
            ['Jumat', 'XF', ['L2', 'B2', 'P2', 'P2', 'KO', 'A2', 'A2', 'N2']],
            ['Jumat', 'XG', ['B2', 'B2', 'Q2', 'Q2', 'KO', 'O2', 'O2', 'A2']],
        ];

        foreach ($subjectCodes as [$day, $class, $codes]) {
            foreach ($codes as $index => $code) {
                DB::table('class_schedules')->insert([
                    'class_name' => $class,
                    'day'        => $day,
                    'code'       => $code,
                    'period'     => $index + 1, // Jam ke-1, ke-2, dst
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
