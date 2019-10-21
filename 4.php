<?php
	$bgcolor=$_REQUEST['color'];
	$name=$_REQUEST['nm'];
	$products=$_REQUEST['p'];
	$description=$_REQUEST['db'];
?>
<html>
<head>
	<style>
		h2{
			color:#b300b2;
		}
		h1{
			color:#4d004c;
		}
		h3{
			color:#66004c;
		}
		
	</style>
	

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, search, form, icons" />

	<title>Footer with a Search Form</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-search.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


</head>
	<body bgcolor="<?php echo $bgcolor;?>">
		<div style='background-color:#FFFF66;width:100%;height:60px;'>
			<?php echo "<h1>Bussiness Name: " . $name . "</h1>" ; ?>
		
			<div style='background-color:#FFFF99;float:left;width:150px;overflow:hidden;height:300'>
				<?php 
					echo "<h2><b> MY PRODUCT IS: </b></h2>";
					echo "<h2>" . $products . "</h2>";
				?>
				
				
			</div>	
			<div style='height:300'>
		<h3> DESCRIPTION: </h3>
		<h3><?php	echo $description; ?></h3>
		
		</div>
		<div align="right">
			<a href="download.php?filename=download.txt">Rs.50/-<b>DOWNLOAD</b></a>
			
		</div>
		
		 <footer class="footer-distributed">

			<div class="footer-left" style='background-color:#FFFF99;width:100%' >

				<p class="footer-company-name">Company Name: ©designs-ramp.tk; 2015</p>

			</div>

			

		</footer>
		
	</body>
</html>