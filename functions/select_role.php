<?php
include("../settings/connections.php");

$sql_query = "SELECT * FROM family_name";

$result_query = $connection->query($sql_query);

if ($result_query === false) {
    
    echo 'Connection Error!';
    exit(); 
}


echo 'Connection Successful';
?>
