<!-- Building Connection -->
<?php
$conn = mysqli_connect("localhost","root","","crud");
if(!$conn) {
    echo "can't connect to database....";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            text-align: center;
        }
        table thead tr th {
            padding: 10px;
        }
        table tbody tr td {
            padding: 10px;
        }
        h2{
            text-align:center;
            padding: 30px 0px;
        }
    </style>
</head>
<body>
    <h2>Reading Database</h2>
    <?php 
    $sql = "SELECT * FROM info";
    $result = mysqli_query($conn, $sql);
    ?>
    <table border=1>
        <thead>
            <tr>
                <th>S. No.</th>
                <th>Name</th>
                <th>Address</th>
                <th>Class</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $row['sid'] ?></td>
                    <td><?php echo $row['sname']?></td>
                    <td><?php echo $row['saddress'] ?></td>
                    <td><?php echo $row['sclass']?></td>
                    <td><?php echo $row['sphone']?></td>
                </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</body>
</html>