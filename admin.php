<?php
$hostname = "localhost";
$user = "root";
$pass = "";
$db = "db";

$link = mysqli_connect($hostname, $user, $pass, $db) or die ("Could not connect:  ");
?>
<html>

<style> 

body{
background-color:;
}
#show
{
color:black;
background-color:pink;
font-family:Arial;
font-weight:bold;
font-size:small;
padding:10px 15px;
border:2px solid black;
}
#hide
{
color:black;
background-color:pink;
font-family:Arial;
font-weight:bold;
font-size:small;
padding:10px 15px;
border:2px solid black;
}
{
background-color:;
}
#clickme
{
color:black;
background-color:green;
font-family:Arial;
font-weight:bold;
font-size:x-small;
padding:10px 15px;
border:2px solid black;
}
{
background-color:;
}
#p1
{
color:black;
background-color:yellow;
font-family:Arial;
font-weight:bold;
font-size:x-small;
padding:10px 15px;
border:2px solid black;
}
{
background-color:;
}
#p2
{
color:black;
background-color:grey;
font-family:Arial;
font-weight:bold;
font-size:x-small;
padding:10px 15px;
border:2px solid black;
}

{
background-color:;
}
#p3
{
color:black;
background-color:pink;
font-family:Arial;
font-weight:bold;
font-size:x-small;
padding:10px 15px;
border:2px solid black;
}

{
  background-image: url('bbg.jpg');
background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;}
</style>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
  $("button").click(function(){
    $("#p3").css("color", "blue")
      .slideUp(2000)
      .slideDown(2000);
  });
});


$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});

$(document).ready(function(){
  $("button").click(function(){
    $("#p1").css("color", "red")
      .slideUp(2000)
      .slideDown(2000);
  });
});
$(document).ready(function(){
  $("button").click(function(){
    $("#p2").css("color", "red")
      .slideUp(2000)
      .slideDown(2000);
  });
});

</script>

 <title>Tourist Management System</title>
<p>Admin Panel , Personalize The Tour Information :</p>
<br>
<button id="hide">Hide</button>
<button id="show">Show</button>
</head>



<body>
<table width="70%" border="2" align="center" >
    <tr>
        <td colspan="2"style="background-color:grey;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b><h2 align="center">Tourist Management System</h2></td>
    </tr>
    <tr>
        <td colspan="2" style="background-color:grey;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b>
            <h3 align="center">Homepage</h3>

        </td>
    </tr>
    <tr>
        <td style="background-color:grey;">
         <b><font face="Arial, Helvetica, sans-serif"></font></b>
            <h3>Booking</h3>
        </td>
        <td style="background-color:white;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b>
                
        <img src="b.jpg" alt="" border=3 height=200 width=300 align=right></img><br>
<br>
 <h3>Add Booking: </h3>
<p id ="p3">1.Name<br>
 2.Place<br>
3. Tour<br>
4.Driver<br>
 5.Tour agent</p>

<button id="clickme">Click me</button>


            <form action="booking.php" method="post">
                Select Tourist (Name - ID):
                <select name="TID">
                    <?php
                    $sql = "SELECT tourist_id, name FROM tourist";
                    $res = mysqli_query($link, $sql);
                    if ($res && mysqli_num_rows($res) > 0) {
                        while ($data = mysqli_fetch_assoc($res)) {
                            $id = $data['tourist_id'];
                            $name = $data['name'];
                            echo "<option value='$id'>$name - $id </option>";
               
   }
                    }
                    ?>
                </select><br>
                Select Touragent (Name - Rating):
                <select name="TAID">
                    <?php
                    $sql = "SELECT id, name, rating FROM touragent";
                    $res = mysqli_query($link, $sql);
                    if ($res && mysqli_num_rows($res) > 0) {
                        while ($data = mysqli_fetch_assoc($res)) {
                            $id = $data['id'];
                            $name = $data['name'];
                            $rating = round($data['rating'], 2);
                            echo "<option value='$id'>$name - $rating </option>";
                        }
                    }
                    ?>
                </select><br>
                Select Driver (Name - Vehicle - Rating):
                <select name="DriverID">
                    <?php
                    $sql = "SELECT id, name, vehicle, rating FROM driver";
                    $res = mysqli_query($link, $sql);
                    if ($res && mysqli_num_rows($res) > 0) {
                        while ($data = mysqli_fetch_assoc($res)) {
                            $id = $data['id'];
                            $name = $data['name'];
                            $vehicle = $data['vehicle'];
                            $rating = round($data['rating'], 2);
                            echo "<option value='$id'>$name - $vehicle - $rating </option>";
                        }
                    }
                    ?>
                </select><br>
                Select Place (Name - city - Rating):
                <select name="placecode">
                    <?php
                    $sql = "SELECT placecode, name, city, rating FROM places";
                    $res = mysqli_query($link, $sql);
                    if ($res && mysqli_num_rows($res) > 0) {
                        while ($data = mysqli_fetch_assoc($res)) {
                            $code = $data['placecode'];
                            $name = $data['name'];
                            $city = $data['city'];
                            $rating = round($data['rating'], 2);
                            echo "<option value='$id'>$name - $city - $rating </option>";

                     
   }
                    }
                    ?>
                </select><br>


                <button type="submit" name="submit" value="add">Add Booking</button><br>
            
