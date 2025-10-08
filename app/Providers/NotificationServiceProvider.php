<?php

namespace App\Providers;

use App\Services\NotificationService;
use App\Services\PushNotificationService;

class NotificationServiceProvider extends AppServiceProvider
{
    public function register() : void
    {
        $this->app->singleton(NotificationService::class, function ($app){
            return $app->make(PushNotificationService::class);
        });
    }
}