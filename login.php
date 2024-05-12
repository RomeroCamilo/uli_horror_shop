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

// Retrieve username and password from form submission
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute SQL statement to check if the user exists
$stmt = $conn->prepare("SELECT user_id FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows > 0) {
    // Fetch the user's data
    $row = $result->fetch_assoc();
    // Store user_id in session variable
    $_SESSION['user_id'] = $row['user_id'];
    // Redirect to Main Menu.html
    header("Location: Main Menu.html");
    exit;
} else {
    echo "User not found or incorrect password. Please try again.";
}

// Close the connection
$stmt->close();
$conn->close();
?>