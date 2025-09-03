<?php
$hostname = "localhost";
$user = "root";
$pass = "";
$db = "db";

$link = mysqli_connect($hostname, $user, $pass, $db) or die ("Could not connect:  ");

$action = $_POST['submit'];

if ($action == "add"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $rating = $_POST['rating'];
    $sql = "INSERT INTO `touragent`(`Name`, `ID`, `phone`, `rating`) VALUES ('$name', '$id', '$phone', '$phone')";
    $res = mysqli_query($link, $sql);
    if($res){
        echo "Query successful <br>";
        echo "<a href='admin.php'>Click here</a> to go back.";
    }else {
        echo "Error! Query unsuccessful! <br>";
        echo "<a href='admin.php'>Click here</a> to go back.";

    }
} else if($action == "delete"){
    $id = $_POST['id'];
    $sql = "DELETE FROM touragent WHERE id = '$id'";
    $res = mysqli_query($link, $sql);
    if($res){
        echo "Query successful <br>";
        echo "<a href='admin.php'>Click here</a> to go back.";
    }else {
        echo "Error! Query unsuccessful! <br>";
        echo "<a href='admin.php'>Click here</a> to go back.";

    }
}