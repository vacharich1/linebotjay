<?php

$host= "sql6.freemysqlhosting.net";
//$db = "sql6150739";
$db = "sql6153306";
$CHAR_SET = "charset=utf8"; 
 
//$username = "sql6150739";    
//$password = "xiGjqcGnZb";   
$username = "sql6153306";    
$password = "4dZFsCXA54";  
	

$link = mysqli_connect($host, $username, $password, $db);
if (!$link) {
    die('Could not connect: ' . mysqli_connect_errno());
}
else
{
	echo "connect";
}

$link = mysqli_connect($host, $username, $password, $db);
if (!$link) {
    	die('Could not connect: ' . mysqli_connect_errno());
}
else
{
	echo "connect";
}


$sql1 = "SELECT * FROM rsi_70 ORDER BY `price` ASC";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo '<font size="18"'." face='Arial'>";
		echo $row["hoonname"]."  ".$row["price"]+"\n";
	}

}

?>