<?php

include "connection.php";

//Request from form
$email =$_GET['em'];
$pass =$_GET['pwd1'];

$sql="SELECT * from registered WHERE Email='$email' and Password='$pass'";
$result=mysql_query($sql);

$row = mysql_fetch_assoc($result);
//$user = $row['nm'];

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
if($count>0)
{
	session_start();
	$_SESSION['un']=$row['Email'];
	header("location:3.html");
}
else 
{
	echo "<br/><h1><br/>";
	echo "<center><h1>Email id or Password incorrect -- Please try again !";
	echo "<br/><h3>If you are not registered user please register first !</h3>";
	echo "<h1><a href=index.php>Register</a> Here !";
	
}

?>