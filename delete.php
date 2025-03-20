<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn = new mysqli("localhost", "root", "", "mm");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "DELETE FROM register WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully'); window.location.href='view.php';</script>";
    } else {
        echo "<script>alert('Error deleting record'); window.location.href='view.php';</script>";
    }
    
    $stmt->close();
    $conn->close();
}
?>
