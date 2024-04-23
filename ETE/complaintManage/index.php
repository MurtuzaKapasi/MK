<!--  Develop a app using PHP and MySQl for Complaint Management System. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Registration form</title>
</head>
<body>
    <h1>Customer Complaint Registration Form</h1>
    <form action="Complaint.php" method="post">
    <label for="id">ID: </label>
    <input type="text" name="id" id="id">
    <br>
    <label for="name">Name: </label>
    <input type="text" name="name" id="name">
    <br>
    <label for="email" >Email: </label>
    <input type="text" name="email" id="email">
    <br>
    <label for="complaint">Complaint: </label>
    <input type="textarea" name="complaint" id="complaint" placeholder="Enter Complaint">
    <br>
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>