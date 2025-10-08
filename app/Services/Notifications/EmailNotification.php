<?php

namespace App\Services\Notifications;

use Illuminate\Support\Facades\Log;

class EmailNotification extends Notification
{
    public function send(string $recipient, string $message) : bool
    {
        Log::info('[EMAIL] Sending email notification', [
            'to' => $recipient,
            'subject' => 'Notification',
            'body' => $message,
            'timestamp' => now()->toDateTimeString()
        ]);

        echo "[EMAIL] Sending email notification... \n";
        echo " To: $recipient \n";
        echo " Subject: Notification \n";
        echo " Body: $message \n";
        echo " Timestamp: " . now()->toDateTimeString() . " \n";

        $this->status = 'delivered';
        
        return true;
    }
}