</form>

 <h3>Delete Booking: </h3>
    
            <form action="booking.php" method="post">
                Select Booking ID:
                <select name="id">
                    <?php
                    $sql = "SELECT bid FROM booking";
                    $res = mysqli_query($link, $sql);
                    if ($res && mysqli_num_rows($res) > 0) {
                        while ($data = mysqli_fetch_assoc($res)) {
                            $id = $data['bid'];
                            echo "<option value='$id'> $id </option>";
                        }
                    }
                    ?>
                </select><br>
                <button type="submit" name="submit" value="delete">Delete Booking</button>


            </form>

        </td>
    </tr>
    <tr>
        <td style="background-color:grey;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b><h3>Tourist</h3></td>
        <td style="background-color:white;">

            <b><font face="Arial, Helvetica, sans-serif"></font></b>
<img src="tt.jpg" alt="" border=3 height=200 width=300 align=right></img>

<p id ="p2">Give basic record of tourist name , phone cnic , adress all saved in database</p>
<button id="clickme">Click me</button>

            <form action="tourist.php" method="post">
                Enter name: <input type="text" name="name"><br>
                Enter phone: <input type="text" name="phone"><br>
                Enter cnic: <input type="text" name="cnic"><br>
                Enter address: <input type="text" name="address"><br>
                Select gender: <select name="gender" id="">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br>
                Enter Nationality: <input type="text" name="nationality"><br>
                <button type="submit" name="submit" value="add">Add Tourist</button>
            </form>
            <h3>Delete Tourist: </h3>
            <form action="tourist.php" method="post">
                Select ID:
                <select name="id">
                    <?php
                    $sql = "SELECT tourist_id FROM tourist";
                    $res = mysqli_query($link, $sql);
                    if ($res && mysqli_num_rows($res) > 0) {
                        while ($data = mysqli_fetch_assoc($res)) {
                            $id = $data['tourist_id'];
                            echo "<option value='$id'> $id </option>";
                        }
                    }
                    ?>
                </select><br>
                <button type="submit" name="submit" value="delete">Delete tourist</button>
            </form>
        </td>
    </tr>
    <tr>
        <td style="background-color:grey;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b>
            <h3>Tour Agent</h3>
        </td>
        <td style="background-color:white;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b>
<img src="tg.jpg" alt="" border=3 height=200 width=300 align=right></img>
            <form action="touragent.php" method="post">
                Enter id: <input type="number" name="id"><br>
                Enter name: <input type="text" name="name"><br>
                Enter phone: <input type="text" name="phone"><br>
                Enter rating: <input type="number" name="rating"><br>
                <button type="submit" name="submit" value="add">Add Tour Agent</button>
            </form>
            <h3>Delete Tour agnet: </h3>
            <form action="touragent.php" method="post">
                Select ID:
                <select name="id">
                    <?php
                    $sql = "SELECT id FROM touragent";
                    $res = mysqli_query($link, $sql);
                    if ($res && mysqli_num_rows($res) > 0) {
                        while ($data = mysqli_fetch_assoc($res)) {
                            $id = $data['id'];
                            echo "<option value='$id'> $id </option>";
                        }
                    }
                    ?>
                </select><br>
                <button type="submit" name="submit" value="delete">Delete tour agent</button>
            </form>
        </td>
    </tr>
    <tr>
        <td style="background-color:grey;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b>
            <h3>Driver</h3>
        </td>
        <td style="background-color:white;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b>
