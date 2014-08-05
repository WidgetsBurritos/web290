<?php

class Triangle extends Shape {
    private $side1, $side2, $side3;
    function __construct($side1,$side2,$side3) {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    function getArea()
    {
        // formula for area of triangle where three sides given is
        //     SQRT ( z * (z - side1) * (z - side2) * (z - side3))
        //          WHERE z = (side1 + side2 + side3) / 2
        $z = $this->getPerimeter()/2;
        return sqrt($z*($z-$this->side1)*($z-$this->side2)*($z-$this->side3));
    }

    function getPerimeter()
    {
        return $this->side1+$this->side2+$this->side3;
    }
}