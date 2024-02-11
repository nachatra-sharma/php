<?php

$name = $_POST['name'];

$conn = mysqli_connect('localhost', 'root', '', 'test');

$sql = "INSERT into students (name) values ('$name')";

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}
