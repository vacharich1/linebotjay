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



$sql1 = "SELECT * FROM `rsi_30` WHERE 1";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]."  :  ".$row["price"];
		echo "</table>";
		echo "</font>";
		
	}

}

?>
