<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SevenHabbit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function studentHabbits()
    {
        return $this->hasMany(StudentHabbit::class, 'habbit_id');
    }
}
