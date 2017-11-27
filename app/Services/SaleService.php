<?php

namespace App\Services;

use App\Sale;
use App\Http\Requests\SaveSalesDataRequest;
use App\Exceptions\EmptySummaryDataException;
use App\Repositories\Contracts\SaleRepository;
use App\Services\Contracts\SaleService as SaleServiceContract;

class SaleService implements SaleServiceContract
{
    /**
     * @var SaleRepository
     */
    private $saleRepository;

    /**
     * SaleService constructor.
     *
     * @param SaleRepository $saleRepository
     */
    public function __construct(SaleRepository $saleRepository)
    {
        $this->saleRepository = $saleRepository;
    }

    /**
     * This method save sales data.
     *
     * @param SaveSalesDataRequest $request
     */
    public function saveSalesData(SaveSalesDataRequest $request)
    {
        $attributes = [
            'brand_id' => $request->getBrand(),
            'model_id' => $request->getModel(),
            'count' => $request->getCount(),
            'sale_date' => $request->getDate()
        ];

        $sales = $this->saleRepository->save(new Sale($attributes));
    }

    /**
     * Get summary data.
     *
     * @return mixed
     * @throws EmptySummaryDataException
     */
    public function getSummaryData()
    {
        $result = $this->saleRepository->getSummaryData();

        if(is_null($result)) {
            throw new EmptySummaryDataException();
        }

        return $result;
    }
}