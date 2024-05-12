<?php
$servername = "34.31.197.231"; // Replace with your MySQL server's IP address or hostname
$username = "root"; // MySQL username
$password = "Champ2118!"; // MySQL password
$database = "halloween_shop"; // Name of the MySQL database you want to connect to

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

/// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect to Sign Up</title>
</head>
<body>
    <h2>Connection Successful!</h2>
    <p>Your connection to the database was successful.</p>
    <button onclick="window.location.href='signup.html'">Sign Up</button>

</body>
</html>