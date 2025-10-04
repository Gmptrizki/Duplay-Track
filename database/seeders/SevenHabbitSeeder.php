<?php

namespace Database\Seeders;

use App\Models\SevenHabbit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SevenHabbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $habbits = [
            ['name' => 'Bangun Pagi', 'description' => 'Check-in jam bangun tidur siswa'],
            ['name' => 'Beribadah', 'description' => 'Checklist ibadah harian'],
            ['name' => 'Berolahraga', 'description' => 'Foto dan keterangan olahraga'],
            ['name' => 'Makan Sehat', 'description' => 'Foto makanan sehat'],
            ['name' => 'Gemar Belajar', 'description' => 'Foto buku dan rangkuman singkat'],
            ['name' => 'Bermasyarakat', 'description' => 'Foto kegiatan sosial'],
            ['name' => 'Tidur Cepat', 'description' => 'Check-in jam tidur siswa'],
        ];

        foreach ($habbits as $habbit) {
            SevenHabbit::create($habbit);
        }
    }
}
