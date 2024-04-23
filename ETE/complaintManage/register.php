<?php
$conn = mysqli_connect("localhost", "root", "", "murtuza") or die("Connection Error");

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$complaint = $_POST["complaint"];

$sql = "INSERT INTO customerComplaint VALUES ('$id', '$name', '$email', '$complaint')";

if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";
    echo "<a href='retrive.php' > GOTO Dashboard</a>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
