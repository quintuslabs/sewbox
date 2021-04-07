<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'title', 'logo', 'mini_logo', 'fav_icon'
    ];
}
