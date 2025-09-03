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
    $vehicle = $_POST['vehicle'];
    $vno = $_POST['vehicle_no'];
    $sql = "INSERT INTO `driver`(`Name`, `ID`, `phone`, `rating`, `vehicle`, `vehicle no`) VALUES ('$name', '$id', '$phone', '$phone', '$vehicle', '$vno')";
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
    $sql = "DELETE FROM driver WHERE id = '$id'";
    $res = mysqli_query($link, $sql);
    if($res){
        echo "Query successful <br>";
        echo "<a href='admin.php'>Click here</a> to go back.";
    }else {
        echo "Error! Query unsuccessful! <br>";
        echo "<a href='admin.php'>Click here</a> to go back.";

    }
}