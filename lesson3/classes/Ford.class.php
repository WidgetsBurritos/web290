<?php


/* A ford vehicle should inherit all properties of a generic vehicle */
class Ford extends Vehicle {
    const MAKE = 'Ford';

    private static $FordCount = 0;
    protected $parts;


    public function __construct($properties) {
        parent::__construct($properties);
        $this->make = 'Ford';
        $this->parts = array();
        self::$FordCount++;
    }

    public function __destruct() {
        parent::__destruct();
        self::$FordCount--;
    }

    public function __toString() {
        return sprintf ('I am a <strong>%s</strong> %s vehicle with license plate: <strong>%s</strong>.<br /><br />',
            $this->color,
            $this->make,
            $this->license_plate
        );
    }


    public function getManufacturerParts() {

    }

    protected function addParts($part) {

    }


    public static function getTotalFordCount() {
        return self::$FordCount;
    }

}
