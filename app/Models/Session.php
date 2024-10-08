<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $table = 'session';
    protected $primaryKey = 'sessionID';

    protected $fillable = [
        'classID',
        'teacherID',
        'classroom',
        'day',
        'startTime',
        'endTime',
        'isDeleted'
    ];
}
