<?php

class DrawablePicture implements iDrawable {
    private $img, $id, $startX, $startY, $scaleFactor;
    public function __construct($img, $startX, $startY, $scaleFactor) {
        $this->img = $img;
        $this->id = uniqid('_picture_');
        $this->startX = $startX;
        $this->startY = $startY;
        $this->scaleFactor = $scaleFactor;
    }


    function drawMe()
    {
        $id = $this->id;
        print <<<"CANVAS"

var canvas{$id} = createNewCanvas();
var ctx{$id} = canvas{$id}.getContext("2d");


function draw{$id}() {
    var imageObj = new Image();
    imageObj.onload = function() {
        ctx{$id}.drawImage(imageObj, {$this->startX}, {$this->startY}, imageObj.width * {$this->scaleFactor}, imageObj.height * {$this->scaleFactor});
    };
    imageObj.src = '{$this->img}';
    return imageObj;
};
var image{$id} = draw{$id}();

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
        print <<<"JAVASCRIPT"

    var rotate{$id} = function() {
        if (typeof window.degrees{$id} === "undefined") {
            window.degrees{$id} = 0;
        }
        var width = image{$id}.width *{$this->scaleFactor};
        var height = image{$id}.width *{$this->scaleFactor};
        window.degrees{$id}+={$factor};
        window.degrees{$id} %= 360;
        ctx{$id}.clearRect(0,0,canvas{$id}.width, canvas{$id}.height);
        ctx{$id}.save();
        ctx{$id}.translate(width/2, height/2);
        ctx{$id}.rotate(window.degrees{$id}*Math.PI/180);
        ctx{$id}.drawImage(image{$id},-width/2, -height/100,image{$id}.width*{$this->scaleFactor},image{$id}.height*{$this->scaleFactor});
        ctx{$id}.restore();
    };
    setInterval(rotate{$id}, 20);

JAVASCRIPT;
        return $this;
    }
}