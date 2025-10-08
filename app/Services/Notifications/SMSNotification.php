<?php

namespace App\Services\Notifications;

use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class SMSNotification extends Notification
{
    public function send(string $recipient, string $message) : bool
    {
        Log::info('[SMS] Sending sms notification', [
            'to' => $recipient,
            'message' => $message,
            'timestamp' => Carbon::now()->toDateTimeString()
        ]);

        echo "[SMS] Sending sms notification...\n";
        echo " To: $recipient \n";
        echo " Message: $message \n";
        echo " Timestamp: " . Carbon::now()->toDateTimeString() . " \n";
        
        $this->status = 'sent';
        return true;
    }
}