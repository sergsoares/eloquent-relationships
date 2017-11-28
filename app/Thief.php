<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thief extends Model
{

    public $guarded = [];

    public function jewels()
    {
        return $this->hasMany(Jewel::class);
    }
}
