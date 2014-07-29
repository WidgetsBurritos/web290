<?php

class DrawableTriangle extends DrawableShape {
    private $side1, $side2, $side3;
    function __construct($side1,$side2,$side3) {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    function getArea()
    {
        // formula for area of triangle where three sides given is
        //     SQRT ( perimeter/2 * (perimeter/2 - side1) * (perimeter/2 - side2) * (perimeter/2 - side3))
        $p = $this->getPerimeter()/2;
        return sqrt($p*($p-$this->side1)*($p-$this->side2)*($p-$this->side3));
    }

    function getPerimeter()
    {
        return $this->side1+$this->side2+$this->side3;
    }

    function getPoints()
    {
        return array(
            array(0,0),
            array($this->side2, $this->side1),
            array($this->side2, 0),
            array(0,0)
        );
    }
}