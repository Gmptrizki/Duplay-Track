<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'nisn',
        'class',
        'gender',
        'religion',
        'address',
        'phone_number',
        'birth_date',
        'profile_photo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function studentClass()
    {
        return $this->hasOne(StudentClass::class);
    }

    public function schedules()
    {
        return $this->hasMany(ClassSchedule::class, 'class_name', 'class_name');
    }
}
