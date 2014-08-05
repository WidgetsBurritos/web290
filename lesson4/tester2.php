<?php require_once("_top.php"); ?><!DOCTYPE html>
<head>
    <title></title>
    <style type="text/css">
        #canvases { position: relative; background: #c8c8c8; width: 800px; height: 500px; }
        #canvases canvas { position: absolute; left: 0; top: 0; }
        #myCanvas {  }
    </style>
    <script type="text/javascript">
        /**
         * creates a new HTML canvas
         * @returns {HTMLElement}
         */
        function createNewCanvas() {
            var canvas = document.createElement('canvas');
            canvas.width = 800;
            canvas.height = 500;
            document.getElementById("canvases").appendChild(canvas);
            return canvas;
        }
    </script>
</head>


<body>


<div id="canvases"></div>



<script type="text/javascript">
<?php

// DRAW A SQUARE
/*
$square = new DrawableSquare(100,200,100,1.6);
$square->drawMe();
//*/

// DRAW A TRIANGLE
/*
$triangle = new DrawableTriangle(150,200,250,200,100,1.6);
$triangle->drawMe();//->rotate(true);
//*/

//DRAW AN IMAGE
/*
$picture = new DrawablePicture('logo.png', 100,400,'0.5');
$picture->drawMe();//->rotate(false);
//*/


?>

</script>


</body>
</html>

