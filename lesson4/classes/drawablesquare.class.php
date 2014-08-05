<?php

class DrawableSquare extends DrawableShape {
    private $side;
    public function __construct($side,$startX,$startY, $scaleFactor) {
        parent::__construct($startX, $startY, $scaleFactor);
        $this->side = $side;
    }
    function getPoints()
    {
        return array(
            array(0, 0),
            array(0, $this->side),
            array($this->side, $this->side),
            array($this->side, 0),
            array(0,0)
        );
    }

    function getArea()
    {
        return $this->side * $this->side;
    }

    function getPerimeter()
    {
        return $this->side * 4;
    }
}