<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            ['code' => 'K0', 'name' => 'MUH TAUFIQ SALYONO, S.Pd., M.Pd.Si.', 'subject' => 'Kepala Sekolah/WKMA'],
            ['code' => 'A1', 'name' => 'SUGIYONO, S.Ag. MA', 'subject' => 'Agama Islam'],
            ['code' => 'A2', 'name' => 'DENI RAHMAWATI, S.Pd.I.', 'subject' => 'Agama'],
            ['code' => 'A3', 'name' => 'UMMI HUSNURROHMAH, S.Pd.I', 'subject' => 'Agama Islam'],
            ['code' => 'A4', 'name' => 'YUSTINE, S.Ag', 'subject' => 'Agama'],
            ['code' => 'A5', 'name' => 'NARPOL INDRA PIKI, S.Pd', 'subject' => 'Agama'],
            ['code' => 'A6', 'name' => 'SARDI, S.Pd.H', 'subject' => 'Agama Hindu'],
            ['code' => 'B1', 'name' => 'AMIN SABARTI, S.Pd, M.Pd', 'subject' => 'PKN'],
            ['code' => 'B2', 'name' => 'BETI TRIWAHYUNI, S.Pd, M.Pd', 'subject' => 'PKN'],
            ['code' => 'C1', 'name' => 'SUGITO, S.Pd.', 'subject' => 'Bahasa Indonesia'],
            ['code' => 'C2', 'name' => 'RETNO UTAMIYATI, M.Pd', 'subject' => 'Bahasa Indonesia'],
            ['code' => 'C3', 'name' => 'ANJAR ARDYANI, S.Pd.', 'subject' => 'Bahasa Indonesia'],
            ['code' => 'D1', 'name' => 'PAULUS SUROSO, S.Pd', 'subject' => 'Matematika'],
            ['code' => 'D2', 'name' => 'SARI WAHYUNINGSIH, S.Pd.Si', 'subject' => 'Matematika'],
            ['code' => 'D3', 'name' => 'IMRAATUN AKHLAQUL K., S.Pd.Si', 'subject' => 'Matematika'],
            ['code' => 'D4', 'name' => 'AHMAD NAFI’I KHALIM, M.Pd', 'subject' => 'Matematika'],
            ['code' => 'E1', 'name' => 'Dra. ASRI SYAMSIYAH', 'subject' => 'Sejarah'],
            ['code' => 'E2', 'name' => 'ARY ANJARWATI, M.Pd.', 'subject' => 'Sejarah'],
            ['code' => 'F1', 'name' => 'CHATARINA CATUR ANI T., M.Pd', 'subject' => 'Bahasa Inggris'],
            ['code' => 'F2', 'name' => 'WIWIK INDARWATI, M.Pd', 'subject' => 'Bahasa Inggris'],
            ['code' => 'F3', 'name' => 'BETTY SEKARASIH HADIYANI, M.Pd.B.I', 'subject' => 'Bahasa Inggris'],
            ['code' => 'F4', 'name' => 'RAHMAT SUARDI, S.Pd.Gr', 'subject' => 'Bahasa Inggris'],
            ['code' => 'G1', 'name' => 'Drs. MUKAYAT', 'subject' => 'Seni Budaya'],
            ['code' => 'G2', 'name' => 'ANA AMIN LESTARI, S.Pd', 'subject' => 'Seni Budaya'],
            ['code' => 'H1', 'name' => 'HARJONO, S.Pd', 'subject' => 'PJOK'],
            ['code' => 'H2', 'name' => 'GIRI HENDRA PERMANA, S.Pd', 'subject' => 'PJOK'],
            ['code' => 'I1', 'name' => 'IMAM MUSHODO, S.P.', 'subject' => 'PKWU'],
            ['code' => 'I2', 'name' => 'HERYANTI, S.Pd.', 'subject' => 'PKWU'],
            ['code' => 'J1', 'name' => 'RAHAJENG BERLIANINGTYAS, S.Pd', 'subject' => 'Bahasa Jawa'],
            ['code' => 'J2', 'name' => 'RENDY HENDRAJAYA SURYONO, S.Pd', 'subject' => 'Bahasa Jawa'],
            ['code' => 'K1', 'name' => 'DANGIN, S.Pd', 'subject' => 'Fisika'],
            ['code' => 'K2', 'name' => 'ANDI RAHAYU RACHMAN, S.Pd.Si', 'subject' => 'Fisika'],
            ['code' => 'L1', 'name' => 'ANNA FITRIANINGSIH, S.Si., M.B.A', 'subject' => 'Biologi'],
            ['code' => 'L2', 'name' => 'LASTINI, S.Pd.', 'subject' => 'Biologi'],
            ['code' => 'L3', 'name' => 'NURUL QOMARIYAH, S.Pd', 'subject' => 'Biologi'],
            ['code' => 'M1', 'name' => 'RINI SULISTYOWATI, S.Pd.', 'subject' => 'Kimia'],
            ['code' => 'M2', 'name' => 'UNTUNG SURASA, S.Pd', 'subject' => 'Kimia'],
            ['code' => 'N1', 'name' => 'UMAR SAMSI TRI ATMAJA, S.Pd', 'subject' => 'Geografi'],
            ['code' => 'N2', 'name' => 'ANITA LISTYANTI, S.Pd', 'subject' => 'Geografi'],
            ['code' => 'O1', 'name' => 'SARTONO, S.Pd.', 'subject' => 'Ekonomi'],
            ['code' => 'O2', 'name' => 'MEGA AYU ANDIKA, S.Pd.', 'subject' => 'Ekonomi'],
            ['code' => 'P1', 'name' => 'AR. MAHDI DARUSSALAM, S.Pd', 'subject' => 'Sosiologi'],
            ['code' => 'P2', 'name' => 'SUYIN DIAS SANTI, S.Pd', 'subject' => 'Sosiologi'],
            ['code' => 'P3', 'name' => 'SEPTIANA TRI UTAMI, S.Pd.', 'subject' => 'Sosiologi'],
            ['code' => 'Q1', 'name' => 'ENDAH SUSANTI, S.Kom', 'subject' => 'Informatika'],
            ['code' => 'Q2', 'name' => 'GEMPITA RIZKI RAMADHAN, S.Kom', 'subject' => 'Informatika'],
            ['code' => 'R1', 'name' => 'Dra SRI ENDANG EKOWATI W.', 'subject' => 'BK'],
            ['code' => 'R2', 'name' => 'HARDI WARDHANI, S.Pd', 'subject' => 'BK'],
            ['code' => 'R3', 'name' => 'ANISA CONY PUSPITASARI, S.Psi', 'subject' => 'BK'],
            ['code' => 'R4', 'name' => 'FERMA ARIYA EDI WICAKSONO, S.Pd', 'subject' => 'BK'],
        ];

        foreach ($teachers as $teacher) {
            $nameForEmail = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', explode(',', $teacher['name'])[0]));
            $email = $nameForEmail . '@gmail.com';

            $user = User::create([
                'name' => $teacher['name'],
                'email' => $email,
                'password' => Hash::make('password'),
                'role' => 'guru',
            ]);

            Teacher::firstOrCreate(
                ['code' => $teacher['code']],
                [
                    'user_id' => $user->id,
                    'name'    => $teacher['name'],
                    'subject' => $teacher['subject'],
                ]
            );
        }
    }
}
