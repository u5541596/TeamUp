<?php
$con = mysql_connect("localhost","root","");
if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
// Create table in my_db database
mysql_select_db("teamup_db", $con);
$sql = "CREATE TABLE Sports_Event 
(
EventID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(EventID),
Sporttype varchar(30),
Eventname varchar(30),
Location varchar(30),
Participants int,
Date date,
Timebegin time,
Timeend time
)";
mysql_query($sql,$con);
// mysql_query("DELETE FROM Sports_Event");
mysql_query("DELETE FROM Sports_Event WHERE EventID='8'");
mysql_query("alter table Sports_Event add column Sporttype varchar(30) default null");
mysql_close($con);
?>