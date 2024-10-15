<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teacher';
    protected $primaryKey = 'teacherID';

    protected $fillable = [
        'name',
        'email',
        'phoneNumber',
        'gender',
        'avatar',
        'isDeleted'
    ];

    public function teacherClasses()
    {
        return $this->hasMany(TeacherClass::class, 'teacherID');
    }

    public function students()
    {
        return $this->hasManyThrough(Student::class, StudentClass::class, 'teacherClassID', 'studentID', 'teacherID', 'studentID');
    }
}
