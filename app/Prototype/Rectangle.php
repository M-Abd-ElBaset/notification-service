<?php 

namespace App\Prototype;

class Rectangle extends Shape
{
    protected float $width;
    protected float $length;

    public function __construct(
        Position $position,
        string $borderColor,
        string $color,
        int $borderWidth, 
        float $width,
        float $length)
    {
        parent::__construct($position, $borderColor, $color, $borderWidth);
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function setLength(float $length): void
    {
        $this->length = $length;
    }
}