<?php

namespace App\Builder;

class NotificationService
{
    public function send(array $data)
    {
        $builder = match ($data['type']) {
            'email'   => new EmailNotificationBuilder(),
            'sms'     => new SmsNotificationBuilder(),
            'webhook' => new WebhookNotificationBuilder(),
        };

        $builder->setRecipient($data['to'])
                ->setBody($data['message'])
                ->setMeta($data['meta'] ?? []);

        if (!empty($data['title'])) {
            $builder->setTitle($data['title']);
        }

        $notification = $builder->build();
        $builder->send();

        return [
            'sent' => true,
            'channel' => $data['type'],
            'to' => $notification->to
        ];
    }
}
