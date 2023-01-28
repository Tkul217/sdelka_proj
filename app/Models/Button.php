<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    protected $table = 'buttons';

    protected $fillable = [
        'button_name',
        'slider_id',
    ];
}
