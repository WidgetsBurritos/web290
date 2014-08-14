<?php

require_once("_top.php");


print '<PRE>';

// --------------------------------------------------------------- //
// USING ext/mysql
// --------------------------------------------------------------- //

/*
// create a connection (exits on error)
mysql_connect("localhost", "root", "root") or die("Can't connect : " . mysql_error());
mysql_select_db("web290") or die("Can't select database: " . mysql_error());

// Create Our Table If It Doesn't Exist
mysql_query(file_get_contents('mysql.sql.txt'));


// Retrieve from the database
$result = mysql_query("SELECT  * FROM students WHERE 1");
while ($row = mysql_fetch_assoc($result)) {
    print_r($row);
}
//*/


/*
// Insert into the database
$first_name = getRandomFirstName();
$last_name = getRandomLastName();
$age = rand(21,35);
mysql_query(sprintf("INSERT INTO students (first_name, last_name, age) VALUES ('%s', '%s', %d)", $first_name, $last_name, $age));
//*/










// --------------------------------------------------------------- //
// USING ext/mysqli - Procedural
// --------------------------------------------------------------- //

/*

// Combine mysql_connect() and mysql_select_db() lines:
$link = mysqli_connect("localhost", "root", "root", "web290") or die("Can't connect: " . mysqli_error($link));

// Create Our Table If It Doesn't Exist
mysqli_query($link, file_get_contents('mysql.sql.txt'));


// Add link to our connection to the query
$result = mysqli_query($link, "SELECT  * FROM students WHERE 1");
while ($row = mysqli_fetch_assoc($result)) {
    print_r($row);
}


/*
// Insert into the database
$first_name = getRandomFirstName();
$last_name = getRandomLastName();
$age = rand(21,35);
mysqli_query($link, sprintf("INSERT INTO students (first_name, last_name, age) VALUES ('%s', '%s', %d)", $first_name, $last_name, $age));
//*/







// --------------------------------------------------------------- //
// USING ext/mysqli - OOP
// --------------------------------------------------------------- //

/*
// create a connection
$mysqli = @new mysqli("localhost", "root", "root", "web290");
if ($mysqli->connect_errno) {
    die("Can't connect : " . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

// Create Our Table If It Doesn't Exist
$mysqli->query(file_get_contents('mysql.sql.txt'));


$result = $mysqli->query("SELECT  * FROM students WHERE 1");
while ($row = $result->fetch_assoc()) {
    print_r($row);
}


//*
$first_name = getRandomFirstName();
$last_name = getRandomLastName();
$age = rand(21,35);
$mysqli->query(sprintf("INSERT INTO students (first_name, last_name, age) VALUES ('%s', '%s', %d)", $first_name, $last_name, $age));

//*/






/**
 * NOTE: When using ext/mysqli Procedural you must reference the $link to your connection.
 * In OOP, this link is maintained for you within the object
 */




// --------------------------------------------------------------- //
// USING PDO with MySQL Database
// --------------------------------------------------------------- //

/*


// Create our PDO
$pdo = new PDO('mysql:host=localhost;dbname=web290', 'root', 'root');
$statement = $pdo->query("SELECT  * FROM students WHERE 1");
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    print_r($row);
}


/*
$first_name = getRandomFirstName();
$last_name = getRandomLastName();
$age = rand(21,35);

$pdo->query(sprintf("INSERT INTO students (first_name, last_name, age) VALUES ('%s', '%s', %d)", $first_name, $last_name, $age));

//*/





// --------------------------------------------------------------- //
// USING PDO with Sqlite Database
// --------------------------------------------------------------- //

/*
$pdo2 = new PDO('sqlite:students_PDO.sqlite');
// initialize our database if not exists
$pdo2->exec(file_get_contents('sqlite.sql.txt'));

$statement = $pdo2->query("SELECT  * FROM students WHERE 1");
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    print_r($row);
}





/*
$first_name = getRandomFirstName();
$last_name = getRandomLastName();
$age = rand(21,35);

$pdo2->query(sprintf("INSERT INTO students (first_name, last_name, age) VALUES ('%s', '%s', %d)", $first_name, $last_name, $age));


//*/






