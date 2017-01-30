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



$sql1 = "SELECT * FROM show_all ORDER BY `hoonname` ASC";
$result = $link->query($sql1);
$check_rsi_send="";

if ($result->num_rows > 0) {
	 while($row = $result->fetch_assoc()) {
		$hoonn=(string)$row["hoonname"];
		$uuurl = (string)"https://www.botbottest.club/".$hoonn."pe.jpg";
		$uuurl2 = (string)"https://www.botbottest.club/".$hoonn."pbv.jpg";
		$uuurl3 = (string)"https://www.botbottest.club/".$hoonn."roe.jpg";
		$uuurl4 = (string)"https://www.botbottest.club/".$hoonn."roa.jpg";
		$uuurl5 = (string)"https://www.botbottest.club/".$hoonn."eps.jpg";
		$uuurl6 = (string)"https://www.botbottest.club/".$hoonn."nprofit.jpg";
		echo "<img src='".$uuurl."' /><br />";
		echo "<img src='".$uuurl2."' /><br />";
		echo "<img src='".$uuurl3."' /><br />";
		echo "<img src='".$uuurl4."' /><br />";
		echo "<img src='".$uuurl5."' /><br />";
		echo "<img src='".$uuurl6."' /><br />";
	 }
}



?>
