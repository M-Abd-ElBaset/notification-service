<?php

namespace App\Providers;

use App\Adapter\PaymentServiceInterface;
use App\Adapter\StripeServiceAdapter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentServiceInterface::class, function ($app){
            return $app->make(StripeServiceAdapter::class);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
