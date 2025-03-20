<?php
$server = "localhost";
$uname = "root";
$pwd = "";
$db = "mm";

$con = mysqli_connect($server, $uname, $pwd, $db);

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];

    $query = "INSERT INTO register (id, name, gender) VALUES ('$id', '$name', '$gender')";

    if (mysqli_query($con, $query)) {
        echo "<script>
                alert('Data saved');
                window.location.href = 'view.php';
              </script>";
    } else {
        echo "<script>
                alert('Data not saved: " . mysqli_error($con) . "');
                window.location.href = 'view.php';
              </script>";
    }
}

mysqli_close($con);
?>
