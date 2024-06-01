<?php

$servername = "sql6.freesqldatabase.com";
$username = "sql6700012";
$password = "D3gevjgE4F";
$dbname = "sql6700012";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

function checkHashPassword($userPassword, $hash) {
    return password_verify($userPassword, $hash);
}



$conn->close();
?>