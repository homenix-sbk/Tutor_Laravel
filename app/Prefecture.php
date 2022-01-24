<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    protected $table = 'prefectures';

    Protected $guarded = ['id'];

    public $timestamps = true;

}
