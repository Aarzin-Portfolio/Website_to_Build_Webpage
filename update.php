<?php
session_start();

//connection
include "connection.php";

//$user contain username
$user=$_SESSION['un'];

//dp upload
$a=$_SESSION['un'];
//$ab=substr($a,0,10);
$ab=$a;
$dp=$ab;
//uploading File
$target_dir = "../dp/";
$target_f = $target_dir . $dp;
$uploadOk = 1;
$imageFileType = pathinfo($target_f,PATHINFO_EXTENSION);

/*// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk = 0;
}*/
//Upload file
if($uploadOk==1)
{
	$target_file = $target_dir . $dp.".jpg";
	move_uploaded_file($_FILES["dp"]["tmp_name"], $target_file);
}
else
{
	echo "<center><h1>File Not UPLOADED - Unsupported File Format</h1>";
}

//Request from form

$fname=$_REQUEST['fname'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];

$cnct=$_REQUEST['contact'];


//Update Query
$q="UPDATE registered SET Name = '$fname' , Email='email', Password = '$pass' , Contact = '$cnct' ";

$r = mysql_query($q);
if($r)
{
	echo "<center><h1>Changes Successful<br/>";
	header("location:3.html");
	//header("location:epro.php");
}
else
{
	echo "<center><h1>Error Occurred While Changing!";
	header("location:epro.php");
}

?>