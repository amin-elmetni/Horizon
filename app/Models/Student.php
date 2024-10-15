<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';
    protected $primaryKey = 'studentID';

    protected $fillable = [
        'name',
        'email',
        'phoneNumber',
        'avatar',
        'isDeleted'
    ];

    public function studentClasses()
    {
        return $this->hasMany(TeacherClass::class, 'studentID');
    }
}
