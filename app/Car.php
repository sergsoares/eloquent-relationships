<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    public $guarded = [];    

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
