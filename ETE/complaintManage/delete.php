<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Complaint</title>
</head>
<body>
    <form method="POST">

        <label for="id">Enter Complaint ID</label>
        <input type="text" name="id" id="id">

        <input type="submit" name="submit" value="Delete">
        
</form>
<?php

$conn = mysqli_connect("localhost", "root", "", "murtuza") or die("Connection Error");


if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $sql = "DELETE FROM customerComplaint WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
</body>

</html>