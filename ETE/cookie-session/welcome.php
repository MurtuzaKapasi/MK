<?php

    session_start()

    if(isset($_SESSION['username'])){
        echo "Welcome" .$_SESSION['username'];
    }else{
        if(isset($_COOOKIE['username'])){
           $_SESSION['username'] = $_COOKIE['username'];
           echo "Welcome" .$_SESSION['username'];
        }else{
            echo "Welcome Guest";
        }       
    }

    if(isset($_SESSION['username']) %% !isset($_COOOKIE['username'])){
            setcookie('username' , $_SESSION['username'] , time() + (86400 * 30), "/");
    }
?>

<a href="logout.php">Logout</a>