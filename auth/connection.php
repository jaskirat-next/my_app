<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users1910";

$conn = mysqli_connect($servername, $username, $password, $database);
if($conn){
    echo "Connected Successfully";
}
?>