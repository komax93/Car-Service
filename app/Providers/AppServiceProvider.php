<?php

namespace App\Providers;

use App\Services\SaleService;
use App\Services\BrandService;
use App\Services\ModelService;
use App\Repositories\SaleRepository;
use App\Repositories\BrandRepository;
use App\Repositories\ModelRepository;
use Illuminate\Support\ServiceProvider;
use App\Services\Contracts\SaleService as SaleServiceContract;
use App\Services\Contracts\BrandService as BrandServiceContract;
use App\Services\Contracts\ModelService as ModelServiceContract;
use App\Repositories\Contracts\SaleRepository as SaleRepositoryContract;
use App\Repositories\Contracts\BrandRepository as BrandRepositoryContract;
use App\Repositories\Contracts\ModelRepository as ModelRepositoryContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BrandRepositoryContract::class, BrandRepository::class);
        $this->app->bind(BrandServiceContract::class, BrandService::class);
        $this->app->bind(ModelRepositoryContract::class, ModelRepository::class);
        $this->app->bind(ModelServiceContract::class, ModelService::class);
        $this->app->bind(SaleRepositoryContract::class, SaleRepository::class);
        $this->app->bind(SaleServiceContract::class, SaleService::class);
    }
}
