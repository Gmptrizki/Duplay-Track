<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    use HasFactory;

    protected $table = 'student_class';

    protected $fillable = ['student_id', 'class'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function schedules()
    {
        return $this->hasMany(ClassSchedule::class, 'class_name', 'class');
    }
}
