<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teacher';
    protected $primaryKey = 'teacherID';

    protected $fillable = [
        'classID',
        'name',
        'email',
        'phoneNumber',
        'avatar',
        'hoursWorked',
        'address',
        'isDeleted'
    ];
}
