<?php 
function display($number) {
    if($number < 5) {
        echo $number . "<br />";
        display($number + 1);
    }
    return "Done";
}

echo display(1);

