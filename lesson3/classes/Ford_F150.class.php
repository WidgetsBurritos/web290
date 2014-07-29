<?php



class Ford_F150 extends Ford {
    public function __construct($properties) {
        parent::__construct($properties);
        $this->model = 'F-150';
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