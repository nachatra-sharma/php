<?php 
// =========== Conditionals ============== 
// if / else / else if / elseif
$marks = 80;
if($marks >= 95) {
    echo 'A+';
}else if($marks >= 90) {
    echo 'A';
}else if($marks >= 85) {
    echo 'B+';
}else if($marks >= 80) {
    echo 'B';
}else if($marks >= 75) {
    echo 'C+';
}else if($marks >= 70) {
    echo 'C';
} else {
    echo 'F';
}
echo '<br/>';

// =============== Loops =================
// while, do while, for, foreach

// While loop -->> entry control
$i = 0;
while($i < 10) {
    echo $i . '<br/>';
    $i++;
}

// do while -->> exit control
$j = 11;
do {
     echo $j . '<br/>';
     $j++;
} while ($j <= 20);

// for loop 

for($k = 1; $k <= 10; $k++){
    echo $k . '<br/>';
}

// foreach 
$array = [1,2,3,4,5,6,7,8,9,0];
foreach($array as $item) {
    echo 'foreach ' . $item . '<br/>';
}

foreach($array as $key => $value) {
    echo 'key '. $key .' value '. $value .'<br/>';
}


// ============ break and continue ================

// break
for($key = 1; $key <= 10; $key++) {
    if($key % 2 === 0) {
        echo "Even <br/ >";
    }else if($key === 7){
        break;
    }else {
        echo $key . '<br/>';
    }
}

// continue 
for($value = 1; $value <= 10; $value++){
    if($value % 2 === 0) {
        continue;
    }else {
        echo $value . ' odd <br/>';
    }
}