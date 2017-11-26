<?php

namespace App\Repositories;

use App\CarBrand;
use App\Repositories\Contracts\BrandRepository as BrandRepositoryContract;

class BrandRepository implements BrandRepositoryContract
{
    /**
     * Get car brands collections.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getCarBrands()
    {
        return CarBrand::all();
    }
}