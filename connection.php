<?php
$connecterror = "unable to connect";

//Connection to DB
$cn=mysql_connect('localhost', 'root', '') or die($connecterror);

//Selecting a DB
if(!mysql_select_db('reg',$cn))
{
	echo "Could not connect to database";
}
?>