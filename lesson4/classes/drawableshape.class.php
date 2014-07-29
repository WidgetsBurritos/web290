<?php

abstract class DrawableShape extends Shape implements iDrawable {

    abstract function getPoints();

    function drawMe($startX = 0, $startY = 0, $scaleFactor = 1)
    {
        $points = $this->getPoints();
        $pointsJS = '';
        $first = true;
        foreach ($points as $point) {
            $x = $startX + $point[0] * $scaleFactor;
            $y = $startY + $point[1] * $scaleFactor;
            $pointsJS .= sprintf("    ctx.lineTo(%d,%d);\n", $x, $y);
        }


        print <<<"JAVASCRIPT"

    ctx.beginPath();
    ctx.moveTo({$startX},{$startY});
   {$pointsJS}
    ctx.closePath();
    ctx.stroke();


JAVASCRIPT;

    }

}