<?php

namespace App\Adapter;

class Stripe
{
    public function makeCharge(int $valueInCents): bool
    {
        // Simulate Stripe payment processing logic
        $amountInDollars = $valueInCents / 100;
        echo "Processing Stripe payment of $$amountInDollars\n";
        return true;
    }
}