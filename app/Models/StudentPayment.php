<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPayment extends Model
{
    use HasFactory;

    protected $table = 'student_payment';

    protected $fillable = [
        'studentClassID',
        'paymentDate',
        'amount',
        'isPayed',
        'isDeleted'
    ];

    public function studentClass()
    {
        return $this->belongsTo(StudentClass::class, 'studentClassID');
    }
}
