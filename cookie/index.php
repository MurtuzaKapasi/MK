<?php 
session_start();
 include('conn.php')
?>


<form action="" method="POST">

 <label for="">Username: </label>
 <input type="text" name="username"><br> <br>


 <label for="">Password: </label>
 <input type="text" name="password"><br><br>

  <input type="submit" name='submit' value="LOGIN">


</form>

<?php

if(isset($_POST['submit']))
{
  $user=$_POST['username'];
  $psd=$_POST['password'];
  $data=mysqli_query($conn,"SELECT * FROM student where username='$user'");
  $total=mysqli_num_rows($data);
  // echo $total;
  if($total==1)
  {
    echo "Logged innn";
    $_SESSION["user_name"]=$user;
   header('location:welcome.php');
  }
  else{
    echo "login failed";
  }

}
?>
