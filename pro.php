<?php
session_start();

//connection
include "connection.php";

//$user contain username
$user=$_SESSION['un'];

//fetch row with particular username
$res = mysql_query("SELECT * FROM registered where Email ='".$_SESSION['un']."'");

$row = mysql_fetch_assoc($res);

$fname = $row['nm'];
$email = $row['Email'];
$password = $row['pwd1'];
$contact = $row['no'];

?>
<html>
	<style>
		td{
			color:#999;
			font-weight:bold;
			font-family:Times New Roman;
			font-size:22px;
		}
	</style>
	<body>
    
		<table>
			<tr>
				<td>User Name : </td>
				<td><?php echo $fname;?></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><?php echo $email;?></td>
			</tr>  
            <tr>
				<td>Contact : </td>
				<td><?php echo $contact;?></td>
			</tr>
                      
		</table>
	</body>
</html>