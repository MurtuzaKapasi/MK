
<?php
session_start();

// Check if the user is already logged in
if(isset($_SESSION["user_name"])) {
    echo "Welcome ".$_SESSION["user_name"];
} else {
    // Check if the username is stored in a cookie
    if(isset($_COOKIE["user_name"])) {
        $_SESSION["user_name"] = $_COOKIE["user_name"];
        echo "Welcome ".$_SESSION["user_name"];
    } else {
        echo "Welcome Guest";
    }
}

// Set a cookie with the username if it's not already set
if(!isset($_COOKIE["user_name"]) && isset($_SESSION["user_name"])) {
    setcookie("user_name", $_SESSION["user_name"], time() + (86400 * 30), "/"); // 86400 = 1 day
}

?>
<br><br>
<a href="logout.php">Logout</a>
