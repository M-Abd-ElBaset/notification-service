<?php

namespace App\Builder;

use Illuminate\Support\Facades\Mail;

class EmailNotificationBuilder implements NotificationBuilderInterface
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
        $this->notification->title = $title;
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
        Mail::raw($this->notification->body, function ($message) {
            $message->to($this->notification->to)
                    ->subject($this->notification->title ?? 'No Subject');
        });

        return true;
    }
}
