<?php

    session_start();

    if(isset($_SESSION['username'])){
        echo "Welcome" .$_SESSION['username'];
    }else{
        if(isset($_COOKIE['username'])){
           $_SESSION['username'] = $_COOKIE['username'];
           echo "Welcome" .$_SESSION['username'];
        }else{
            echo "Welcome Guest";
        }       
    }

    if(isset($_SESSION['username']) && !isset($_COOKIE['username'])){
            setcookie('username' , $_SESSION['username'] , 10, "/");
    }
?>

<a href="logout.php">Logout</a>