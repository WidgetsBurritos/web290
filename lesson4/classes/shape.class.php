<?php

abstract class Shape {
    abstract function getArea();
    abstract function getPerimeter();

    function whatAmI() {
        return 'I am a shape';
    }
}