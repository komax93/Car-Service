<?php

namespace App\Http\Controllers;

use App\Brand;

class BrandsController extends Controller
{
    public function getBrands()
    {
        return Brand::all();
    }
}
