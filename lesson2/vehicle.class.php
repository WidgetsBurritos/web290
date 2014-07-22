<?php

/** just a helper file */
require_once("_top.php");







class Vehicle {
    /**
     * To illustrate the difference between public and private variables I have made $license_plate public and
     *
     */
    private $color, $vin;
    public $license_plate;



    /**
     * Constructors are useful functions. They are responsible for initialize our object. This is where we set default
     * values and other things of that nature.
     * @param $properties
     */
    public function __construct($properties) {
        // For now we will just return null on error. Eventually we will implement other error catching techniques.
        if (!is_array($properties)) return null;


        /**
         * Let's set our respective properties
         */
        if (isset($properties['color'])) {
            $this->color = $properties['color'];
        } else {
            $this->color = null;
        }
        if (isset($properties['vin'])) {
            $this->vin = $properties['vin'];
        } else {
            $this->vin = null;
        }
        if (isset($properties['license_plate'])) {
            $this->license_plate = $properties['license_plate'];
        } else {
            $this->license_plate = null;
        }

        // Let the world know the vehicle has been created.
        printf ("Brand new car with VIN %s has just been created.<br /><br />", $this->vin);
    }

    /**
     * Destroy our object
     */
    public function __destruct() {
        printf ("This car with VIN %s will self destruct in...", $this->vin);
        for ($i=3; $i>0; $i--) {
            printf ("\n%d", $i);
        }
        $this->color = null;
        $this->vin = null;
        $this->license_plate = null;
        print "\nBOOM!\n<br /><br />\n";
    }


    public function __toString() {
        return sprintf ('I am a <strong>%s</strong> vehicle with license plate: <strong>%s</strong>.<br /><br />',
            $this->color,
            $this->license_plate
        );
    }

    public function getVIN() {
        return $this->vin;
    }
}


