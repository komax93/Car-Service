<?php

namespace App\Repositories;

use App\CarModel;
use App\Repositories\Contracts\ModelRepository as ModelRepositoryContract;

class ModelRepository implements ModelRepositoryContract
{
    /**
     * Get car models by brand id.
     *
     * @param $brandId
     * @return mixed
     */
    public function getModelsByBrandId($brandId)
    {
        return CarModel::where('brand_id', $brandId)->get();
    }
}