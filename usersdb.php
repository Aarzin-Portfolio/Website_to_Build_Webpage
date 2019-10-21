<?php
$connecterror = "unable to connect";

//Connection to DB

$cn=mysql_connect('localhost', 'root', '') or die($connecterror);

//Create database
$sqlQuery='create database reg';
if(mysql_query($sqlQuery))
{
		echo "<h1>"."db created successfully"."</h1>";
}
else
	echo "error";
?>