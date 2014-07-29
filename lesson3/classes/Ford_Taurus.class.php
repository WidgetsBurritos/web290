<?php



class Ford_Taurus extends Ford {
    public function __construct($properties) {
        parent::__construct($properties);
        $this->model = 'Taurus';

    }
    public function __toString() {
        return sprintf ('I am a <strong>%s</strong> %s %s vehicle with license plate: <strong>%s</strong>.<br /><br />',
            $this->color,
            $this->make,
            $this->model,
            $this->license_plate
        );
    }
}