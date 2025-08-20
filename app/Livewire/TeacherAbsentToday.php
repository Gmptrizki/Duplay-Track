<?php

namespace App\Livewire;

use App\Models\TeacherDuty;
use Carbon\Carbon;
use Livewire\Component;

class TeacherAbsentToday extends Component
{
    public $teachers;
    public $isHoliday = false;

    public function mount()
    {
        $today = $this->getTodayInIndonesian();

        if ($today === 'Libur') {
            $this->isHoliday = true;
            $this->teachers = collect(); // kosongkan list guru
        } else {
            $this->teachers = TeacherDuty::with('teacher')
                ->where('day', $today)
                ->get()
                ->map(function ($duty) {
                    return [
                        'name'    => $duty->teacher->name,
                        'subject' => $duty->teacher->subject,
                    ];
                });
        }
    }

    private function getTodayInIndonesian()
    {
        $hariInggris = Carbon::now()->format('l');

        return match ($hariInggris) {
            'Monday'    => 'Senin',
            'Tuesday'   => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday'  => 'Kamis',
            'Friday'    => 'Jumat',
            'Saturday', 'Sunday' => 'Libur',
            default => 'Libur', 
        };
    }

    public function render()
    {
        return view('livewire.teacher-absent-today', [
            'isHoliday' => $this->isHoliday
        ]);
    }
}
