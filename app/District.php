<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';

    Protected $guarded = ['id'];

    public $timestamps = true;

    Public function getName()
    {
        return $this->name;
    }
}
