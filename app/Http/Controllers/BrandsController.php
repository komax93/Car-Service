<?php

namespace App\Http\Controllers;

use App\CarBrand;

class BrandsController extends Controller
{
    public function getBrands()
    {
        return CarBrand::all();
    }
}
