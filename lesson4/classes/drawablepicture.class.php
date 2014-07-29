<?php

class DrawablePicture implements iDrawable {
    private $img;
    public function __construct($img) {
        $this->img = $img;
    }


    function drawMe($startX = 0, $startY = 0, $scaleFactor = 1)
    {

        print <<<"JAVASCRIPT"

        var imageObj = new Image();
        imageObj.onload = function() {
            ctx.drawImage(imageObj, {$startX}, {$startY}, imageObj.width * {$scaleFactor}, imageObj.height * {$scaleFactor});
        };
        imageObj.src = '{$this->img}';


JAVASCRIPT;


        /*
         *

         */
    }
}