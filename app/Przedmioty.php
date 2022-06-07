<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Przedmioty extends Model
{
    use SoftDeletes;

    public $table = 'przedmioty';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    
    protected $fillable = [
        'nazwa',
        'temat',
    ];

   
}
