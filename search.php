<?php
$hostname = "localhost";
$user = "root";
$pass = "";
$db = "db";

$link = mysqli_connect($hostname, $user, $pass, $db) or die ("Could not connect:  ");

echo "connection success";


$searchType = $_POST["search_type"];
$searchCriterion = $_POST["search_param"];


if ($searchType == "tourist") {
    $sql = "SELECT * FROM tourist WHERE tourist_id = '$searchCriterion'";

} else if ($searchType == "driver") {
    $sql = "SELECT * FROM driver WHERE ID = '$searchCriterion'";
} else if ($searchType == "places") {
    $sql = "SELECT * FROM places WHERE placecode = '$searchCriterion'";
} else if ($searchType == "booking") {
    $sql = "SELECT * FROM booking WHERE BID = '$searchCriterion'";
} else if ($searchType == "touragent") {
    $sql = "SELECT * FROM touragent WHERE ID = '$searchCriterion'";
}


$res = mysqli_query($link, $sql);


print("<table width=\"90%\" border=\"1\" align=\"center\">
    <tr>
        <td colspan=\"2\"><h2 align=\"center\">Tourist Management System</h2></td>
    </tr>
    <tr>
        <td colspan=\"2\">
            <h3 align=\"center\">Search Page</h3>
        </td>
    </tr>
    <tr>");

print("<td>&nbsp;<a href=\"admin.php\">Home</a> &nbsp;
	     </td> ");

print("<tr>
			<td align=\"center\"> ");


if ($res && mysqli_num_rows($res) > 0) {
    print("<p>There are " . mysqli_num_rows($res) . " result(s) available</p>");
    while ($data = mysqli_fetch_assoc($res)) {
        print("<br><br>");

        foreach ($data as $key => $value) {
            print("<b><u>$key:</u></b> $value<br/>");
        }

        print("<br><br>");
    }
} else {
    print("There is nothing found for your current search criterion  :-  $searchType = \"$searchCriterion\" <br> Please recheck your searching criteria! <br\> <br> Thanks! <br/>");
}


print("</td>
		</tr>
		
	</table> ");
mysqli_close($link);


?>
<style> 

body
{
  background-image: url('bbg.jpg');
background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;}
</style>

