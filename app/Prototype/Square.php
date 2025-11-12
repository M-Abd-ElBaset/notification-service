<?php 

namespace App\Prototype;

class Square extends Shape
{
    protected float $sideLength;

    public function __construct(
        Position $position,
        string $borderColor,
        string $color,
        int $borderWidth, 
        float $sideLength)
    {
        parent::__construct($position, $borderColor, $color, $borderWidth);
        $this->sideLength = $sideLength;
    }

    public function getSideLength(): float
    {
        return $this->sideLength;
    }

    public function setSideLength(float $sideLength): void
    {
        $this->sideLength = $sideLength;
    }
}