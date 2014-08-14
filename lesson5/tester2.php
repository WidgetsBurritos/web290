<?php
require_once("_top.php");

print '<PRE>';




// --------------------------------------------------------------- //
// Using Prepared Statements with PDO
// --------------------------------------------------------------- //
/*

// Create our PDO
$pdo = new PDO('mysql:host=localhost;dbname=web290', 'root', 'root');
$statement = $pdo->query("SELECT  * FROM students WHERE 1");
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    print_r($row);
}

$first_name = getRandomFirstNameHacked();
$last_name = getRandomLastName();
$age = rand(21,35);


// UNSAFE VERSION
$pdo->query(sprintf("INSERT INTO students (first_name, last_name, age) VALUES ('%s', '%s', %d)", $first_name, $last_name, $age));



// SAFE VERSION (Prepared Statement)
/*
$sql = "INSERT INTO students (first_name, last_name, age) VALUES (?,?,?)";
$query = $pdo->prepare($sql);
$query->execute(array($first_name, $last_name, $age));
//*/






// --------------------------------------------------------------- //
// Using the same prepared statement, multiple times
// --------------------------------------------------------------- //

/*
for ($i=1; $i<100; $i++) {
    $first_name = getRandomFirstName();
    $last_name = getRandomLastName();
    $age = rand(21,35);
    $query->execute(array($first_name, $last_name, $age));
}


// */





// --------------------------------------------------------------- //
// Using Prepared Statements with ext/mysqli
// --------------------------------------------------------------- //

/*
// create a connection
$mysqli = @new mysqli("localhost", "root", "root", "web290");
$mysqli->debug("d:t:o,client.trace");
if ($mysqli->connect_errno) {
    die("Can't connect : " . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

// Create Our Table If It Doesn't Exist
$mysqli->query(file_get_contents('mysql.sql.txt'));


$result = $mysqli->query("SELECT  * FROM students WHERE 1");
while ($row = $result->fetch_assoc()) {
    print_r($row);
}



$first_name = getRandomFirstNameHacked();
$last_name = getRandomLastName();
$age = rand(21,35);

// UNSAFE VERSION
$mysqli->query(sprintf("INSERT INTO students (first_name, last_name, age) VALUES ('%s', '%s', %d)", $first_name, $last_name, $age));


/*
// SAFE VERSION (Prepared Statement)
$sql = "INSERT INTO students (first_name, last_name, age) VALUES (?,?,?)";
$query = $mysqli->prepare($sql);
$query->bind_param( 'ssi', $first_name, $last_name, $age);

$query->execute();


//*/