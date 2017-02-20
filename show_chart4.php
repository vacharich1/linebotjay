<?php

$host= "sql6.freemysqlhosting.net";
//$db = "sql6150739";
$db = "sql6155499";
$CHAR_SET = "charset=utf8"; 
 
//$username = "sql6150739";    
//$password = "xiGjqcGnZb";   
$username = "sql6155499";    
$password = "xwBrDIuGaA";  
	

$link = mysqli_connect($host, $username, $password, $db);
if (!$link) {
    die('Could not connect: ' . mysqli_connect_errno());
}

	
$text_alert=""; 
$USERID ="";
	

$link = mysqli_connect($host, $username, $password, $db);
if (!$link) {
    	die('Could not connect: ' . mysqli_connect_errno());
}



$sql1 = "SELECT * FROM chart_hoon4 ORDER BY `hoonname` ASC";
$result = $link->query($sql1);
$check_rsi_send="";

if ($result->num_rows > 0) {
	 while($row = $result->fetch_assoc()) {
		$hoonn=(string)$row["hoonname"];
		$uuurl = (string)"https://www.botbottest.club/".$hoonn."60.jpg";
		$uuurl2 = (string)"https://www.botbottest.club/".$hoonn.".day.jpg";
		$uuurl3 = (string)"https://www.botbottest.club/".$hoonn.".week.jpg";
		$uuurl4 = (string)"https://www.botbottest.club/".$hoonn."mmm.jpg";
		echo "<img src='".$uuurl."' /><br />";
		echo "<br />";
		echo "<br />";
		echo "<img src='".$uuurl2."' /><br />";
		echo "<br />";
		echo "<br />";
		echo "<img src='".$uuurl3."' /><br />";
		echo "<br />";
		echo "<br />";
		echo "<img src='".$uuurl4."' /><br />";
	 }
}



?>
