<?php

namespace App\Livewire\Student\SevenHabits\Point;

use Livewire\Component;

class Sport extends Component
{

    public $photo;
    public $description;
    
    public function render()
    {
        return view('livewire.student.seven-habits.point.sport');
    }
}
