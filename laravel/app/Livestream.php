<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livestream extends Model
{
    //
    protected $fillable = ['name', 'slug', 'yt_url','start_time', 'end_time'];
}
