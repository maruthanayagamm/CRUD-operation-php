<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mm";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];  // Get the ID
    $name = $_POST['name'];
    $gender = $_POST['gender'];

    // Update query using ID
    $sql = "UPDATE register SET name=?, gender=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $name, $gender, $id);

    if ($stmt->execute()) {
        echo "<script>
                alert('Record updated successfully');
                window.location.href = 'view.php';
              </script>";
    } else {
        echo "<script>
                alert('Error updating record: " . $conn->error . "');
                window.location.href = 'view.php';
              </script>";
    }
    
    $stmt->close();
}

$conn->close();
?>
