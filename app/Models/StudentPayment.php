<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPayment extends Model
{
    use HasFactory;

    protected $table = 'student_payment';

    protected $fillable = [
        'studentID',
        'paymentDate',
        'amount',
        'isDeleted'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'studentID');
    }
}
