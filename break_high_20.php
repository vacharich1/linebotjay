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


$link = mysqli_connect($host, $username, $password, $db);
if (!$link) {
    	die('Could not connect: ' . mysqli_connect_errno());
}



$sql1 = "SELECT * FROM `break_high_20` WHERE 1";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "Scan By jfourtwins";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]." : break ".$row["breakhigh20"]."   high ".$row["pricehigh20"]."   close ".$row["closeprice20"];
		echo "</table>";
		echo "</font>";
		
	}
	echo "<font size='50' face='Arial'>";
	echo "Scan By jfourtwins";

}

?>