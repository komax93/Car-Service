<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    public function carModel()
    {
        $this->hasOne(CarModel::class);
    }
}