<?php
require_once("_top.php");


require_once("classes/Vehicle.class.php");


//*
$vehicle_properties = array(
    'color' => 'red',
    'vin' => '12345678901234567',
    'license_plate' => 'ABC1234',
);
$vehicle = new Vehicle($vehicle_properties);
print $vehicle->license_plate;

//*/


/*
// Creating a second instance...  You can have MULTIPLE instances

$vehicle2_properties = array(
    'color' => 'red',
    'vin' => '09876543210987654',
    'license_plate' => 'ZZZ1222',
);
$vehicle2 = new Vehicle($vehicle_properties);

//*/



/*
// Show our vehicle's license plate
print $vehicle->license_plate.'<br />';

//*/



/*
// OH NO! Our car's been stolen and someone just swapped out the license plate with another one.
$vehicle->license_plate = 'XYZ9988';

// Show our vehicle's license plate.
print $vehicle;
//*/


/*
// Instantiate another vehicle using the same variable. This forces the destructor on the previous vehicle to trigger.
$vehicle = new Vehicle($vehicle_properties);
print $vehicle;
//*/


/*
print "VIN: ".$vehicle->vin.'<br />';
//*/



/*
print 'VIN: '.$vehicle->getVIN().'<br />';

//*/