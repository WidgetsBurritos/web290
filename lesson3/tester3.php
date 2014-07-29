<?php


require_once('_top.php');

/** spl_autoload_register saves us from having to type in class names every single time.  */
spl_autoload_register(function ($class) {
    require_once('classes/' . $class . '.class.php');
});





/*
// Get static count of how many Fords exist
printf ('There are/is %d Ford(s) on the Road<br />',Ford::getTotalFordCount());
//*/

/*
$vehicle_properties = array(
    'color' => 'red',
    'vin' => '12345678901234567',
    'license_plate' => 'ABC1234',
    'quiet' => true,
);
$vehicle1 = new Ford_F150_2003($vehicle_properties);

// We can use the class name with the static function to get the count
printf ('There are/is %d Ford(s) on the Road<br />',Ford::getTotalFordCount());

//*/



/*
$vehicle2_properties = array(
    'color' => 'grey',
    'vin' => '93599235929359239',
    'license_plate' => 'XYZ9999',
    'quiet' => true,
);

$vehicle2 = new Ford_F150_2014($vehicle_properties);

// We can also use objects instead of classes if we already have access to the variable.
printf ('There are/is %d Ford(s) on the Road<br />',$vehicle2::getTotalFordCount());
//*/






/*
$vehicle3_properties = array(
    'color' => 'black',
    'vin' => '81247718478127821',
    'license_plate' => '99ABC92',
    'quiet' => true,
);

$vehicle3 = new Ford_Taurus_2008($vehicle3_properties);
printf ('There are/is %d Ford(s) on the Road<br />',Ford::getTotalFordCount());

//*/



//*

// destroy the second vehicle
unset($vehicle2);
printf ('There are/is %d Ford(s) on the Road<br />',Ford::getTotalFordCount());

//*/



/*
print 'Constants:<br />';
print Ford::MAKE.'<br />';
print $vehicle3::MAKE.'<br />';



//*/