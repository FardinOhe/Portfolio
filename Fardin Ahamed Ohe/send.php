<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "info";

// Create connection
$conn = new mysqli($localhost, $username, '', $info);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yourname = $_POST["yourname"];
    $age = $_POST["age"];

    // Insert data into the database
    $sql = "INSERT INTO form_data (yourname, age) VALUES ('$yourname', $age)";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
