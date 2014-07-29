<?php

class Ford_Taurus_2008 extends Ford_Taurus {
    public function __construct($properties) {
        parent::__construct($properties);
        $this->year = 2008;
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
