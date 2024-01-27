<?php

// some extra info
$x = floor((0.1 + 0.7) * 10);
echo var_dump($x);
echo '<br/>';
$y = ceil((0.1 + 0.7) * 10);
echo var_dump($y);
echo '<br/>';
echo INF;
echo '<br/>';
echo NAN;
echo '<br/>';
echo PHP_INT_MAX + 1;
echo '<br/>';
echo var_dump(is_infinite(PHP_FLOAT_MAX*2));
echo '<br/>';

/**
* conclusion never compare direct floors
*/

// strings

$firstName = "Nachatra";
$lastName = "Sharma";
$name = $firstName . ' ' . $lastName;
echo $name;
echo '<br/>';
echo $name[5];
echo '<br/>';
echo $name[-1];
echo '<br/>';
$name[-1] = '0';
echo $name;
echo '<br/>';
echo var_dump(strlen($name));
echo '<br/>';

// HEREDOC and NOWDOC

// HEREDOC (" ") it took variable

$text = <<<TEXT
Line 1 $firstName
Line 2 $lastName
Line 3 $name
TEXT;
echo nl2br($text);
echo '<br/>';

// NOWDOC (' ') don't take variable

$text2 = <<<'TEXT'
Line 1
Line 2
Line 3
TEXT;
echo nl2br($text2);
echo '<br/>';

// NULL

$a = null;
echo var_dump($a);
echo '<br/>';
var_dump($a === null);
echo '<br/>';
var_dump($z);
echo '<br/>';
$age = 21;
echo $age;
echo '<br/>';
unset($age);
// echo var_dump($age);
?>