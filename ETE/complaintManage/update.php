<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Complaint</title>
</head>
<body>
    <h1>Update Complaint</h1>
    <form method="POST">
        <label for="id">ID:</label>
        <input type="text" name="id" id="id">
        <br>
        <label for="complaint">Updated Complaint:</label>
        <textarea name="complaint" id="complaint" rows="4" cols="50"></textarea>
        <br>
        <input type="submit" name="submit" value="Update">
    </form>
    <?php

    $conn = mysqli_connect("localhost" , "root", "" , "murtuza");

// Check if form is submitted
if (isset($_POST["submit"])){
    $id = $_POST['id'];
    $complaint = $_POST['complaint'];

    // Update complaint in the database
    $sql = "UPDATE customerComplaint SET complaint = '$complaint' WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Complaint updated successfully <br>";
        echo "<a href='retrive.php' > Back to dashboard </a>";
    } else {    
        echo "Error updating complaint: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
</body>
</html>