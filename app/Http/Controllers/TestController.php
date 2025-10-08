<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct(private NotificationService $notificationService)
    {
        
    }

    public function sendNotification(Request $request)
    {
        $data = $request->validate([
            'recipient' => 'required|string',
            'message' => 'required|string'
        ]);

        try {
            $result = $this->notificationService->notify($data['recipient'], $data['message']);
            
            return response()->json([
                'success' => $result,
                'message' => 'Notification sent successfully.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to send notification: ' . $e->getMessage()
            ], 400);
        }

    }
}
