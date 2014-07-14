<?php
/**
 * Anonymous functions   (lamdas)
 */


// this is just a helper file I made to simplify the code on these various examples.
// any functions that start with two underscores, come from top.php
include_once("_top.php");

////////////////////////////////////////////////////////////////////////////
/*
 * Anonymous functions are exactly as they sound, functions without names. 
 */

// example of an anoymous function:

function() {
    static $callCount = 0;
    $callCount++;
    print "Anonymous Function #1 has been called $callCount time(s).<br />\n";
};





////////////////////////////////////////////////////////////////////////////
/*
// But this function NEVER gets called.  To fix it we can assign it to some variable
$x = function() {
    static $callCount = 0;
    $callCount++;
    print "Anonymous Function #2 has been called $callCount time(s).<br />\n";
};

// Now we can access this function by referencing the $x variable. 
$x();

// We can also reassign this function to some other variable.
$y = $x;
$y();

// We can also pass an anoymous function as a parameter without ever assigning it to a variable

function runTheFunction ($a) {
    $a();
}

runTheFunction(function() {
    static $callCount = 0;
    $callCount++;
    print "Anonymous Function #3 has been called $callCount time(s).<br />\n";    
});

//*/











////////////////////////////////////////////////////////////////////////////
/*
// So what is the purpose of this? Callback functions!  We used a callback function earlier when sorting.

// For example, take our $books array from earlier: 
$books = $books2 = array(
    array('title' => 'The Fantastic Light', 'author' => 'Terry Pratchett', 'year' => 1997),
    array('title' => 'Daemon', 'author' => 'Daniel Suarez', 'year' => 2006),
    array('title' => 'Eric', 'author' => 'Terry Pratchett', 'year' => 1990),
);


// Here was our original function to sort books by year in ascending order.
function book_year_cmp_ascending($book1, $book2) {
    if ($book1['year'] > $book2['year'])
        return true;
    else if ($book1['year'] < $book2['year'])
        return false;
    return 0;
}

__pre_output('Unsorted Book Array', $books);

// Now we sort our array
usort($books, 'book_year_cmp_ascending');

__pre_output('Sorted Book Array', $books);


__pre_output('Unsorted Book2 Array', $books2);
// Now we sort our array
usort($books2, function ($book1, $book2) {
    if ($book1['year'] > $book2['year'])
        return true;
    else if ($book1['year'] < $book2['year'])
        return false;
    return 0;    
});



__pre_output('Sorted Book2 Array', $books2);


// Instead of wasting time and resources by creating functions that clog up the global scope,
// we have a function that has a localized scope within usort and this is discarded when no longer needed.



//*/