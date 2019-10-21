<?php
session_start();

//connecting
include "connection.php";

//if no session
if(!isset($_SESSION['un']))
	header("location:../index.html");

//fetch row with particular username
$res = mysql_query("SELECT * FROM registered where Email ='".$_SESSION['em']."'");

$row = mysql_fetch_assoc($res);

$user = $row['Name'];
?><head>

<title>ramp.tk </title>

</head>



<div>
	
    <div >
    	<div >
        	<a href="http://www.canonindia.in" target="_parent"><img src="../images/fl.png" height=80px width=220px></a>
        </div> <!-- end of header -->

		<ul class="navigation">
            <li><a href="index.php">User<span class="ui_icon home"></span></a></li>
	    <li><a href="profile.php" >Profile<span class="ui_icon aboutus"></span></a></li>
	    <li><a href="editprofile.php">Edit Profile<span class="ui_icon services"></span></a></li>
            <li><a href="#cart">Cart<span class="ui_icon home"></span></a></li>
            <li><a href="logout.php" >Log Out<span class="ui_icon aboutus"></span></a></li>
        </ul>
    </div> <!-- end of sidebar -->
	
	<div id="main">
    	<ul id="social_box">
            <li><a href="http://www.facebook.com/templatemo"><img src="../images/facebook.png" alt="facebook" /></a></li>
            <li><a href="http://www.facebook.com/templatemo"><img src="../images/twitter.png" alt="twitter" /></a></li>
            <li><a href="http://www.facebook.com/templatemo"><img src="../images/linkedin.png" alt="linkin" /></a></li>
            <li><a href="http://www.facebook.com/templatemo"><img src="../images/technorati.png" alt="technorati" /></a></li>
            <li><a href="http://www.facebook.com/templatemo"><img src="../images/myspace.png" alt="myspace" /></a></li>                
        </ul>
        
		<div id="content">
        
        <!-- scroll -->
        
        	
            <div class="scroll">
                <div class="scrollContainer">
                    <div class="panel" id="edit">
                        <h1>Edit Profile</h1>
                        <div>
                        	<object id="epro" type="text/html" data="epro.php" width=100% height="85%" style="display:block;">
            				</object>
                        </div>
                    </div>   
        		</div>
    		</div>
        
        <div id="footer">

            Copyright Â© 2048  | <a href="http://www.canon.co.in target="_parent">canonindia.in</a>
        
        </div> <!-- end of templatemo_footer -->
    
    </div> <!-- end of main -->
</div>

</body>
</html>