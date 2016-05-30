<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("teamup_db", $con);

/* mysql_query("INSERT INTO Profile (Account, Password, Firstname, Lastname, Gender, Introduction, Sport, Occupation, Age) 
VALUES ('Alan', 'bbb', 'Peter', 'Griffin', 'male', 'I am strong', ('football, basketball, volleyball'), 'student', '22')"); */
mysql_query("INSERT INTO Sports_Event (Sporttype ,Eventname, Location, Participants, Date, Timebegin, Timeend) 
VALUES ('football', 'Peter', 'bbb', '6', '2016-06-11', '5:00:00', '7:00:00')");

mysql_close($con);
?>