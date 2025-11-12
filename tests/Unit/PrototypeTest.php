<?php

namespace Tests\Unit;

use Tests\TestCase;

class PrototypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_square_is_cloned_correctly()
    {
        $square1 = new \App\Prototype\Square(
            new \App\Prototype\Position(10.0, 20.0),
            'black',
            'red',
            2,
            15.0
        );

        $square2 = clone $square1;
        $square2->setSideLength(25.0);
        $square2->setPosition(new \App\Prototype\Position(30.0, 30.0));
        $square2->setBorderColor('blue');
        $square2->setColor('green');
        $square2->setBorderWidth(4);

        $this->assertEquals(15.0, $square1->getSideLength());
        $this->assertEquals(10.0, $square1->getPosition()->getX());
        $this->assertEquals(20.0, $square1->getPosition()->getY());

        $this->assertEquals(25.0, $square2->getSideLength());
        $this->assertEquals(30.0, $square2->getPosition()->getX());
        $this->assertEquals(30.0, $square2->getPosition()->getY());
        $this->assertEquals('blue', $square2->getBorderColor());
        $this->assertEquals('green', $square2->getColor());
        $this->assertEquals(4, $square2->getBorderWidth());
    }


    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_circle_is_cloned_correctly()
    {
        $circle1 = new \App\Prototype\Circle(
            new \App\Prototype\Position(5.0, 15.0),
            'yellow',
            'purple',
            3,
            10.0
        );

        $circle2 = clone $circle1;
        $circle2->setRadius(20.0);
        $circle2->setPosition(new \App\Prototype\Position(25.0, 25.0));
        $circle2->setBorderColor('orange');
        $circle2->setColor('pink');
        $circle2->setBorderWidth(5);

        $this->assertEquals(10.0, $circle1->getRadius());
        $this->assertEquals(5.0, $circle1->getPosition()->getX());
        $this->assertEquals(15.0, $circle1->getPosition()->getY());

        $this->assertEquals(20.0, $circle2->getRadius());
        $this->assertEquals(25.0, $circle2->getPosition()->getX());
        $this->assertEquals(25.0, $circle2->getPosition()->getY());
        $this->assertEquals('orange', $circle2->getBorderColor());
        $this->assertEquals('pink', $circle2->getColor());
        $this->assertEquals(5, $circle2->getBorderWidth());
    }

    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_rectangle_is_cloned_correctly()
    {
        $rectangle1 = new \App\Prototype\Rectangle(
            new \App\Prototype\Position(0.0, 0.0),
            'white',
            'black',
            1,
            30.0,
            40.0
        );

        $rectangle2 = clone $rectangle1;
        $rectangle2->setWidth(50.0);
        $rectangle2->setLength(60.0);
        $rectangle2->setPosition(new \App\Prototype\Position(10.0, 10.0));
        $rectangle2->setBorderColor('gray');
        $rectangle2->setColor('brown');
        $rectangle2->setBorderWidth(2);

        $this->assertEquals(30.0, $rectangle1->getWidth());
        $this->assertEquals(40.0, $rectangle1->getLength());
        $this->assertEquals(0.0, $rectangle1->getPosition()->getX());
        $this->assertEquals(0.0, $rectangle1->getPosition()->getY());

        $this->assertEquals(50.0, $rectangle2->getWidth());
        $this->assertEquals(60.0, $rectangle2->getLength());
        $this->assertEquals(10.0, $rectangle2->getPosition()->getX());
        $this->assertEquals(10.0, $rectangle2->getPosition()->getY());
        $this->assertEquals('gray', $rectangle2->getBorderColor());
        $this->assertEquals('brown', $rectangle2->getColor());
        $this->assertEquals(2, $rectangle2->getBorderWidth());
    }
}
