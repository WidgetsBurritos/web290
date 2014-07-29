<?php

class Square extends Rectangle {
    function __construct($side) {
        parent::__construct($side, $side);
    }
}