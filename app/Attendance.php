<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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


    public function insert()
    {

        DB::connection('mysql')->insert("INSERT INTO student_attendance (student_id, lesson_id, status, created_at, updated_at) VALUES (?, ?, ?, ?, ?)",
        [5,3,1,now(),now()]);
    }

    public function edit()
    {
        DB::connection('mysql')->update("UPDATE student_attendance SET STATUS = ? WHERE student_id=?", [3, 5]);
    }
}
