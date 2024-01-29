<?php

function foo() {
    echo "hello <br/>";
}
foo();

function bar() {
    return 'Hello Naksh <br/>';
}
echo bar();

function outer() {
    echo "outer function <br/>";
    function inner() {
        echo 'inner function <br/>';
    }
    inner();
}
outer();

function sum(): int {
    return '1' + '2';
}
var_dump(sum());

function demo(): mixed {
    return 1; // we can return any data type
}

function demo2(): int|float|array {
    return [1,2,3]; // we can return data type such as int, float, and array
}

// function params

function add(int $a, int $b): int { // parameters
    return $a + $b;
}

echo '<br/>' . add(2, 3); // arguments

echo '<br/>';

function sub(int &$x, int | float $y){ 
    // & sign will change the original value because it take value as a refernce to original value;
    return $x - $y;
}

$x = 5.2;
$y = 2;

echo sub($x, $y); // passing by value 
echo '<br/>' . $x;

echo '<br/>';
function sample(int ...$numbers): int{ // spread operator
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

echo sample(1, 2, 3, 4, 5, 6.2, 7);

// Named arguments

function demo3(int $num1, int $num2): int{
    return $num1 - $num2;
}
echo '<br/>' . demo3(num2 : 43, num1 : 3);

echo '<br/>';

// variable scopes

$x = 5; // it is a global variable
include ('partials/global.php');
function scope($x){
    echo $x . '<br/>'; // local variable
    $x++;
    echo $x . '<br/>';
}

echo scope($x);
echo $x . '<br/>';

// function types 

// variable function
function multiply($x, $y) {
    return $x * $y;
}

$fun = 'multiply';

echo multiply(2, 5) . '<br />';

// anonymous function

$name = function (int $var1, int $var2): int{
    return $var1 + $var2;
};

echo $name(2, 6) . '<br/>';

$num = 10;

$greet = function(int|float ...$numbers) use ($num) : int|float{
    echo $num . '<br />';
    return array_sum($numbers);
};

echo $greet(2,3,4,5,6,7,8,9,1);

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];

$array = array_map(function ($element){
    return $element * 2;
}, $arr);

echo '<pre>';
print_r($array);
echo '</pre>';

// arrow functions

$arr2 = [1, 2, 3, 4];
$array2 = array_map(fn($number) => $number * 2, $arr2);
echo '<pre>';
print_r($array2);
echo '</pre>';

