<?php

namespace App\Http\Controllers;

use App\Services\Contracts\BrandService;
use App\Exceptions\EmptyCarBrandsException;

class BrandsController extends Controller
{
    /**
     * @var BrandService
     */
    private $brandService;

    /**
     * BrandsController constructor.
     *
     * @param BrandService $brandService
     */
    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }

    /**
     * Get all brands.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getBrands()
    {
        try {
            $result = $this->brandService->getCarBrands();
            return response()->json($result);

        } catch (EmptyCarBrandsException $e) {
            return response()->json([
                'error' => [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode()
                ]
            ]);
        }
    }
}
