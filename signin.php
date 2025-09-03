<?php
$username = "admin";
$pass = "admin";

if($_POST['username'] == $username && $pass = $_POST['password']){
    header("location: admin.php");
} else {
    echo "Invalid username/password!<br>";
    echo "<a href='index.php'>Click here</a> to go back";
}