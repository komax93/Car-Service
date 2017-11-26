<?php

namespace App\Services\Contracts;

interface ModelService
{
    /**
     * Get models by brand id.
     *
     * @param $brandId
     * @return mixed
     * @throws EmptyCarModelsException
     */
    public function getModels($brandId);
}