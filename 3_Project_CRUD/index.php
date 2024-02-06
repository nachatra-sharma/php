<?php

include("partial/connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <div>
        <table border = 1 style="border-collapse: collapse;">
            <?php 
            $sql = "SELECT * FROM `info`"; // sql query 
            $result = mysqli_query($conn, $sql); // result
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['sid'];
                    $name = $row['sname'];
                    $address = $row['saddress'];
                    $class = $row['sclass'];
                    $phone = $row['sphone'];
                    ?>
                    <tr>
                        <td style="padding:20px;"><?php echo $id; ?></td>
                        <td style="padding:20px;"><?php echo $name; ?></td>
                        <td style="padding:20px;"><?php echo $address; ?></td>
                        <td style="padding:20px;"><?php echo $class; ?></td>
                        <td style="padding:20px;"><?php echo $phone; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
