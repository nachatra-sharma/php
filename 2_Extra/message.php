<?php 
$msg = "Nachatra Sharma";

$encode =  convert_uuencode($msg);
echo $encode . '<br/>';
echo '<br/>';
$decode = convert_uudecode($encode);
echo $decode . '<br/>'; 