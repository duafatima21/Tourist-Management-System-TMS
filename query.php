
<?php
$hostname = "localhost";
$user = "root";
$pass = "";
$db = "db";

$link = mysqli_connect($hostname, $user, $pass, $db) or die ("Could not connect:  " );

echo "connection success";


$q=$_POST["query"];


$res = mysqli_query($link, $q);


print("<table width=\"100%\" border=\"1\" cellpadding=\"10\"> 
		<tr>
			<td  align=\"center\">
			<h1>Tourist Management System</h1>
			<h2> Admin Query Page </h2>
			</td>
		</tr> ");

print("<td>&nbsp;<a href=\"admin.html\">Home</a> &nbsp;
	     </td> ");

print("<tr>
			<td align=\"center\"> ");


if ($res && mysqli_num_rows($res)>0)
{
    print("<p>There are " . mysqli_num_rows($res) . " result(s) available</p>");
    while($data=mysqli_fetch_assoc($res))
    {
        print("<br><br>");

        foreach ($data as $key => $value) {
            print("<b><u>$key:</u></b> $value<br/>");
        }

        print("<br><br>");
    }
}
else
{
    print("There is nothing found for your current query  :- <br>  $q<br><br> Please recheck your query! <br\> <br> Thanks! <br/>");
}


print("</td>
		</tr>
		
	</table> ");
mysqli_close($link);


?>


