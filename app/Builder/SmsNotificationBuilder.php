<?php

namespace App\Builder;

use Illuminate\Support\Facades\Http;

class SmsNotificationBuilder implements NotificationBuilderInterface
{
    protected NotificationProduct $notification;

    public function __construct()
    {
        $this->notification = new NotificationProduct();
    }

    public function setRecipient(string $to): self
    {
        $this->notification->to = $to;
        return $this;
    }

    public function setTitle(?string $title): self
    {
        return $this; // not needed for SMS
    }

    public function setBody(string $body): self
    {
        $this->notification->body = $body;
        return $this;
    }

    public function setMeta(array $meta): self
    {
        $this->notification->meta = $meta;
        return $this;
    }

    public function build(): NotificationProduct
    {
        return $this->notification;
    }

    public function send(): bool
    {
        Http::post('https://sms-provider.com/send', [
            'to' => $this->notification->to,
            'message' => $this->notification->body
        ]);

        return true;
    }
}

