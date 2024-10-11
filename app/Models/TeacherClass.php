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
        'paymentType',
        'amount',
        'salaryDate',
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
}
