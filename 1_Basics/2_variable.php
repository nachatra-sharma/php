<?php 
// constant 

define("STATUS_PAID","yes"); // define function
echo "Paid " . STATUS_PAID;
echo '<br/>';
const STATUS_FREE = "no"; // const keyword
echo "paid " . STATUS_FREE;
echo '<br/>';

/**
 * Keep note *******************************
 * 
 * we can't use constant variable inside control structure which is define using const keyword.
 * but we can use constant variable inside control structure which is define using define fxn.
 *
 */

 if(true){
    // const rupay = true; 
    define("UPI",true);
 }

//  pre define constants
echo PHP_VERSION;
echo '<br/>';

// magic constants 
echo __LINE__;
echo '<br/>';

// variable varibale
$foo = 'bar';
$$foo = 'baz';
echo $bar . ' ' . $$foo;

// data types
/**
 * There are eight data types in PHP
 * 1. String
 * 2. Integer
 * 3. Float
 * 4. Boolean
 * 5. Null
 * 6. Resource
 * 7. Array
 * 8. Object
 */
?>