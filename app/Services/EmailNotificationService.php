<?php

namespace App\Services;

use App\Services\Notifications\EmailNotification;
use App\Services\Notifications\Notification;

class EmailNotificationService extends NotificationService
{
    public function createNotification() : Notification
    {
        return new EmailNotification;
    }
}