<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function store(Request $request)
    {
        $sale = new Sale();
        $sale->brand_id = $request->brand;
        $sale->model_id = $request->model;
        $sale->count = $request->count;
        $sale->sale_date = $request->date;
        $sale->save();
    }
}
