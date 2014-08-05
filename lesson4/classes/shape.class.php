<?php

abstract class Shape {
    // force extending class to define these
    abstract function getArea();
    abstract function getPerimeter();


    // common method that will be shared by ALL shapes
    function whatAmI() {
        return 'I am a shape';
    }
}