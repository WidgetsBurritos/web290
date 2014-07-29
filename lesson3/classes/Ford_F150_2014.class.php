<?php



class Ford_F150_2014 extends Ford_F150 {
    public function __construct($properties) {
        parent::__construct($properties);
        $this->year = 2014;
    }

    public function __toString() {
        return sprintf ('I am a <strong>%s</strong> %d %s %s vehicle with license plate: <strong>%s</strong>.<br /><br />',
            $this->color,
            $this->year,
            $this->make,
            $this->model,
            $this->license_plate
        );
    }
}