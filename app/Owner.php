<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{

    public $guarded = [];

    public function car()
    {
        return $this->hasOne(Car::class);
    }
}
