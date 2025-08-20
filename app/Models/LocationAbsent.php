<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocationAbsent extends Model
{
    public function absentsIn()
    {
        return $this->hasMany(StudentAbsent::class, 'location_in_id');
    }

    public function absentsOut()
    {
        return $this->hasMany(StudentAbsent::class, 'location_out_id');
    }
}
