<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Employee Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Update Employee Form</h1>
        <form method="post" action="update.php">
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
        </form>
    </div>
</body>
</html>
