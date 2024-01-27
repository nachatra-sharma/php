<?php
// Array (3 types)
//Indexed array
$programmingLanguages = ['php','c++','c','python','javascript','java'];
echo $programmingLanguages[1];
echo '<br/>';
print_r($programmingLanguages);
echo '<br/>';
echo var_dump(isset($programmingLanguages[7]));
echo '<br/>';
$programmingLanguages[0] = 'nodejs';
echo $programmingLanguages[0];
echo '<br/>';
var_dump($programmingLanguages);
echo '<br/>';
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
echo count($programmingLanguages);
echo '<br/>';

$programmingLanguages[] = 'C++'; // add in the last
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

array_push($programmingLanguages, 'Go', 'Laravel'); // push on the last index of an array

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// Associative Array

$name = [
    'firstName' => 'Nachatra',
    'lastName' => 'Sharma',
];
echo $name['lastName'];
echo '<br/>';
echo '<pre>';
print_r($name);
echo '</pre>';

// Multidimensional Array

$programmingLang = [
    'php' => [
        'creator' => 'Rasums Lerdorf',
        'extension' => '.php',
        'version' => [
            ['version' => 8, 'release date' => 'Nov. 26 2020'],
            ['version' => 7.4, 'release date' => 'Nov. 28 2019'],
        ],
    ],
];

echo $programmingLang['php']['version'][0]['release date'];

/**
 * 
 * if we have same key the last key override the others
 * 
 */

$array = ['a','b','c', 50 => 'd','e'];

echo '<pre>';
print_r($array);
echo '</pre>';

echo array_pop($array); // remove element from the last index

echo '<pre>';
print_r($array);
echo '</pre>';

echo array_shift($array); // remove from begining of an array - reindexing happens here

echo '<pre>';
print_r($array);
echo '</pre>';

echo array_unshift($array, '0', '1');

echo '<pre>';
print_r($array);
echo '</pre>';

// unset($array);
// print_r($array); 

var_dump(array_key_exists(5, $array));
echo '<br/>';
var_dump(isset($array[4]));