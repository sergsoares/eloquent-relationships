<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jewel extends Model
{

    public $guarded = [];

    public function thief()
    {
        return $this->belongsTo(Thief::class);
    }
}
