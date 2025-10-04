<?php

namespace App\Livewire\Student\SevenHabits\Point;

use App\Models\StudentHabbit;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class UpEarly extends Component
{
    public function render()
    {
        return view('livewire.student.seven-habits.point.up-early');
    }
}
