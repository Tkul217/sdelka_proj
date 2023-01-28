<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $table = 'apartments';

    protected $fillable = [
        'title',
        'description',
        'salary',
        'image',
        'link',
        'type',
    ];
}
