<?php

namespace App\Services;

use App\Exceptions\EmptyCarBrandsException;
use App\Repositories\Contracts\BrandRepository;
use App\Services\Contracts\BrandService as BrandServiceContract;

class BrandService implements BrandServiceContract
{
    /**
     * @var BrandRepository
     */
    private $brandRepository;

    /**
     * BrandService constructor.
     *
     * @param BrandRepository $brandRepository
     */
    public function __construct(BrandRepository $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    /**
     * Get car brands from db.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     * @throws EmptyCarBrandsException
     */
    public function getCarBrands()
    {
        $result = $this->brandRepository->getCarBrands();

        if(is_null($result)) {
            throw new EmptyCarBrandsException();
        }

        return $result;
    }
}