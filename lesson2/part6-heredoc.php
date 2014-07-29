<?php
/**
 * Heredoc
 */


// this is just a helper file I made to simplify the code on these various examples.
// any functions that start with two underscores, come from top.php
include_once("_top.php");



/*
Suppose you want to store some HTML of the following format into variable $x:

<div class="address">
    <div class="address_number">144</div>
    <div class="street_name">Maple Dr.</div> 
    <div class="city">D'Hanis</div>
    <div class="state">TX</div>
    <div class="zip">78850</div>
</div>


*/


/*
// This one has a syntax error because of the quotation marks
$x = "<div class="address">
    <div class="address_number">144</div>
    <div class="street_name">Maple Dr.</div> 
    <div class="city">D'Hanis</div>
    <div class="state">TX</div>
    <div class="zip">78850</div>
</div>";
print $x; 

//*/


/*
// To fix it you have to escape every single quotation mark
$x = "<div class=\"address\">
    <div class=\"address_number\">144</div>
    <div class=\"street_name\">Maple Dr.</div> 
    <div class=\"city\">D'Hanis</div>
    <div class=\"state\">TX</div>
    <div class=\"zip\">78850</div>
</div>";
print $x;

//*/






/*
// This one has a syntax error because of the apostrophe
$x = '<div class="address">
    <div class="address_number">144</div>
    <div class="street_name">Maple Dr.</div> 
    <div class="city">D'Hanis</div>
    <div class="state">TX</div>
    <div class="zip">78850</div>
</div>';
print $x; 

//*/


/*
// To fix it we have to escape the apostrophe
$x = '<div class="address">
    <div class="address_number">144</div>
    <div class="street_name">Maple Dr.</div> 
    <div class="city">D\'Hanis</div>
    <div class="state">TX</div>
    <div class="zip">78850</div>
</div>';
print $x; 

//*/





// Heredoc provides a way to output the string without needing to escape strings
/*
$x = <<<HTML
<div class="address">
    <div class="address_number">144</div>
    <div class="street_name">Maple Dr.</div> 
    <div class="city">D'Hanis</div>
    <div class="state">TX</div>
    <div class="zip">78850</div>
</div>
HTML;


//*/




// Just like any variable declaration, you can print it out directly
/*
print <<<HTML
<div class="address">
    <div class="address_number">144</div>
    <div class="street_name">Maple Dr.</div> 
    <div class="city">D'Hanis</div>
    <div class="state">TX</div>
    <div class="zip">78850</div>
</div>
HTML;


//*/

// Heredoc is very restrictive on formatting though.  Minor changes could cause syntax error. 
// Read more about it here: http://www.tuxradar.com/practicalphp/2/6/3






