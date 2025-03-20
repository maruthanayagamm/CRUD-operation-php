<?php
$server = "localhost";  // Use "127.0.0.1" if "localhost" doesn't work
$username = "root";
$password = "";
$database = "mm";

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Database connected successfully!";
}

mysqli_close($conn);
?>
