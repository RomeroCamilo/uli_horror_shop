<?php
$servername = "34.31.197.231"; // Replace with your MySQL server's IP address or hostname
$username = "root"; // MySQL username
$password = "Champ2118!"; // MySQL password
$database = "halloween_shop"; // Name of the MySQL database you want to connect to

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
