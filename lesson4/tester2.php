<?php require_once("_top.php"); ?><!DOCTYPE html>
<head>
    <title></title>
    <style type="text/css">
        #myCanvas { background: #c8c8c8; }
    </style>
</head>


<body>
<canvas id="myCanvas" width="800" height="500"></canvas>


<script type="text/javascript">
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");

    <?php

    /*
    $square = new DrawableSquare(100);
    $square->drawMe(400,250);
    //*/

    /*
    $triangle = new DrawableTriangle(150,200,250);
    $triangle->drawMe(200,100,1.6);
    //*/


    /*
    $picture = new DrawablePicture('logo.png');
    $picture->drawMe(100,400,'0.5');
    //*/


    ?>
</script>



</body>
</html>

