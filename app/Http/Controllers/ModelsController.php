<?php

namespace App\Http\Controllers;

use App\CarModel;

class ModelsController extends Controller
{
    public function getModels($brandId)
    {
        return CarModel::where('brand_id', $brandId)->get();
    }
}