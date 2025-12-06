<?php

namespace App\Builder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|string|in:email,sms,webhook',
            'to' => 'required|string',
            'title' => 'nullable|string',
            'message' => 'required|string',
        ]);

        $service = new NotificationService();
        return $service->send($data);
    }
}
