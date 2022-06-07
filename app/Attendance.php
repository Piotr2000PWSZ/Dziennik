<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    public $table = 'student_attendance';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'student_id',
        'lesson_id',
        'status',
    ];
}
