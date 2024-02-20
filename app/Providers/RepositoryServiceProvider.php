<?php

namespace App\Providers;

use App\Repositories\Read\Product\ProductReadRepository;
use App\Repositories\Read\Product\ProductReadRepositoryInterface;
use App\Repositories\Read\User\UserReadRepository;
use App\Repositories\Read\User\UserReadRepositoryInterface;
use App\Repositories\Write\Products\ProductWriteRepository;
use App\Repositories\Write\Products\ProductWriteRepositoryInterface;
use App\Repositories\Write\User\UserWriteRepository;
use App\Repositories\Write\User\UserWriteRepositoryInterface;
use Carbon\Laravel\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register():void
    {
        $this->app->bind(
            UserReadRepositoryInterface::class,
            UserReadRepository::class
        );

        $this->app->bind(
            UserWriteRepositoryInterface::class,
            UserWriteRepository::class
        );
        $this->app->bind(
            ProductWriteRepositoryInterface::class,
            ProductWriteRepository::class
        );
        $this->app->bind(
            ProductReadRepositoryInterface::class,
            ProductReadRepository::class
        );
    }
}
