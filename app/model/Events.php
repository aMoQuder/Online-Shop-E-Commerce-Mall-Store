<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [

        'event_img',
        'title',
        'description',
    ];
}
