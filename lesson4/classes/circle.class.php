<?php
class Circle extends Shape {
    private $radius;

    function __construct($radius) {
        $this->radius = $radius;
    }
    function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

    function getPerimeter()
    {
        return 2 * pi() * $this->radius;
    }

    function getCircumference() {
        return $this->getPerimeter();
    }

}