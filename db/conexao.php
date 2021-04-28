<?php
$host = "localhost";
$db = "hf_downloads";
$user = "root";
$pass = "";

$conn = mysqli_connect($host, $user, $pass, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>