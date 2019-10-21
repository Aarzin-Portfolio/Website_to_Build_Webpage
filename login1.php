
<html>
<head>
		<title>RAMP</title>
	<style>
	body{
		/*background-image:url("ramp2.jpg");*/
		background:linear-gradient(#FFFFFF,#FFFFFF,yellow);
	}
	table{
		
		padding: 0px;
		border: 1px solid navy;
		
	}
	</style>
</head>
<script type="text/javascript">
			
			function validate()
			{
				var check=true;
				var filter=/^([\w\.\-])+\@+([\w])+\.+([a-zA-Z]{2,4})$/;
				
				if(document.frm.email.value=="")
				{
					alert("Please enter your email address");
					check=false;
					document.frm.email.focus();
				}
				else if(!filter.test(document.frm.email.value))
				{
					alert("Enter valid email id");
					check=false;
					document.frm.email.focus();
				}
				else if(document.frm.pass.value=="")
				{
					alert("Password cannot be blank !");
					check=false;
					document.frm.pass.focus();
				}
				else
					check=true;
					
				return check;
			}
</script>
</head>
<body bgcolor="#A57617">
	<table align="center" >
		<tr>
			<td colspan=2 align="center" width=185 height=60>
				<img src="RAMP1.jpg" width="150" height="100">
			</td>
				<td align="center" width=185 color="red"><font color="Blue" face="tekton pro" size="5"><ins>R:Regenerate<br>A:Analyse<br>M:Manipulate &<br>P:Present<ins></font>
			</td>
		</tr>
	</table>
	<hr>
	<table align="center">
	<form name="frm" action="checklogin.php" method="GET" onSubmit="return validate();">
		
		<tr>
			<td width=185>Enter Your E-mail Id:</td>
			<td width=185><input type="email" name="em"></td>
		</tr>
		<tr>
			<td colspan="2" align="right" bgcolor="white"></td>
		</tr>
		<tr>
			<td>Enter Your Password:</td>
			<td><input type="password" name="pwd1"></td>
		</tr>
		<tr>
			<td align="center"><input type="Submit" value="SignIn"></td>
			<td align="center"><a href="index.php">New User</td>
		</tr>
		
	</form>
	</table>
</body>
</html>

