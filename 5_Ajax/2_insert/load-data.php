<?php

$conn = mysqli_connect("localhost", "root", "", "test");

$sql = "SELECT * from students";

$result = mysqli_query($conn, $sql);

$output = "";

if (mysqli_num_rows($result) > 0) {
    $output .= '<tr>
    <td>Id</td><td>Name</td></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr><td>{$row['id']}</td><td>{$row['name']}</td></tr>";
    }
    mysqli_close($conn);
} else {
    echo "No Data";
}

echo $output;