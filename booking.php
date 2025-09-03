<?php
$hostname = "localhost";
$user = "root";
$pass = "";
$db = "db";

$link = mysqli_connect($hostname, $user, $pass, $db) or die ("Could not connect:  ");

$action = $_POST['submit'];

if ($action == "add"){
    $placecode = $_POST['placecode'];
    $tid = $_POST['TID'];
    $taid = $_POST['TAID'];
    $DriverID = $_POST['DriverID'];
    $sql = "INSERT INTO `booking`(`TID`, `placeCode`, `DriverID`, `TAID`) VALUES ('$tid', '$placecode', '$DriverID', '$taid')";
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
    $sql = "DELETE FROM booking WHERE bid = '$id'";
    $res = mysqli_query($link, $sql);
    if($res){
        echo "Query successful <br>";
        echo "<a href='admin.php'>Click here</a> to go back.";
    }else {
        echo "Error! Query unsuccessful! <br>";
        echo "<a href='admin.php'>Click here</a> to go back.";

    }
}