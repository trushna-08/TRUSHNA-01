<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default username for MySQL
$password = ""; // Default password for MySQL
$dbname = "travelworld";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$destination = $_POST['destination'];
$date = $_POST['date'];
$people = $_POST['people'];

// Insert data into the database
$sql = "INSERT INTO bookings (destination, date, people) VALUES ('$destination', '$date', '$people')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>