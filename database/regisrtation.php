<?php
$conn = mysqli_connect("localhost" , "root" , "" , "murtuza" ) or die("Error in connection");

$name = $_POST["name"];
$pass = $_POST["password"];

$sql = mysqli_query($conn , "INSERT INTO employeeRegistration VALUES ('$name' , '$pass')");
if($sql)
    echo "Record Inserted Successfully";
else    
    echo "Not Inserted";


?>