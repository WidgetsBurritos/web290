<?php
/**
 * Printf/sprintf
 */


// this is just a helper file I made to simplify the code on these various examples.
// any functions that start with two underscores, come from top.php
include_once("_top.php");


// Suppose we need to be a bit more restrictive with our string formats.   
// Suppose we have three variables for a product and our $quantity and $price variables 
// managed to get malformed by a hacker.
/*
$product_name = 'Bounty Paper Towels';
$quantity = "-3XYZ";
$price = "xa#5.99xyz"; 




// Let's say we want to output the following: 
print <<<HTML
<div class="product">
    <div class="product_name">$product_name</div>
    <div class="quantity">$quantity</div>
    <div class="price">$price</div>
</div>
<br /><br />
HTML;
//*/

// We output the malformed string just as it's entered.  If hacker inserted something malicious, we may have just 
// opened our site or the user's browser to malicious attacks. Using printf we can explicitly specify our string format. 
// %s = text strimg
// %d = standard integer
// %f = floating point
// %0.#f = floating point to specified significant digits. 

// See book for more type specifiers.

/*
printf('<div class="product">
    <div class="product_name">%s</div>
    <div class="quantity">%d</div>
    <div class="price">%.2f</div>
</div>
<br /><br />
', $product_name, $quantity, $price);
//*/


// sprintf is the same as printf, except it returns a string instead of directly outputting it. 



/*/
$x = sprintf('<div class="product">
    <div class="product_name">%s</div>
    <div class="quantity">%d</div>
    <div class="price">%.2f</div>
</div>
<br /><br />
', $product_name, $quantity, $price);

print $x;
//*/