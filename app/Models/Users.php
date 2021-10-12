<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'Users';
    protected $fillable = [
        'names',
        'surnames',
        'email',
        'address',
        'celphone',
        'country',
        'id_category'
    ];
}