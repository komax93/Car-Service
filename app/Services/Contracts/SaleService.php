<?php

namespace App\Services\Contracts;

use App\Http\Requests\SaveSalesDataRequest;

interface SaleService
{
    /**
     * This method save sales data.
     *
     * @param SaveSalesDataRequest $request
     */
    public function saveSalesData(SaveSalesDataRequest $request);

    /**
     * Get summary data.
     *
     * @return mixed
     * @throws EmptySummaryDataException
     */
    public function getSummaryData();
}