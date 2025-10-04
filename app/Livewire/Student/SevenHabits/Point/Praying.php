<?php

namespace App\Livewire\Student\SevenHabits\Point;

use App\Models\StudentHabbit;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Praying extends Component
{
    public function render()
    {
        $user = Auth::user();
        $alreadyCheckedIn = false;

        if ($user->student) {
            $today = Carbon::now('Asia/Jakarta')->toDateString();
            $alreadyCheckedIn = StudentHabbit::where('student_id', $user->student->id)
                ->where('habbit_id', 2) 
                ->whereDate('date', $today)
                ->exists();
        }

        return view('livewire.student.seven-habits.point.praying', [
            'alreadyCheckedIn' => $alreadyCheckedIn
        ]);
    }
}
