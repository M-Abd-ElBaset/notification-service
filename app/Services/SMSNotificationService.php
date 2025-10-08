<?php

namespace App\Services;

use App\Services\Notifications\Notification;
use App\Services\Notifications\SMSNotification;

class SMShNotificationService extends NotificationService
{
    public function createNotification(): Notification
    {
        return new SMSNotification;
    }
}