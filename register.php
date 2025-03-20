<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Employee Form</h1>
        <form method="post" action="reg.php">
            <label class="form-label"><b>ID</b></label>
            <input type="text" name="id" placeholder="Enter ID" class="form-control" required>
            <br>

            <label class="form-label"><b>Name</b></label>
            <input type="text" name="name" placeholder="Enter Name" class="form-control" required>
            <br>

            <label class="form-label"><b>Gender</b></label><br>
            <input type="radio" name="gender" value="male" required> Male
            <input type="radio" name="gender" value="female" required> Female
            <br><br>

            <input type="submit" class="btn btn-success" name="submit" value="Submit">
            <a href="up.php" class="btn btn-primary">Update</a>
            <a href="view.php" class="btn btn-info">View</a>
        </form>
    </div>
</body>
</html>
