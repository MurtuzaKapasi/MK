<!-- Submit php -->
<?php
$conn = mysqli_connect("localhost" , "root" , "" , "murtuza");

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$complaint = $_POST["complaint"];

$sql = mysqli_query($conn , "INSERT INTO customerComplaint VALUES ('$id' , '$name' , '$email' , '$complaint')");

    if($sql){
        echo "Record Inserted Successfully";
        header("location:retrive.php");
    }
    else
        echo "Not Inserted";

    mysql_close($conn);
?>

