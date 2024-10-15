<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;


    protected $table = 'class';
    protected $primaryKey = 'classID';

    protected $fillable = [
        'className',
        'description',
        'price',
        'grade',
        'isDeleted'
    ];


    // * return a collection of teacherClass for teachers of the same class
    public function teachersClass()
    {
        return $this->hasMany(TeacherClass::class, 'classID');
    }

    // * return a collection of studentClass for students of the same class
    public function studentsClass()
    {
        return $this->hasManyThrough(StudentClass::class, TeacherClass::class, 'classID', 'teacherClassID', 'classID', 'id');
    }

    // * return a collection of sessions for teacherClasses of the same class
    public function sessions()
    {
        return $this->hasManyThrough(Session::class, TeacherClass::class, 'classID', 'teacherClassID', 'classID', 'id');
    }
}
