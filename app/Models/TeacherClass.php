<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherClass extends Model
{
    use HasFactory;

    protected $table = 'teacher_class';

    protected $fillable = [
        'teacherID',
        'classID',
        'amount',
        'enrolmentDate',
        'isDeleted'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacherID');
    }

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'classID');
    }

    public function sessions()
    {
        return $this->hasMany(Session::class, 'teacherClassID');
    }

    // * return a collection of studentClass for students of the same teacherClass
    public function studentsClass()
    {
        return $this->hasMany(StudentClass::class, 'teacherClassID');
    }

    // * return a collection of students of the same teacherClass
    public function students()
    {
        return $this->hasManyThrough(Student::class, StudentClass::class, 'teacherClassID', 'studentID', 'id', 'studentID');
    }
}
