<?php
	
	$connecterror = "unable to connect";
	//Connection to DB
	$cn=mysql_connect('localhost', 'root', '') or die($connecterror);
	//Selecting a DB
	if(!mysql_select_db('rdb1',$cn))
	{
		echo "Could not connect to database";
	}
	$result = mysql_query("show registered"); // run the query and assign the result to $result
	while($table = mysql_fetch_array($result)) 
	{ 
		// go through each row that was returned in $result
		echo "<h1>"."<u>"."Tables in database : registered"."</u>"."<br>";
		echo "<h3>".$table[0] . "<br>"; // print the table that was returned on that row.
	}
	$result = mysql_query("show tables"); 
	$table = mysql_fetch_array($result);
	echo "<br>".$table;
?>