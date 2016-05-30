<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("teamup_db", $con);

$result = mysql_query("SELECT * FROM Sports_Event");
echo $result;
if ($result == null)
{
	echo "00000";
}
echo "<br>";
echo "<br>";
echo "<br>";
// print_r(mysql_fetch_array($result1));
echo "<br>";
echo "<br>";
echo "<br>";
// $row = mysql_fetch_array($result);


while($ro = mysql_fetch_array($result))
  {
  echo $ro['EventID']. " " .$ro['Sporttype']. " " .$ro['Eventname']. " " .$ro['Date'] . " " . $ro['Timebegin'] . " " . $ro['Timeend'];
  echo "<br />";
  }
  
/* if ($row['number'] == null)
{
	echo "qqq";
}
else
{
	echo "aaaaa";
} */
mysql_close($con);
?>