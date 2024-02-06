<?php 

// $y = true;
// $result = $y == true ? "It is True" : "It is False";
// echo $result;

// $x = 1;
// while($x <= 10){
//     echo "$x ";
//     $x++;
// }


// $x = 1;
// do {
//   echo $x . " ";
//   $x++;
// }while($x <= 10);

// for($i = 1; $i <= 10; $i++){
//   echo "$i ";
//}

$arr1 = [1,2,3,4];
$arr2 = [5,6,7,8];

//print_r(array_replace($arr1,$arr2));
//print_r($arr1);

echo array_pop($arr1);
//array_pop($arr1);
print_r($arr1);

echo array_push($arr1, 100);
print_r($arr1);

