<?php
require_once("_top.php");
require_once("classes/Vehicle.class.php");
require_once("classes/Ford.class.php");
require_once("classes/Ford_F150.class.php");
require_once("classes/Ford_F150_2003.class.php");

$vehicle_properties = array(
    'color' => 'red',
    'vin' => '12345678901234567',
    'license_plate' => 'ABC1234',
);

/*
$vehicle = new Ford($vehicle_properties);
print $vehicle . '<br />';
//*/


/*
$vehicle = new Ford_F150($vehicle_properties);
print $vehicle . '<br />';
//*/


/*
// TODO: Check what happens when you don't call the parent::__construct()
$vehicle = new Ford_F150_2003($vehicle_properties);
print $vehicle . '<br />';
//*/








