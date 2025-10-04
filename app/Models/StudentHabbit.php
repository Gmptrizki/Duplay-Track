<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentHabbit extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'habbit_id',
        'date',
        'time',
        'status',
        'photo_path',
        'description',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function habbit()
    {
        return $this->belongsTo(SevenHabbit::class, 'habbit_id');
    }
}
