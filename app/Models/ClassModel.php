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

    public function studentsClass()
    {
        return $this->hasMany(StudentClass::class, 'classID');
    }

    public function teachersClass()
    {
        return $this->hasMany(TeacherClass::class, 'classID');
    }
    public function sessions()
    {
        return $this->hasMany(Session::class, 'classID');
    }
}
