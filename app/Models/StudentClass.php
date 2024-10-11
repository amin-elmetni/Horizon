<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    use HasFactory;

    protected $table = 'student_class';
    protected $fillable = [
        'studentID',
        'classID',
        'teacherID',
        'discount',
        'amount',
        'paymentDate',
        'isDeleted'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'studentID');
    }

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'classID');
    }
}
