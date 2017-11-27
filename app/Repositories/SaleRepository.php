<?php

namespace App\Repositories;

use App\Repositories\Contracts\SaleRepository as SaleRepositoryContract;
use App\Sale;

class SaleRepository implements SaleRepositoryContract
{
    /**
     * Save data.
     *
     * @param Sale $sale
     * @return bool
     */
    public function save(Sale $sale)
    {
        return $sale->save();
    }

    /**
     * Get summary data collections.
     *
     * @return mixed
     */
    public function getSummaryData()
    {
        return \DB::table('sales')
            ->selectRaw('sales.sale_date sale_date, car_brands.name brand_name, car_models.name model_name, SUM(sales.count) sum')
            ->join('car_brands', 'sales.brand_id', 'car_brands.id')
            ->join('car_models', 'sales.model_id', 'car_models.id')
            ->groupBy('sale_date')
            ->groupBy('brand_name')
            ->groupBy('model_name')
            ->get();
    }
}