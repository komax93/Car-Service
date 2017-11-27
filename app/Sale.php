<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        "brand_id",
        "model_id",
        "count",
        "sale_date"
    ];
}