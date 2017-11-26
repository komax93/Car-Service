<?php

namespace App\Services\Contracts;

interface BrandService
{
    /**
     * Get car brands from db.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     * @throws EmptyCarBrandsException
     */
    public function getCarBrands();
}