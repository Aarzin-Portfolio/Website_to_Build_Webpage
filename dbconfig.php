<?php
//Create a class_alias
class connect
{
	function connect()
	{
		$dbhost = 'mysql.parthhosting.com';
		$dbuser = 'u188374730_rdb1';
		$dbpswd = 'amt1995';
		$dbname = 'u188374730_rdb1';
		
		$con = mysql_connect($dbhost,$dbuser,$dbpswd);
		if($con)
		{
			$condb = mysql_select_db($dbname,$con);
			if($condb)
			{
				echo 'Database Has Been Connected';
				
				$query = "create table IF NOT EXISTS USER(
				id INT(6) AUTO_INCREMENT PRIMARY KEY,
				uname VARCHAR(30) NOT NULL,
				email VARCHAR(30) NOT NULL,
				pswd VARCHAR(30) NOT NULL,
				contact VARCHAR(30) NOT NULL)";				
				
				mysql_query($query);
				
				
				
			}
			else
			{
				echo 'Not COnnected';
			}
		}
		else
		{
			die();
		}
	}
	function display($var)
	{
		echo $var;
	}
}
?>