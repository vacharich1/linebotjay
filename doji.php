<?php

$host= "sql6.freemysqlhosting.net";

$db = "sql6155499";
$CHAR_SET = "charset=utf8"; 

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



$sql1 = "SELECT * FROM `doji` WHERE (doji='2day O = C price' AND trand = 'break high ytd')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "                   Scan By jfourtwins\n\n                 ======================================";
	echo"\n                 2 day open = close price and break high ytd\n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]." : H ".$row["yhigh"]."   L ".$row["ylow"]."   O ".$row["yopen"]."   C ".$row["yclose"];
		echo "</table>";
		echo "</font>";
	}
}

$sql1 = "SELECT * FROM `doji` WHERE (doji='2day O = C price' AND trand = 'break low ytd')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "                   Scan By jfourtwins\n\n                 ======================================";
	echo"\n                 2 day open = close price and break low ytd\n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]." : H ".$row["yhigh"]."   L ".$row["ylow"]."   O ".$row["yopen"]."   C ".$row["yclose"];
		echo "</table>";
		echo "</font>";
	}
}

$sql1 = "SELECT * FROM `doji` WHERE (doji='2day O = C price' AND trand = 'zzzz')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "                   Scan By jfourtwins\n\n                 ======================================";
	echo"\n                 2 day open = close price\n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]." : H ".$row["yhigh"]."   L ".$row["ylow"]."   O ".$row["yopen"]."   C ".$row["yclose"];
		echo "</table>";
		echo "</font>";
	}
}

$sql1 = "SELECT * FROM `doji` WHERE (doji='O = C price' AND trand = 'break high ytd')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "                   Scan By jfourtwins\n\n                 ======================================";
	echo"\n                  open = close price and break high ytd\n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]." : H ".$row["yhigh"]."   L ".$row["ylow"]."   O ".$row["yopen"]."   C ".$row["yclose"];
		echo "</table>";
		echo "</font>";
	}
}

$sql1 = "SELECT * FROM `doji` WHERE (doji='O = C price' AND trand = 'break low ytd')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "                   Scan By jfourtwins\n\n                 ======================================";
	echo"\n                  open = close price and break low ytd\n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]." : H ".$row["yhigh"]."   L ".$row["ylow"]."   O ".$row["yopen"]."   C ".$row["yclose"];
		echo "</table>";
		echo "</font>";
	}
}

$sql1 = "SELECT * FROM `doji` WHERE (doji='O = C price' AND trand = 'zzzz')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "                   Scan By jfourtwins\n\n                 ======================================";
	echo"\n                  open = close price\n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]." : H ".$row["yhigh"]."   L ".$row["ylow"]."   O ".$row["yopen"]."   C ".$row["yclose"];
		echo "</table>";
		echo "</font>";
	}
}

?>