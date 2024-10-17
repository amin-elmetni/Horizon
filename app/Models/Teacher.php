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

    // * return a collection of classes for a teacher 
    public function classes()
    {
        return $this->hasManyThrough(ClassModel::class, TeacherClass::class, 'teacherID', 'classID', 'teacherID', 'classID');
    }

    public function teacherClasses()
    {
        return $this->hasMany(TeacherClass::class, 'teacherID');
    }

    public function studentsClasses()
    {
        return $this->hasManyThrough(StudentClass::class, TeacherClass::class, 'teacherID', 'teacherClassID', 'teacherID', 'id');
    }
}
