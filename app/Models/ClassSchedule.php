<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name',
        'day',
        'code',
        'period'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'code', 'code');
    }
}
