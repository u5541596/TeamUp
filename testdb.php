<?php
$con = mysql_connect("localhost","root","");
/* if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
if (mysql_query("CREATE DATABASE teamup_db",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  } */
  

// Create table in my_db database
mysql_select_db("teamup_db", $con);
$sql = "CREATE TABLE Accounts 
(
accountID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(accountID),
Account varchar(15),
Password varchar(15),
number int
)";
mysql_query($sql,$con);


/* mysql_query("INSERT INTO Accounts (Account, Password) 
VALUES ('Nemo', '111')"); */

mysql_close($con);
?>