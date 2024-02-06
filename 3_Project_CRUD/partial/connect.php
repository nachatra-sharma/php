<!-- Data Base Connection -->

<?php

$conn = mysqli_connect("localhost", "root", "", "crud");

if(!$conn){
    echo "Connection Failed";
}