<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'subject',
        'phone',
        'code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dutySchedules()
    {
        return $this->hasMany(TeacherDuty::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
