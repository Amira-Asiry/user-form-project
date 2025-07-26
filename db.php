<?php
$host = "localhost";
$user = "root";
$password = ""; // غيّريها لو كانت مختلفة
$dbname = "user_data";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
