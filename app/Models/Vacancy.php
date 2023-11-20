<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $table = 'vacancy';
    protected $fillable = [
        'name',
        'money_min',
        'money_max',
        'city',
        'status',
    ];
}
