<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $table = 'salary';
    protected $primaryKey = 'salaryID';

    protected $fillable = [
        'teacherID',
        'classID',
        'paymentType',
        'pourcentage',
        'monthlySalary',
        'hourlyWage',
        'salaryDate',
        'isDeleted'
    ];
}
