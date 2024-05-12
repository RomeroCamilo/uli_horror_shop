<?php
$servername = "your_cloud_mysql_host";
$username = "root";
$password = "Champ2118!";
$database = "halloween_shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
