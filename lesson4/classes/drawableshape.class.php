<?php

abstract class DrawableShape extends Shape implements iDrawable {
    private $id, $startX, $startY, $scaleFactor;
    abstract function getPoints();

    function __construct($startX, $startY, $scaleFactor) {
        $this->startX = $startX;
        $this->startY = $startY;
        $this->scaleFactor = $scaleFactor;
        $this->id = uniqid('_shape_');
    }

    function drawMe()
    {
        $id = $this->id;
        $points = $this->getPoints();
        $pointsJS = '';
        $first = true;
        foreach ($points as $point) {
            $x = $this->startX + $point[0] * $this->scaleFactor;
            $y = $this->startY + $point[1] * $this->scaleFactor;
            $pointsJS .= sprintf("    ctx%s.lineTo(%d,%d);\n",$id, $x, $y);
        }


        print <<<"CANVAS"

var canvas{$id} = createNewCanvas();
var ctx{$id} = canvas{$id}.getContext("2d");


var draw{$this->id} = function() {
    ctx{$id}.beginPath();
    ctx{$id}.moveTo({$this->startX},{$this->startY});
{$pointsJS}
    ctx{$id}.closePath();
    ctx{$id}.stroke();
}
draw{$this->id}();


CANVAS;
        return $this;
    }


    function rotate($clockwise) {
        $id = $this->id;
        if ($clockwise) {
            $factor = 1;
        } else {
            $factor = -1;
        }
        $id = $this->id;
        print <<<"JAVASCRIPT"

    var rotate{$id} = function() {

        if (typeof window.degrees{$id} === "undefined") {
            window.degrees{$id} = 0;
        }
        window.degrees{$id}+={$factor};
        window.degrees{$id} %= 360;

        ctx{$id}.clearRect(0,0,canvas{$id}.width, canvas{$id}.height);
        ctx{$id}.save();
        ctx{$id}.translate({$this->startX}*{$this->scaleFactor}, {$this->startY}*{$this->scaleFactor});
        ctx{$id}.rotate(window.degrees{$id}*Math.PI/180);
        ctx{$id}.translate(-{$this->startX}*{$this->scaleFactor}, -{$this->startY}*{$this->scaleFactor});
        draw{$id}();

        ctx{$id}.restore();
    };
    //rotate{$id}();
    setInterval(rotate{$id}, 10);


JAVASCRIPT;
        return $this;
    }
}