<?php
$servername = "127.0.0.1";
$username = "b32_15129989";
$password = "wanghao720";
$database = "b32_15129989_mzadalny";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>