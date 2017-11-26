<?php

namespace App\Services;

use App\Exceptions\EmptyCarModelsException;
use App\Repositories\Contracts\ModelRepository;
use App\Services\Contracts\ModelService as ModelServiceContract;

class ModelService implements ModelServiceContract
{
    /**
     * @var ModelRepository
     */
    private $modelRepository;

    /**
     * ModelService constructor.
     *
     * @param ModelRepository $modelRepository
     */
    public function __construct(ModelRepository $modelRepository)
    {
        $this->modelRepository = $modelRepository;
    }

    /**
     * Get models by brand id.
     *
     * @param $brandId
     * @return mixed
     * @throws EmptyCarModelsException
     */
    public function getModels($brandId)
    {
        $result = $this->modelRepository->getModelsByBrandId($brandId);

        if(is_null($result)) {
            throw new EmptyCarModelsException();
        }

        return $result;
    }
}