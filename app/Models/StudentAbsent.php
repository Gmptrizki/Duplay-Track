<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAbsent extends Model
{
    public function locationIn()
    {
        return $this->belongsTo(LocationAbsent::class, 'location_in_id');
    }

    public function locationOut()
    {
        return $this->belongsTo(LocationAbsent::class, 'location_out_id');
    }
}
