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
        'teacherClassID',
        'classroom',
        'day',
        'startTime',
        'endTime',
        'isDeleted'
    ];

    public function teacherClass()
    {
        return $this->belongsTo(TeacherClass::class, 'teacherClassID');
    }
}
