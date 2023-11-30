<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_details";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die(error_reporting(0));
}
?>