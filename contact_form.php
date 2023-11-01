<?php
// Database configuration
$servername = "localhost";
$username = "root";
$database = "James";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username,$database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $message = $_POST["Message"];

    // SQL query to insert data into the database
    $sql = "INSERT INTO contact_form (Name, Email, Message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

