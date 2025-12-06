<?php

namespace App\Builder;

use Illuminate\Support\Facades\Http;

class WebhookNotificationBuilder implements NotificationBuilderInterface
{
    protected NotificationProduct $notification;

    public function __construct()
    {
        $this->notification = new NotificationProduct();
    }

    public function setRecipient(string $url): self
    {
        $this->notification->to = $url;
        return $this;
    }

    public function setTitle(?string $title): self
    {
        return $this;
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
        Http::post($this->notification->to, [
            ...$this->notification->meta,
            'message' => $this->notification->body
        ]);

        return true;
    }
}


