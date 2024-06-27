<?php

$server   = "localhost";
$username = "root";
$password = "";
$database = "mediastar_db"; 


$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    die("Error: " . mysqli_connect_error());
};
?>