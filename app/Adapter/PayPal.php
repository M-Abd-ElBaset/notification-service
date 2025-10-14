<?php

namespace App\Adapter;

class PayPal implements PaymentServiceInterface
{
    public function processPayment(float $amount): bool
    {
        // Simulate PayPal payment processing logic
        echo "Processing PayPal payment of $$amount\n";
        return true;
    }
}