<img src="dr.png" alt="" border=3 height=200 width=300 align=right></img>
            <form action="driver.php" method="post">
                Enter id: <input type="number" name="id"><br>
                Enter name: <input type="text" name="name"><br>
                Enter phone: <input type="text" name="phone"><br>
                Enter rating: <input type="number" name="rating"><br>
                Enter vehicle: <input type="text" name="vehicle"><br>
                Enter vehicle no: <input type="text" name="vehicle_no"><br>
                <button type="submit" name="submit" value="add">Add Driver</button>
            </form>
            <h3>Delete driver: </h3>
            <form action="driver.php" method="post">
                Select ID:
                <select name="id">
                    <?php
                    $sql = "SELECT id FROM driver";
                    $res = mysqli_query($link, $sql);
                    if ($res && mysqli_num_rows($res) > 0) {
                        while ($data = mysqli_fetch_assoc($res)) {
                            $id = $data['id'];
                            echo "<option value='$id'> $id </option>";
                        }
                    }
                    ?>
                </select><br>
                <button type="submit"name="submit" value="delete">Delete Driver</button>
            </form>
        </td>
    </tr>
    <tr>
        <td style="background-color:grey;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b>
            <h3>Places</h3>

        </td>
        <td style="background-color:white;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b>
<img src="pl.jpg" alt="" border=3 height=200 width=300 align=right></img>
     
<p id ="p1">1.Paris<br>
 2.Canada<br>
3. Pakistan<br>
4.germany<br>
 5.America</p>

<button id="clickme">Click me</button>
 <form action="places.php" method="post">
                Enter place code: <input type="number" name="placecode"><br>
                Enter Place Name: <input type="text" name="name"><br>
                Enter Place city: <input type="text" name="city"><br>
                Enter Place rating: <input type="number" name="rating"><br>
                Enter Place country: <input type="text" name="country"><br>
                Enter Place address: <input type="text" name="address"><br>
                <button type="submit" name="submit" value="add">Add place</button>
            </form>
            <h3>Delete place: </h3>
            <form action="places.php" method="post">
                Select code:
                <select name="id">
                    <?php
                    $sql = "SELECT placecode FROM places";
                    $res = mysqli_query($link, $sql);
                    if ($res && mysqli_num_rows($res) > 0) {
                        while ($data = mysqli_fetch_assoc($res)) {
                            $id = $data['placecode'];
                            echo "<option value='$id'> $id </option>";
                        }
                    }
                    ?>
                </select><br>
                <button type="submit" name="submit" value="delete">Delete Place</button>
            </form>
        </td>
    </tr>
    <tr>
        <td style="background-color:grey;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b>
            <h3>Search</h3>
        </td>
        <td style="background-color:white;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b>
<img src="se.jpg" alt="" border=3 height=200 width=300 align=right></img>
            <form action="search.php" method="post" target="_blank">
                <h4>Search:</h4>

                <p align="left">
                    <input name="search_type" type="radio" value="tourist" checked/>Tourist ID<br/>
                    <input name="search_type" type="radio" value="booking"/>Booking ID<br/>
                    <input name="search_type" type="radio" value="driver"/>Driver ID<br/>
                    <input name="search_type" type="radio" value="touragent"/>Tour Agend ID<br/>
                    <input name="search_type" type="radio" value="places"/>Place Code<br/>
                    <input name="search_param" type="text"/><br/>
                    <input name="Search" type="submit" value="Search"/><br/>
                </p>
            </form>

        </td>
    </tr>
    <tr>
        <td style="background-color:grey;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b>
            <h3>Admin</h3>
        </td>
        <td style="background-color:white;">
            <b><font face="Arial, Helvetica, sans-serif"></font></b> 
            <form action="query.php" method="post" target="_blank">
                <h4>Admin Query:</h4>

                <p align="left">
                    <textarea name="query" cols="60" rows="5"></textarea>
                    <input name="submit" type="submit" value="query"/><br/>
                </p>
            </form>

        </td>

    </tr>

</table>

</body>
</html>