<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    public $table = 'sale_lekcyjne';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nazwa',
        'updated_at',
        'deleted_at',
    ];
}
