<?php


// database connection 

$servername = "localhost";
$username = "u246409167_shah";
$password = "Nn7Aa9Zz0Ii";
$db = "u246409167_shah";

// create connection 

$conn = new mysqli($servername, $username , $password, $db);

// check connection 

if($conn->connect_error)
{

    die("connection failed:" .$conn->connect_error );


}


?>

