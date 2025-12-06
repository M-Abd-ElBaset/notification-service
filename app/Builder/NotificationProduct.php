<?php

namespace App\Builder;

class NotificationProduct
{
    public string $to;
    public ?string $title = null;
    public string $body;
    public array $meta = [];
}
