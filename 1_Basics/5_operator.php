<?php 
// unary operators --->> ++ --

// pre increment/decrement operator
$x = 1;
echo ++$x; // 2 --> print 2
echo '<br/>';
echo $x; // 2
echo '<br/>';
echo --$x; // 1 --> print 1
echo '<br/>';
echo $x; // 1
echo '<br/>';

// post increment/decrement operator
$y = 5;
echo $y++; // print 5 --> increase = 6
echo '<br/>';
echo $y; // print 6
echo '<br/>';
echo $y--; // print 6 --> decrease = 5
echo '<br/>';
echo $y; // print 5
echo '<br/>';

// binary operator

// arithmetic operator (+, -, /, *, %, **)
$num1 = 10;
$num2 = 5;
echo $num1 + $num2; // 15
echo '<br/>';
echo $num1 - $num2; // 5
echo '<br/>';
echo $num1 * $num2; // 50
echo '<br/>';
echo $num1 / $num2; // 2
echo '<br/>';
echo $num1 % $num2; // 0
echo '<br/>';
echo 2 ** 3; // 8 
echo '<br/>';

// assignment operators (=, +=, -=, *=, /=, **=, %=)
$firstName = 'Nachatra';
$lastName = 'Sharma';
echo $firstName .= $lastName;
echo '<br/>';

// comparison operators (>, <, >=, <=, ==, === ,!=, !==, <=>, <>, ??, ?:)
$first = 5;
$second = 10;
echo var_dump($first > $second);
echo '<br/>';
echo var_dump($first < $second);
echo '<br/>';
echo var_dump($first >= $second);
echo '<br/>';
echo var_dump($first <= $second);
echo '<br/>';
echo var_dump(2 == '2');
echo '<br/>';
echo var_dump(2 === '2');
echo '<br/>';
echo var_dump(2 != '2');
echo '<br/>';
echo var_dump(2 !== '2');
echo '<br/>';
echo var_dump(2 == '2');
echo '<br/>';
echo var_dump(3 <> '3'); // lossly not equal to operator
echo '<br/>';
echo var_dump(3 <=> 10); // -1
echo '<br/>';
echo var_dump(13 <=> 10); // 1
echo '<br/>';
echo var_dump(3 <=> '3'); // 0 == lossly checking
echo '<br/>';
$age = 10;
$result = ($age < 18) ? 'you are not an adult' : 'you are a adult';
echo $result;
echo '<br/>';

// Error control operator @
$x = file('result.txt'); // give an error 
$x = @file('result.txt'); // not give an error
echo '<br/>';

// bitwise operator
$a  = 6; // 110
$b = 3; // 011
/**
 *   1 1 0
 * & 0 1 1
 * -------
 *   0 1 0 --> 2
 */
var_dump($a & $b); // print 2
echo '<br/>';

// array operators
$arr1 = ['a', 'b', 'c'];
// $arr2 = ['d', 'e', 'f'];
$arr2 = [4 => 'd', 5 => 'e', 6 => 'f']; // let's make indexing diff
$arr3 = $arr1 + $arr2; // same index can't union
echo '<pre>';
echo var_dump($arr3);
echo '</pre>';
