<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\StudentClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Student::all();

        foreach ($students as $student) {
            StudentClass::create([
                'student_id' => $student->id,
                'class'      => $student->class
            ]);
        }
    }
}
