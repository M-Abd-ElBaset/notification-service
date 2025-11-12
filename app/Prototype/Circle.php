<?php 

namespace App\Prototype;

class Circle extends Shape
{
    protected float $radius;

    public function __construct(
        Position $position,
        string $borderColor,
        string $color,
        int $borderWidth, 
        float $radius)
    {
        parent::__construct($position, $borderColor, $color, $borderWidth);
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }
}