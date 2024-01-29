<?php

include ("partials/helper_function.php");
#array methods

// array_map
$array = [1, 2, 3, 4, 5, 6, 7, 8];
$arr = array_map(fn($item) => $item * 2, $array);
echoPre($arr);

// array_chunk
$arr2 = array_chunk($array, 2);
echoPre($arr2);


// array_combine
$array1 = [1, 2, 3, 4]; // key 
$array2 = [5, 6, 7, 8]; // value
$arr3 = array_combine($array1, $array2);
echoPre($arr3);

// array filter 
$filterArray = [1,2,3,4,5,6,7,8,9];
$arr4 = array_filter($filterArray, fn($items) => $items % 2 === 0);
echoPre($arr4);

// array keys
$arr5 = array_keys($filterArray, '3');
echoPre($arr5);

//associative array -> asort will sort array in increasing order according to the value // ksort will sort according to keys
$sortArr = ['a' => 10, 'b' =>  12, 'c' =>  4, 'd' => 15, 'e' => 16, 'f' => 7, 'g' => 11, 'h' => 2];
asort($sortArr);
echoPre($sortArr);

// sort 
$sortNum = [1, 5, 2, 79, 2, 5];
sort($sortNum);
echoPre($sortNum);