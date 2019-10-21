<?php

$connecterror = "unable to connect";

//Connection to DB
$cn=mysql_connect('localhost', 'root', '') or die($connecterror);

//Selecting a DB
if(!mysql_select_db('reg',$cn))
{
	echo "Could not connect to database";
}

// Create table
$sql="CREATE TABLE registered
( 
	Name VARCHAR(25),
	Email VARCHAR(50),
	Password VARCHAR(30),
	Contact BIGINT(10),
	PRIMARY KEY(Email)
)";

if (mysql_query($sql,$cn)) {
  echo "<h1>"."Table Registered created successfully";
} else {
  echo "Error creating table: " . mysql_error($cn);
}
?>