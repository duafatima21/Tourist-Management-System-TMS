<?php
$hostname = "localhost";
$user = "root";
$pass = "";
$db = "db";

$link = mysqli_connect($hostname, $user, $pass, $db) or die ("Could not connect:  ");

$action = $_POST['submit'];

if ($action == "add"){
    $cnic = $_POST['cnic'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender= $_POST['gender'];
    $nation = $_POST['nationality'];
    $sql = "INSERT INTO `tourist`(`name`, `CNIC`, `phone`, `nationality`, `gender`, `address`) VALUES ('$name', '$cnic', '$phone', '$nation', '$gender', '$address')";
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
    $sql = "DELETE FROM tourist WHERE tourist_id = '$id'";
    $res = mysqli_query($link, $sql);
    if($res){
        echo "Query successful <br>";
        echo "<a href='admin.php'>Click here</a> to go back.";
    }else {
        echo "Error! Query unsuccessful! <br>";
        echo "<a href='admin.php'>Click here</a> to go back.";

    }
}