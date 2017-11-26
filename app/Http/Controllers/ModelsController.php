<?php

namespace App\Http\Controllers;

use App\Services\Contracts\ModelService;
use App\Exceptions\EmptyCarModelsException;

class ModelsController extends Controller
{
    /**
     * @var ModelService
     */
    private $modelService;

    /**
     * ModelsController constructor.
     *
     * @param ModelService $modelService
     */
    public function __construct(ModelService $modelService)
    {
        $this->modelService = $modelService;
    }

    /**
     * Get car models by id.
     *
     * @param $brandId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getModels($brandId)
    {
        try {
            $result = $this->modelService->getModels($brandId);
            return response()->json($result);

        } catch (EmptyCarModelsException $e) {
            return response()->json([
                'error' => [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode()
                ]
            ]);
        }
    }
}