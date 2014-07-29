<?php

class Rectangle extends Shape {
    private $side1, $side2;
    public function __construct($side1, $side2) {
        $this->side1 = $side1;
        $this->side2 = $side2;
    }

    function getArea()
    {
        return $this->side1 * $this->side2;
    }

    function getPerimeter()
    {
        return $this->side1 * 2 + $this->side2 * 2;
    }
}