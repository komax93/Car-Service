<?php

namespace App\Repositories\Contracts;

interface BrandRepository
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getCarBrands();
}