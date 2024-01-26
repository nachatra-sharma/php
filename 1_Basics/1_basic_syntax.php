<?php

// printing out things
echo "hello world\n";
print "Nakshu Sharma\n";
echo 'hello', ' ', 'world' , '<br/>';

// string concatenation
$lastName = 'sharma';
echo 'Nachatra '. $lastName;

// checking double quote and single quote use
$firstName = "Naksh";
echo "Hello $firstName";

// assign by value
$x = 1;
$y = $x;
$x = 2;
echo $y;

// assign by reference
$a = 1;
$b = &$a;
$a = 2;
echo $b;

?>

<?php

//printing variable values using echo
$num1 = 5;
$num2 = 10;
echo $num1 . ' ' . $num2;

// comments in php

// single line comment

# single line comment

/*
multiple line comment
*/

/**
 * 
 * this comment is used for documentation
 * 
 */
?>