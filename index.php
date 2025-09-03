<?php
$hostname = "localhost";
$user = "root";
$pass = "";
$db = "db";

$link = mysqli_connect($hostname, $user, $pass, $db) or die ("Could not connect:  ");
?>
<!DOCTYPE html>

<style>
body {

background-color:;
}
#show
{
color:black;
background-color:grey;
font-family:Arial;
font-weight:bold;
font-size:small;
padding:10px 15px;
border:2px solid black;
}
#hide
{
color:black;

background-color:grey;
font-family:Arial;
font-weight:bold;
font-size:small;
padding:10px 15px;
border:2px solid black;
}

  {background-image: url('bbg.jpg');
background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;}
</style>
<html>
<head>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>



$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});


</script>




<img src="images.jpg" alt="" border=3 height=200 width=1330 align=bottom></img>

    <title>Tourist Management System</title>

<br>
<br>
</head>
<body>
<br>

<table width="70%" border="4" align="center">
    <tr>
        <td colspan="1"style="background-color:#BBC5BD;">
    
        <b><font face="Arial, Helvetica, sans-serif"></font></b><h2 align="center">Tourist Management System</h2></td>
    </tr>
    <tr>
        <td colspan="1"style="background-color:#BBC5BD;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b>
            <h3 align="center">Login Page</h3>
        </td>

    </tr>
    <tr align="center">
        <td style="background-color:#BBC5BD;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b>
            
            <form action="signin.php" method="post">
                Username: <input type="text" name="username">
                password: <input type="password" name="password">
                <button type="submit" name="submit">Log in</button>

            </form>


            </p>
<p>This Site is only to be used by the admin panel,Please enter Your admin id
<button id="hide">Hide</button>
</p>

        </td>
    </tr>
</table>
<button id="show">Show</button>

</body>
</html>