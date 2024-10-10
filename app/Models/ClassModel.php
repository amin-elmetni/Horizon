<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;


    protected $table = 'class';
    protected $primaryKey = 'classID';

    protected $fillable = [
        'className',
        'description',
        'price',
        'grade',
        'isDeleted'
    ];

    public function payments()
    {
        return $this->hasMany(Payment::class, 'classID');
    }

    public function salaries()
    {
        return $this->hasMany(Salary::class, 'classID');
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class, 'classID');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'classID');
    }

    public function sessions()
    {
        return $this->hasMany(Session::class, 'classID');
    }
}
