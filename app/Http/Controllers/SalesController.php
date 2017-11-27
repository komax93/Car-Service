<?php

namespace App\Http\Controllers;

use App\Services\Contracts\SaleService;
use App\Http\Requests\SaveSalesDataRequest;
use App\Exceptions\EmptySummaryDataException;

class SalesController extends Controller
{
    /**
     * @var SaleService
     */
    private $saleService;

    /**
     * SalesController constructor.
     *
     * @param SaleService $saleService
     */
    public function __construct(SaleService $saleService)
    {
        $this->saleService = $saleService;
    }

    /**
     * Save sales data.
     *
     * @param SaveSalesDataRequest $request
     */
    public function store(SaveSalesDataRequest $request)
    {
        $this->saleService->saveSalesData($request);
    }

    /**
     * Get summary data from controller.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSummaryData()
    {
        try{
            $result = $this->saleService->getSummaryData();
            return response()->json($result);

        } catch (EmptySummaryDataException $e) {
            return response()->json([
                'error' => [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode()
                ]
            ]);
        }
    }
}