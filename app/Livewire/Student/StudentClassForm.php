<?php

namespace App\Livewire\Student;

use App\Models\ClassSchedule;
use App\Models\Student;
use App\Models\StudentClass;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class StudentClassForm extends Component
{
    public $student;
    public $schedule = [];

    public function mount()
    {
        $userId = Auth::id();

        $this->student = Student::where('user_id', $userId)
            ->with('studentClass.schedules')
            ->first();

        
        $this->schedule = $this->student && $this->student->studentClass
            ? $this->student->studentClass->schedules
            : collect();
    }

    public function render()
    {
        return view('livewire.student.student-class-form', [
            'studentClass' => $this->student ? $this->student->studentClass : null,
            'schedules' => $this->schedule
        ]);
    }
}
