<?php

namespace App\Repositories\Contracts;

use App\Sale;

interface SaleRepository
{
    /**
     * Save data.
     *
     * @param Sale $sale
     * @return mixed
     */
    public function save(Sale $sale);

    /**
     * Get summary data collections.
     *
     * @return mixed
     */
    public function getSummaryData();
}