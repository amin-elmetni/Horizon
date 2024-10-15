<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherPayment extends Model
{
    use HasFactory;

    protected $table = 'teacher_payment';

    protected $fillable = [
        'teacherClassID',
        'paymentDate',
        'amount',
        'isPayed',
        'isDeleted'
    ];

    public function teacherClass()
    {
        return $this->belongsTo(TeacherClass::class, 'teacherClassID');
    }
}
