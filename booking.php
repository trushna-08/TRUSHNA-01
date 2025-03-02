<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelworld";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$destination = htmlspecialchars($_POST['destination']);
$date = htmlspecialchars($_POST['date']);
$people = intval($_POST['people']); // Ensure it's an integer

// Insert data into the database using prepared statements
$stmt = $conn->prepare("INSERT INTO bookings (destination, date, people) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $destination, $date, $people);

if ($stmt->execute()) {
    echo "Booking successful!";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>