<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherPayment extends Model
{
    use HasFactory;

    protected $table = 'student_payment';

    protected $fillable = [
        'teacherID',
        'paymentDate',
        'amount',
        'isDeleted'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacherID');
    }
}
