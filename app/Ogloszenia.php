<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ogloszenia extends Model
{
    use SoftDeletes;

    public $table = 'ogloszenia';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'temat',
        'wiadomosc',
        'updated_at',
        'deleted_at',
    ];

    
}
