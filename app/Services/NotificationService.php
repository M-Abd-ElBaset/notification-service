<?php

namespace App\Services;

use App\Services\Notifications\Notification;

abstract class NotificationService
{
    abstract public function createNotification() : Notification;

    public function notify(string $recipent, string $message) : void
    {
        $notification = $this->createNotification();
        $notification->send($recipent, $message);
        echo " Notification Status: " . $notification->getStatus() . " \n\n";
    }
}