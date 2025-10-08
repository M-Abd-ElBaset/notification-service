<?php 

namespace App\Services\Notifications;

use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class PushNotification extends Notification
{
    public function send(string $recipient, string $message) : bool
    {
        Log::info('[PUSH] Sending push notification', [
            'device_id' => $recipient,
            'alert' => $message,
            'timestamp' => Carbon::now()->toDateTimeString()
        ]);
        echo "[PUSH] Sending push notification... \n";
        echo " DEVICE ID: $recipient\n";
        echo " Alert: $message\n";
        echo " Timestamp: " . Carbon::now()->toDateTimeString() . " \n";


        $this->status = 'pushed';
        return true;
    }
}