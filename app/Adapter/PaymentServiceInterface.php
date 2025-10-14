<?php

namespace App\Adapter;

interface PaymentServiceInterface
{
    public function processPayment(float $amount): bool;
}