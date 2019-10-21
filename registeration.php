<?php
//connection
include "connection.php";

if(!mysql_select_db('reg',$cn))
	{
		echo "Could not connect to database";
	}
	//Insert from form
	
	$name=$_REQUEST['nm'];
	$email=$_REQUEST['em'];
	$pass=$_REQUEST['pwd1'];
	$cont=$_REQUEST['no'];
	$sql="INSERT INTO registered (Name,Email,Password,Contact)
	VALUES ('".$name."', '".$email."', '".$pass."', '".$cont."')";

	$i=mysql_query($sql,$cn);
	if($i>0)
	{
		header("location:login.php");
	}
	else
	echo "Cannot insert";
?>