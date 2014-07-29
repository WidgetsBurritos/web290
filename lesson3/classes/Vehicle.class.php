<?php

class Vehicle {
    private $vin, $quiet;
    protected $year, $make, $model;
    public $color, $license_plate;



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

        $this->quiet = (isset($properties['quiet']) && $properties['quiet']);

        if (!$this->quiet) {
            // Let the world know the vehicle has been created.
            printf ("Brand new car with VIN %s has just been created.<br /><br />", $this->vin);
        }
    }

    /**
     * Destroy our object
     */
    public function __destruct() {
        if (!$this->quiet) {
            printf ("This car with VIN %s will self destruct in...", $this->vin);
            for ($i=3; $i>0; $i--) {
                printf ("\n%d", $i);
            }
        }
        $this->color = null;
        $this->vin = null;
        $this->license_plate = null;
        $this->year = null;
        $this->make = null;
        $this->model = null;
        if (!$this->quiet) {
            print "\nBOOM!\n<br /><br />\n";
        }
    }

    /**
     * __toString() is a special function that will be used to output the object as a string
     */
    public function __toString() {
        return sprintf ('I am a <strong>%s</strong> vehicle with license plate: <strong>%s</strong>.<br /><br />',
            $this->color,
            $this->license_plate
        );
    }

    /** retrieves the vehicles VIN.  Necessary since it's a private property */
    public function getVIN() {
        return $this->vin;
    }

    /** Allows us to modify a class property. Normally used in conjunction with "private" or "protected" properties,
     but can be used with any property. */
    public function paintCar($color){
        $this->color = $color;
    }

}


