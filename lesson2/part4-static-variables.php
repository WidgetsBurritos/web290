<?php
/**
 * Static Variables
 */


// this is just a helper file I made to simplify the code on these various examples.
// any functions that start with two underscores, come from top.php
include_once("_top.php");






////////////////////////////////////////////////////////////////////////////
/*
 * Suppose we have some button that whenever it is clicked, it calls some function pressButton() that keeps
 * track of the number of times the button was pressed.
 */
/*

$pressCount = 0;

function pressButton() {
    $pressCount++;
    return $pressCount;
}


// press the button 5 times
for ($i=0; $i<5; $i++) {
    __pre_output('Button Count', pressButton()."\n");
}

//*/




////////////////////////////////////////////////////////////////////////////
/*
 * So it appears we have an undefined variable. Why? 
 *
 *
 * Variable scope!  
 * See: http://php.net/manual/en/language.variables.scope.php
 *
 * Variables called within a function, by default, are called
 * within the scope of just that function.  To fix this, we need to change the
 * scope. Well one option would be to reference the "global" scope. 
 *
 */
/*

$pressCount = 0; 

function pressButton() {
    global $pressCount;
    $pressCount++;
    return $pressCount;
}


// press the button 5 times
for ($i=0; $i<5; $i++) {
    __pre_output('Button Count', pressButton()."\n");
}

//*/








////////////////////////////////////////////////////////////////////////////
/*
 * Great!  It works.... except that global variables are generally frowned upon.
 *
 * See this for detailed explation of global scope: 
 * http://stackoverflow.com/questions/12445972/stop-using-global-in-php#12446305
 *
 * Additionally, what if we don't care about this variable, except within the context
 * of this one, function?  It's a waste of resources to allocate it for the entire script,
 * especially if these variables start accumulating.
 *
 * To solve this, we can use "static variables":
 * http://php.net/manual/en/language.variables.scope.php#language.variables.scope.static
 *
 * "A static variable exists only in a local function scope, but it does not lose its value when program
 *  execution leaves this scope. "
 *
 * We will see static keyword again when we come back to OOP strategies. 
 */
//*
function pressButton() {
    static $pressCount = 0;
    $pressCount++;
    return $pressCount;
}


// press the button 5 times
for ($i=0; $i<5; $i++) {
    __pre_output('Button Count', pressButton()."\n");
}


