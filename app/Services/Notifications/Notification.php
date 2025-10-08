<?php

namespace App\Services\Notifications;

abstract class Notification
{
    protected string $status = 'pending';

    abstract public function send(string $recipient, string $message) : bool;

    public function getStatus() : string
    {
        return $this->status;
    }
}