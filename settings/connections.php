<?php

$servername = "127.0.0.1";
$username = 'root';
$password = "";
$dbname = "chore_mgt";

$connection = new mysqli($servername,$username,$password,$dbname);

if ($connection->connect_error){
    die("Connection failed, Connection Error:".$connection->connect_error);
}


echo "Connection to db status: Connection Successful";
?>