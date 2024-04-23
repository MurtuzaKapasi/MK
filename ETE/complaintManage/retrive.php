<!-- retrive from database -->

<?php
$conn = mysqli_connect("localhost" , "root" , "" , "murtuza");

$result = mysqli_query($conn , "SELECT * FROM customerComplaint");

if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['id'] . " " . $row['name'] . " " . $row['email'] . " " . $row['complaint'] . "<br>";
    }
}

?>
