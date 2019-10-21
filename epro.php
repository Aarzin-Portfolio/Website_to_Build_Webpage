<?php
session_start();

//connection
include "connection.php";

//$user contain username
$user=$_SESSION['un'];

//fetch row with particular username
$res = mysql_query("SELECT * FROM registered where Email ='".$_SESSION['un']."'");

$row = mysql_fetch_assoc($res);

$fname = $row['Name'];
$password = $row['Password'];
$email = $row['Email'];
$contact = $row['Contact'];

?>
<html>
	
	<script type="text/javascript">
			
			function validate()
			{
				var check=true;
				var filter=/^([\w\.\-])+\@+([\w])+\.+([a-zA-Z]{2,4})$/;
				if(document.update.fname.value=="")
				{
					alert("please enter your name");
					check=false;
					document.update.fname.focus();
				}
				else if(document.update.pass.value=="")
				{
					alert("Password cannot be blank !");
					check=false;
					document.update.pass.focus();
				}
				else if(document.update.pass.value!=document.update.cpass.value)
				{
			
					alert("Password not match !");
					check=false;
					document.update.cpass.focus();
				}
				else if(document.update.contact.value.length!=10 && isNaN(document.update.contact.value))
				{
					alert("Please enter your contact number");
					check=false;
					document.update.contact.focus();
				}
				
				else
					check=true;
					
				return check;
			}		
	</script>
	<style>
		
		a:link{color:#0000CC}
		a:active{color:#66FF00}
		a:visited{color:violet}
		a:hover{color:DarkRed}
		
		body{
				background-image:url("6.jpg");
		
			}
	</style>
	<body>
		<div style='background-color:gold;overflow:marquee-play-count;'>
	
	<table border="1" align="center">
		<tr>
			<td colspan=2 width=150 height=150>
				<img src="RAMP1.jpg" width="150" height="100">
			</td>
			<td align="center" width=185 color="red"><font color="Blue" face="tekton pro" size="5"><ins><abbr title="You Regenerate">R:Regenerate</abbr><br><abbr title="We Analyse">A:Analyse</abbr><br><abbr title="Manipulate Yourself">M:Manipulate & </abbr><br><abbr title="Presented By Us">P:Present</abbr><ins></font></td>
		</tr>
	</table>
	</div>
	<div style='background-color:#FFFF66;width:100%;height:35px'>
	<table align="center">
	<tr>
		<td colspan=2 width="20%"><a href="3.html"><img src="home.jpg" height="30" width="30"></a></td>
		<td colspan=2 width="20%"><a href="feedback.html">Feed-Back</a></td>
		<td colspan=2 width="20%"><a href="contus.html">Contact-Us</a></td>
		<td colspan=2 width="20%"><a href="#">Edit-UR-Profile</a></td>
		<td colspan=2 width="20%" align="right"><a href="logout.php"><img src="logout.png" height="30" width="30"></a></td>
		
	</tr>
	</table>
	</div>
	
	<div style='background-color:#FFFF99;float:left;width:110px;overflow:hidden;height:100%'>
	<ul>
		<li><a href="4.html">Business</a></li><hr>
		<li><a href="5.html">Biography</a></li><hr>
		<li><a href="6.html">Recipe</a></li><hr>
		
	</ul>
	</div>
	
	
    	<form name="update" action="update.php" method="get" enctype="multipart/form-data" onSubmit="return validate()">
		<table>
			<tr>
				<td>User Name : </td>
				<td><input type="text" name="fname" value="<?php echo $fname;?>" /></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="email" name="email" value="<?php echo $email;?>" /></td>
			</tr>
            <tr>
				<td>Password : </td>
				<td><input type="password" name="pass" value="<?php echo $password;?>"/></td>
			</tr>
            <tr>
				<td>Confirm Password : </td>
				<td><input type="password" name="cpass" value="<?php echo $password;?>"/></td>
			</tr>   
            <tr>
				<td>Contact : </td>
				<td><input type="text" name="contact" value="<?php echo $contact;?>"/></td>
			</tr>
                    
            <tr>
            	<td colspan="2">&nbsp;</td>
            </tr>
            <tr>
            	<td colspan="2" align="right">
                <input type="submit" name="submit" value="Save Changes"/></td>
            </tr>
		</table>
        </form>
	</body>
</html>

