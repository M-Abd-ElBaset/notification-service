<?php

namespace App\Services;

use App\Services\Notifications\Notification;
use App\Services\Notifications\PushNotification;

class PushNotificationService extends NotificationService
{
    public function createNotification() : Notification
    {
        return new PushNotification;
    }
}