<?php
/**
 * Recursive functions
 */

include_once("_top.php");


////////////////////////////////////////////////////////////////////////////
// Recursive Functions - functions that call themselves
/*

n! is defined as n * (n-1) * (n-2) * .. * 1
e.g.           5! = 5 * 4 * 3 * 2 * 1 = 120

---------------------------------

Some rules about factorials:

Rule 1.) n! = n * (n-1)!

        For example:
        -- 4! = 4 * 3 * 2 * 1
        -- 5! = 5 * 4 * 3 * 2 * 1
        So
        -- 5! = 5 * 4!

Rule 2.) 0! = 1

Rule 3.) (negative)! = undefined

---------------------------------

So let's define our conditions:
- if $n <  0 -- then we have an error. Let's use -1 to represent an error.
- if $n == 0 -- then we should always return 1. This is our base case.
- if $n >  1 -- then we should multiple $n by the factorial of $n - 1.

---------------------------------
*/

function factorial ($n) {
    // We got a bad input so exit
    if ($n < 0) { return -1; }

    // 0! always = 1
    if ($n == 0) { return 1; }

    // n! = n * (n-1)!
    return $n * factorial($n-1);
}

// let's do a factorial of every number from 0 to 10
for ($i=0; $i<=10; $i++) {
    print $i . "! = " .factorial($i) . "<br />\n";
}
print "<br /><br />";




////////////////////////////////////////////////////////////////////////////
/*


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


// Suppose we want to output the title and year off all of our products and nest them inside a div such as:
// <div style="color: #cc0000;">Italian Job (2003)</div> tags

function recursive_titles($ary) {
    // First we determine if the title and year keys exist, if it does it means we output our title/year
    if (isset($ary['title']) && isset($ary['year'])) {
        return '<div style="color: #cc0000;">'.$ary['title'] . ' (' . $ary['year'].')</div>'."\n";
    }

    // If title and year don't exist then that means we are in one of the outer layers of our array, so we should
    // loop through all the elements and pass each element along to this function to test it again.
    $html = '';

    foreach ($ary as $item) {
        $html .= recursive_titles($item);
    }
    return $html;
}


print recursive_titles($products);

print '<HR />';




////////////////////////////////////////////////////////////////////////////
/*
// But what happens if you have a malformed $product array?
$products_bad = array(
    'books' => array(
        array(
            'title' => 'The Fantastic Light', 'author' => 'Terry Pratchett'
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
            'director' => 'Peter Collinson', 'year' => 1969
        )

    )
);

print recursive_titles($products_bad);
// we have an error and only 5 of the titles displayed instead of 6. Why did this happen?


print '<HR />';






////////////////////////////////////////////////////////////////////////////
/*
// Fixing our problem


function recursive_titles_fixed($ary) {
    // we changed our condition from AND to OR
    if (isset($ary['title']) || isset($ary['year'])) {
        $html = '<div style="color: #cc0000;">';

        // Check if our title exists, if not, then
        if (isset($ary['title'])) {
            $html .= $ary['title'];
        } else {
            $html .= '<del>[untitled]</del>';
        }

        //
        if (isset($ary['year'])) {
            $html .= ' (' . $ary['year'].')';
        } else {
            $html .= ' <del>(n/a)</del>';
        }
        $html .= '</div>'."\n";
        return $html;
    }

    // If title and year don't exist then that means we need
    $html = '';

    // We need to make sure $ary actually is in fact an array
    if (!is_array($ary)) return $html;

    foreach ($ary as $item) {
        $html .= recursive_titles_fixed($item);
    }
    return $html;
}


print recursive_titles_fixed($products_bad);




//*/