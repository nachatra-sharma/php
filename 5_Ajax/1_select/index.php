<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
</head>
<body>
    <h1>Load Student Table Data | SELECT Query</h1>
<table id="table-data" border="1" cellspacing="0" cellpadding="10px">
</table>
<button type="submit" name="submit" id="load-data">Load</button>
<!-- jquery -->
<script src="../jquery/jquery.js"></script>
<script src="../jquery/jquery.min.js"></script>
<!-- too load data from backend to frontend -->
<script>
    $(document).ready(function(){
        $("#load-data").on("click", function(e){
            $.ajax({
                url: 'data-load.php',
                type: "POST",
                success: function(data){
                    $("#table-data").html(data);
                }
            })
        })
    })
</script>
</body>
</html>