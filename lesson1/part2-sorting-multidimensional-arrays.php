<?php
/**
 * Sorting multi-dimensional arrays
 */

// this is just a helper file I made to simplify the code on these various examples.
// any functions that start with two underscores, come from _top.php
include_once("_top.php");

//////////////////////////////////////////////////////////////////////////
//*
// Declare our book list again
$books = array(
    array('title' => 'The Fantastic Light', 'author' => 'Terry Pratchett', 'year' => 1997),
    array('title' => 'Daemon', 'author' => 'Daniel Suarez', 'year' => 2006),
    array('title' => 'Eric', 'author' => 'Terry Pratchett', 'year' => 1990),
);

__pre_output('Books - Before Any Sorting', $books);



//////////////////////////////////////////////////////////////////////////
//*
// To sort books by year in ascending order we first need a way of comparing two books.
// To do so, we create a function that takes two different books as parameters.
function book_year_cmp_ascending($book1, $book2) {
    if ($book1['year'] > $book2['year'])
        return true;
    else if ($book1['year'] < $book2['year'])
        return false;
    return 0;
}




// Now we just call usort() and pass a string containing the function name of the function we just created.
usort($books, 'book_year_cmp_ascending');

__pre_output('Books - After Sorting by Year (Ascending)', $books);






//////////////////////////////////////////////////////////////////////////
//*
// To sort books by year in descending order we need to reverse our return values
function book_year_cmp_descending($book1, $book2) {
    if ($book1['year'] > $book2['year'])
        return false;
    else if ($book1['year'] < $book2['year'])
        return true;
    return 0;
}

usort($books, 'book_year_cmp_descending');
__pre_output('Books - After Sorting by Year (Descending)', $books);





//////////////////////////////////////////////////////////////////////////
//*
// To sort books by title we need to create a comparison function.
// Since we're essentially just comparing to string values, let's use a php function that compares for us.
// strcasecmp performs case-insensitive string comparisons
function book_title_cmp($book1, $book2) {
    return strcasecmp($book1['title'], $book2['title']);
}

usort($books, 'book_title_cmp');
__pre_output('Books - After Sorting by Title', $books);





//////////////////////////////////////////////////////////////////////////
//*

// It's important to note that usort, much like any of the other php sort functions, sorts in-place.
// This means that instead of the function returning a separate value, the parameter passed in gets sorted.
// If you need to maintain a copy of the array in the original, you must make a copy first and then
// run your sort command.

$books = array(
    array('title' => 'The Fantastic Light', 'author' => 'Terry Pratchett', 'year' => 1997),
    array('title' => 'Daemon', 'author' => 'Daniel Suarez', 'year' => 2006),
    array('title' => 'Eric', 'author' => 'Terry Pratchett', 'year' => 1990),
);


// Create our array copy
$books_sorted = $books;
usort($books_sorted, 'book_title_cmp');


__pre_output('Unsorted Books Array', $books);
__pre_output('Sorted Books Array', $books_sorted);


