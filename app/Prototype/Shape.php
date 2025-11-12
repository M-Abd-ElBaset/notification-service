<?php 

namespace App\Prototype;

abstract class Shape
{
    public function __construct(
        protected Position $position, 
        protected string $borderColor, 
        protected string $color, 
        protected int $borderWidth)
    {}

    public function __clone()
    {
        $this->position = clone $this->position;
    }

    public function getPosition(): Position
    {
        return $this->position;
    }

    public function getBorderColor(): string
    {
        return $this->borderColor;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getBorderWidth(): int
    {
        return $this->borderWidth;
    }

    public function setPosition(Position $position): void
    {
        $this->position = $position;
    }

    public function setBorderColor(string $borderColor): void
    {
        $this->borderColor = $borderColor;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setBorderWidth(int $borderWidth): void
    {
        $this->borderWidth = $borderWidth;
    }
}