<?php
// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "vnr";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["us1"];
    $phno = $_POST["p1"];
    $vehicle_no = $_POST["v1"];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO en6 (name, phno, vehicle no) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $phno, $vehicle no);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>