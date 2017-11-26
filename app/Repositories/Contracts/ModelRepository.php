<?php

namespace App\Repositories\Contracts;

interface ModelRepository
{
    /**
     * Get car models by brand id.
     *
     * @param $brandId
     * @return mixed
     */
    public function getModelsByBrandId($brandId);
}