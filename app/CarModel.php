<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    public function carBrand()
    {
        return $this->belongsTo(CarBrand::class);
    }
}