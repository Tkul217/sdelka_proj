<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    protected $table = 'consumers';

    protected $fillable = [
        'name',
        'phone',
        'role',
        'avatar',
        'work_experience',
    ];
}
