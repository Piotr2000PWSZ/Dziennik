<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\SchoolClass;
use App\Role;
use App\Lesson;

class Ocena extends Model
{
    use SoftDeletes;

    public $table = 'oceny';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ocena',
        'updated_at',
        'deleted_at',
    ];

    function class()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function teacherLessons()
    {
        return $this->hasMany(Lesson::class, 'teacher_id', 'id');
    }
}
