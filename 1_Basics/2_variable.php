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
echo '<br/>';

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

// 1. string
$myName = "Nachatra Sharma";
echo $myName . " this is a string";
echo '<br/>';

// 2. Integer
$age = 21;
echo $age . ' this is a int';
echo '<br/>';

// 3. Float
$weight = 52.1;
echo $weight . ' this is a float'; 
echo '<br/>';

// 4. Boolean
$isReal = true;
echo $isReal . ' this is a boolean';
echo '<br/>';

// 5. Null 
$isNull = Null;
echo $isNull;
echo '<br/>';

// 6. Array
$arr = [1,2,3,4,5,6,7,'hello','naksh',true];
echo print_r($arr);
echo '<br/>';

// checking type
$fullName = 'Nachatra Sharma';
echo gettype($fullName); 
echo '<br/>';
echo var_dump($fullName);
echo '<br/>';

// type casting
function sum(int $first, $second) {
    return $first + $second;
}
echo sum(3.5, 3);
echo '<br/>';

// strict mode in php

// declare(strict_types = 1);
function add(int $x, int $y)
{
    return $x + $y;
}

echo add(1, 2);
echo '<br/>';


?>