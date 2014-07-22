<?php
/**
 * Multi-dimensional Arrays Explained
 */


// this is just a helper file I made to simplify the code on these various examples.
// any functions that start with two underscores, come from _top.php
include_once("_top.php");

//////////////////////////////////////////////////////////////////////////
/*
// standard associative array

$book1 = array('title' => 'The Fantastic Light', 'author' => 'Terry Pratchett', 'year' => 1997);
$book2 = array('title' => 'Daemon', 'author' => 'Daniel Suarez', 'year' => 2006);
$book3 = array('title' => 'Eric', 'author' => 'Terry Pratchett', 'year' => 1990);


__pre_output('Book 1', $book1);
__pre_output('Book 2', $book2);
__pre_output('Book 3', $book3);

//*/

//////////////////////////////////////////////////////////////////////////
/*


// two dimensional array
$books = array(
    array('title' => 'The Fantastic Light', 'author' => 'Terry Pratchett', 'year' => 1997),
    array('title' => 'Daemon', 'author' => 'Daniel Suarez', 'year' => 2006),
    array('title' => 'Eric', 'author' => 'Terry Pratchett', 'year' => 1990),
);
ß

__pre_output('2D Book Array', $books);


$movies = array(
    array(
        'title' => 'The Italian Job', 'director' => 'F. Gary Gray', 'year' => 2003
    ),
    array(
        'title' => 'UHF', 'director' => 'Jay Levey', 'year' => 1989
    ),
    array(
        'title' => 'The Italian Job', 'director' => 'Peter Collinson', 'year' => 1969
    )

);

__pre_output('2D Movie Array', $movies);






//////////////////////////////////////////////////////////////////////////
/*

// three dimensional arrays
$products = array(
    'books' => array(
        array(
            'title' => 'The Fantastic Light', 'author' => 'Terry Pratchett', 'year' => 1997
        ),
        array(
            'title' => 'Daemon', 'author' => 'Daniel Suarez', 'year' => 2006
        ),
        array(
            'title' => 'Eric', 'author' => 'Terry Pratchett', 'year' => 1990
        ),
    ),
    'movies' => array(
        array(
            'title' => 'The Italian Job', 'director' => 'F. Gary Gray', 'year' => 2003
        ),
        array(
            'title' => 'UHF', 'director' => 'Jay Levey', 'year' => 1989
        ),
        array(
            'title' => 'The Italian Job', 'director' => 'Peter Collinson', 'year' => 1969
        )

    )
);


__pre_output('3D Product Array - version 1', $products);





//////////////////////////////////////////////////////////////////////////
/*

// When nesting deep into a multidimension array, sometimes makes sense to extract some of these variables.
// So instead of writing $products all the way out we could do something like this:

$products2 = array('books' => $books, 'movies' => $movies);

// This is still a multidimensional array, but much easier to read.

__pre_output('3D Product Array - version 2', $products2);




