<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travelworld";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert contact data into the database
    $sql = "INSERT INTO contacts (email, message) VALUES ('$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for contacting us!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>