<?php
$hostname = "localhost";
$user = "root";
$pass = "";
$db = "db";

$link = mysqli_connect($hostname, $user, $pass, $db) or die ("Could not connect:  ");

$action = $_POST['submit'];

if ($action == "add"){
    $code = $_POST['placecode'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $rating = $_POST['rating'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $sql = "INSERT INTO `places`(`placecode`, `name`, `city`, `rating`, `country`, `address`) VALUES ('$code', '$name', '$city', '$rating', '$country', '$address')";
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
    $sql = "DELETE FROM places WHERE id = '$id'";
    $res = mysqli_query($link, $sql);
    if($res){
        echo "Query successful <br>";
        echo "<a href='admin.php'>Click here</a> to go back.";
    }else {
        echo "Error! Query unsuccessful! <br>";
        echo "<a href='admin.php'>Click here</a> to go back.";

    }
}