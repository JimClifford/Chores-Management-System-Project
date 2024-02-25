<?php
include('../settings/connections.php');

function get_all_chores(){
    global $connection;
    $selectQuery = "SELECT * FROM chores";
    $result = $connection->query($selectQuery);
    
    if($result->num_rows > 0){
        return $result;
    }
    else{
        return null;
    }
}




?>