<?php


	
	//mysql_connect("localhost","admin","");
	$host= "sql6.freemysqlhosting.net";
	$db = "sql6141179";
	$CHAR_SET = "charset=utf8"; 
 
	$username = "sql6141179";    
	$password = "2VSm3JEfdX";   
	
	//mysqli_connect($host, $username, $password)or die('failed');
	//mysqli_query('set names utf8');
	//mysqli_select_db($db)or die('select filae');
	
	$link = mysqli_connect($host, $username, $password, $db);
	if (!$link) {
    		die('Could not connect: ' . mysqli_connect_errno());
	}

	$sql = "SELECT `image` FROM `images` WHERE `id` = 1";
	echo $sql;
	$sth = $link->query($sql);
	$result=mysqli_fetch_array($sth);
	echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
	
	

?>





