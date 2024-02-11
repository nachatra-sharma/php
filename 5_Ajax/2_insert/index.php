<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax - Data Insert</title>
</head>
<body>
    <h1>Insert Data Through Ajax</h1>
    <form id="form">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <button type="submit" id="submit">Submit</button>
    </form>
    <table id="load-data" width="100%" style="margin-top:100px"; border="1" cellspacing="0" cellpadding="10px">
    </table>
    <script src="../jquery/jquery.js"></script>
    <script src="../jquery/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            function loadData(){
                $.ajax({
                    url: "load-data.php",
                    type: "POST",
                    success: function(data){
                        $("#load-data").html(data);
                    }
                })
            }
            loadData();
            $("#submit").on("click",function(e){
                e.preventDefault();
                let name = $('#name').val();
                $.ajax({
                    url: "insert-data.php",
                    type: "POST",
                    data: {
                        name: name,
                    },
                    success: function(data){
                        if(data == 1) {
                            loadData();
                            $("#form").trigger('reset');
                        }else {
                            alert("can't load");
                        }
                    }
                })
            })
        })
    </script>
</body>
</html>