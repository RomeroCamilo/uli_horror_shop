<?php
// Your database connection details
$servername = "34.31.197.231"; // Replace with your MySQL server's IP address or hostname
$username = "root"; // MySQL username
$password = "Champ2118!"; // MySQL password
$database = "halloween_shop"; // Name of the MySQL database you want to connect to 


$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming user_id is 4
$user_id = 4;

// Check if cart_id is provided via POST method
if(isset($_POST['cart_id'])) {
    // Prepare and execute SQL statement to delete the item from the cart
    $cart_id = $_POST['cart_id'];
    $sql = "DELETE FROM cart WHERE cart_id = ? AND user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $cart_id, $user_id);

    if ($stmt->execute()) {
        // Redirect back to cart.php after successful removal
        header("Location: cart.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect to cart.php if cart_id is not provided
    header("Location: cart.php");
    exit();
}
?>