<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$conn = mysqli_connect("localhost", "root", "", "test") or die("connection lost");

$sql = "SELECT * from students";

$result = mysqli_query($conn, $sql);
$output = '';
if (mysqli_num_rows($result) > 0) {
    $output .= '<tr>
                <td>Id</td>
                <td>Name</td>
            </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
            </tr>";
    }
    mysqli_close($conn);
} else {
    $output .= "<tr><td colspan='2'>No records found</td></tr>";
}

echo $output;