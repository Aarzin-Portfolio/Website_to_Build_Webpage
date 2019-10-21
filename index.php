<html>
	<head>
		<title>RAMP</title>
	<link href="./css/style.css" rel="stylesheet">
	<script type='text/javascript'>
	function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
	}
	</script>
	<script type='text/javascript'>
	function myFunction() {
		var check=true;
				var filter=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				var regexp=new RegExp(filter);
				var contactfilter=/^[7-9]\d{9}$/;
				var conregexp=new RegExp(contactfilter);
				if(document.frm.pwd1.value.length<6)
				{
					alert("Invalid password!");
					document.frm.pwd1.focus();
					check=false;
				}
				else if(document.frm.pwd1.value!=document.frm.pwd2.value)
				{
					alert("Passwords do not match!");
					document.frm.pwd2.focus();
					check=false;
				}
				else if(regexp.test(document.frm.em.value)==false)
				{
					alert("Invalid email id!");
					document.frm.em.focus();
					check=false;
				}
				else if(document.frm.no.value.length!=10 || conregexp.test(document.frm.no.value)==false)
				{
					alert("Invalid contact number!");
					document.frm.no.focus();
					check=false;
				}
				return check;
	}
</script>
	<style>
	body{
		background-image:url("1.jpg");
		
	}
	table{
		
		padding: 0px;
		border: 1px solid navy;
		background:linear-gradient(yellow,yellow,yellow);
	}
	</style>
	
	</head>
<body>
	<table align="center" >
		<tr>
			<td colspan=2 align="center" width=185 height=60>
				<img src="RAMP1.jpg" width="150" height="100">
			</td>
			<td align="center" width=185 color="red"><font color="Blue" face="tekton pro" size="5"><ins><abbr title="You Regenerate">R:Regenerate</abbr><br><abbr title="We Analyse">A:Analyse</abbr><br><abbr title="Manipulate Yourself">M:Manipulate & </abbr><br><abbr title="Presented By Us">P:Present</abbr><ins></font></td>
		</tr>
	</table>
	<hr>
	<table align="center">
	<form name="frm" action="registeration.php" method="post" enctype="multipart/form-data" onSubmit="return myFunction();">
		<tr>
			<td colspan=2 align="right"><a href="login.php">LOGIN</a></td>
		</tr>
		<tr>
			<td>Enter Your Full Name:</td>
			<td><input type="text" name="nm" required="required"></td>
		</tr>
		<tr>
			<td colspan="2" align="right" bgcolor="white"></td>
		</tr>
		<tr>
			<td>Enter Your E-mail Id:</td>
			<td><input type="email" name="em" required="required"></td>
		</tr>
		<tr>
			<td colspan="2" align="right" bgcolor="white"></td>
		</tr>
		<tr>
			<td>Enter Your Password:</td>
			<td><input type="password" name="pwd1" id="pwd1" required="required"></td>
		</tr>
		<tr>
			<td colspan="2" align="right" bgcolor="white"></td>
		</tr>
		<tr>
			<td>Enter Your Confirm Password:</td>
			<td><input type="password" name="pwd2" id="pwd2" required="required"></td>
		</tr>
		<tr>
			<td colspan="2" align="right" bgcolor="white"></td>
		</tr>
		<tr>
			<td>Enter Your Contact No.:</td>
			<td><input type="text" name="no" required="required"></td>
		</tr>
		<tr>
			<td colspan="2" align="right" bgcolor="white"></td>
		</tr>
		
		 <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td align="left" valign="top"> Validation code:</td>
      <td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
        <br>
        <input id="captcha_code" name="captcha_code" type="text">
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
    </tr>
	<tr>
		<td colspan=2><input type="checkbox" name="tnc" id="tnc">&nbsp;&nbsp;<a href="#">Term & Condition</a></td>
    </tr>
	<tr>
		<td><input type="submit" value="SUBMIT" required="required"></td>
		<td><input type="Reset" value="RESET" required="required"></td>
	</tr>
	
	</form>
	</table>
</body>
</html>
