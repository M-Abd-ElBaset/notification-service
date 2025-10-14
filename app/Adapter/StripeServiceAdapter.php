<?php

namespace App\Adapter;

class StripeServiceAdapter implements PaymentServiceInterface
{
    protected Stripe $stripe;

    public function __construct(Stripe $stripe)
    {
        $this->stripe = $stripe;
    }

    public function processPayment(float $amount): bool
    {
        $amountInCents = (int)($amount * 100);
        return $this->stripe->makeCharge($amountInCents);
    }
}