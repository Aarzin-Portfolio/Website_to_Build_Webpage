<?php
session_start();

//connection
include "connection.php";

//if no session
if(!isset($_SESSION['un']))
	header("location:../index.html");

//fetch row with particular username
$res = mysql_query("SELECT * FROM registered where Email ='".$_SESSION['un']."'");

$row = mysql_fetch_assoc($res);

$user = $row['Name'];
$a = $_SESSION['un'];
$dp = $a;
?><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>canon.com </title>
<meta name="keywords" content="here to delight you" />
<meta name="description" content="know all details bout canon camera" />
<link href="../style.css" rel="stylesheet" type="text/css" />

<link href="../css/coda-slider.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8" />
</head>



<div id="slider">
	
    <div id="sidebar">
    	<div id="header">
        	<a href="http://www.canonindia.in" target="_parent"><img src="../images/fl.png" height=80px width=220px></a>
        </div> <!-- end of header -->

		<ul class="navigation">
            <li><a href="#user">User<span class="ui_icon home"></span></a></li>
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
                
                    <div class="panel" id="user">
                    	
                        <h1>Welcome <?php echo $user ?></h1>    
                        <div class="image_wrapper image_fl"><img src="../dp/<?php echo $dp;?>.jpg" height=330px width=525px alt="image" /></div>
                       
                    </div> <!-- end of user -->
                    
                    <div class="panel" id="profile">
                        <h1>Profile</h1>
                        <div>
                        	<object id="pro" type="text/html" data="profile.php" width=100% height="85%" style="display:block;">
            				</object>
                        </div>
                    </div>
                    <div class="panel" id="edit">
                        <h1>Edit Profile</h1>
                        <div>
                        	<object id="epro" type="text/html" data="editprofile.php" width=100% height="85%" style="display:block;">
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