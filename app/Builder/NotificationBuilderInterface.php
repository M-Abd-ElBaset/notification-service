<?php

namespace App\Builder;

use App\Builder\NotificationProduct;

interface NotificationBuilderInterface
{
    public function setRecipient(string $to): self;
    public function setTitle(?string $title): self;
    public function setBody(string $body): self;
    public function setMeta(array $meta): self;

    public function build(): NotificationProduct;
    public function send(): bool;
}