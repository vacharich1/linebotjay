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


$sql1 = "SELECT * FROM `doji` WHERE (doji='O = C price' AND trand = 'zzzz')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "\n                   Scan By jfourtwins\n\n                 ======================================";
	echo"\n                      เมื่อวานเกิด doji 1 วัน \n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]." : H ".$row["high"]."   L ".$row["low"]."   O ".$row["open"]."   C ".$row["close"];
		echo "</table>";
		echo "</font>";
	}
}

$sql1 = "SELECT * FROM `doji` WHERE (doji='2day O = C price' AND trand = 'zzzz')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "                   Scan By jfourtwins\n\n                 ======================================";
	echo"\n                  เกิด doji 2 วันคือเมื่อวาน กับ 2 วันที่เเล้ว\n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]." : H ".$row["high"]."   L ".$row["low"]."   O ".$row["open"]."   C ".$row["close"];
		echo "</table>";
		echo "</font>";
	}
}



$sql1 = "SELECT * FROM `doji` WHERE (doji='O = C price' AND trand = 'break low ytd')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "\n                  Scan By jfourtwins\n\n                 ======================================";
	echo"\n              เมื่อวานนี้หลุด low หลังเกิด doji 1 วัน เมื่อสองวันที่เเล้ว\n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]."หลุด low ที่ ".$row["value"]." H ".$row["high"]." L ".$row["low"]." O ".$row["open"]." C ".$row["close"];
		echo "</table>";
		echo "</font>";
	}
}


$sql1 = "SELECT * FROM `doji` WHERE (doji='O = C price' AND trand = 'break high ytd')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "\n                   Scan By jfourtwins\n\n                 ======================================";
	echo"\n                  เมื่อวานนี้เบรค high หลังเกิด doji 1 วัน เมื่อสองวันที่เเล้ว\n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]."เบรค high ที่ ".$row["value"]." H ".$row["high"]." L ".$row["low"]." O ".$row["open"]." C ".$row["close"];
		echo "</table>";
		echo "</font>";
	}
}

$sql1 = "SELECT * FROM `doji` WHERE (doji='2last O = C price' AND trand = 'break high ytd')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "\n                   Scan By jfourtwins\n\n                 ======================================";
	echo"\n                 doji เมื่อสองวันที่เเล้ว เมื่อวานบรคราคา high \n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]."เบรค high ที่ ".$row["value"]." H ".$row["high"]." L ".$row["low"]." O ".$row["open"]." C ".$row["close"];
		echo "</table>";
		echo "</font>";
	}
}

$sql1 = "SELECT * FROM `doji` WHERE (doji='2last O = C price' AND trand = 'break low ytd')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "                   Scan By jfourtwins\n\n                 ======================================";
	echo"\n                 doji เมื่อสองวันที่เเล้ว เมื่อวานหลุด low\n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]." : H ".$row["high"]."   L ".$row["low"]."   O ".$row["open"]."   C ".$row["close"];
		echo "</table>";
		echo "</font>";
	}
}


$sql1 = "SELECT * FROM `doji` WHERE (doji='2last O = C price' AND trand = 'zzzz')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "                   Scan By jfourtwins\n\n                 ======================================";
	echo"\n                 doji เมื่อสองวันที่เเล้ว\n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]." : H ".$row["high"]."   L ".$row["low"]."   O ".$row["open"]."   C ".$row["close"];
		echo "</table>";
		echo "</font>";
	}
}




$sql1 = "SELECT * FROM `doji` WHERE (doji='2day O = C price' AND trand = 'break high ytd')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "\n                   Scan By jfourtwins\n\n                 ======================================";
	echo"\n                   doji 2 วัน เบรคราคา high ของเมื่อวาน\n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]."เบรค high ที่ ".$row["value"]." H ".$row["high"]." L ".$row["low"]." O ".$row["open"]."  C ".$row["close"];
		echo "</table>";
		echo "</font>";
	}
}

$sql1 = "SELECT * FROM `doji` WHERE (doji='2day O = C price' AND trand = 'break low ytd')";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	echo "<font size='50' face='Arial'>";
	echo "                   Scan By jfourtwins\n\n                 ======================================";
	echo"\n                 doji 2 วัน หลุดราคา low ของเมื่อวาน\n";
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo "<font size='50' face='Arial'>";
		echo "<table>";
		echo $row["hoonname"]."หลุด low ที่ ".$row["value"]." H ".$row["high"]." L ".$row["low"]." O ".$row["open"]." C ".$row["close"];
		echo "</table>";
		echo "</font>";
	}
}








?>