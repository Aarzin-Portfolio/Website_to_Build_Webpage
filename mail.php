<?php
	$to=$_REQUEST['email'];
	$sub="Thank You";
	$msg="Thank You For Your Feedback";
	$from="customercare@designs-ramp.tk";
	mail($to,$sub,$msg,$from);
	header("location:3.html");
?>