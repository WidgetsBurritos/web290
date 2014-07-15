<?php
ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<head>
    <title>Student List</title>
    <style type="text/css">
        a { color: #ffffff; text-decoration: none; }
        a:hover { color: #ffff99; }
        body {
            background: #999999;
            font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Geneva, Verdana, sans-serif;
        }

        #project { padding: 10px 25px; background: #ffffff; }
        #project a { color: #0000cc; }
        #project a:hover { color: #0000ff; }
        #navigation {
            text-align: center;

            margin: 0 auto;
            list-style-type: none;

        }
        #navigation li {
            display: inline-block;
            margin: 0;
            padding: 0 10px;
        }
        .clear { clear: both; }
        #students {
            margin: 0 auto;
            max-width: 800px;
        }

        #students .student {
            float: left;
            width: 350px;
            margin: 0 5px 10px 5px;
            padding: 20px;
            background: #f8f8f8;
            box-shadow: inset 0 0 3px #e0e0e0;
        }

        #students .student .name { font-size: 1.3em; }
        #students .student .grades { float: right; width: 10%;  text-align: center; padding: 0px 5px; }
        #students .student .grade-summary { float: left; width: 70%; padding: 0 5%;  border: 1px solid #c0c0c0; background: #ffffff;}
        #students .student .label { font-weight: bold;  }
    </style>
</head>
<body>

<ul id="navigation">
    <li><a href="./">Project Details</a></li>
    <?php
    for ($i=1; $i<=5; $i++)
        printf('<li><a href="test%d.php">Test %d</a></li>', $i, $i);

    ?>

</ul>

<div id="students">


