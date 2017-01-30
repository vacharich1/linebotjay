<?php
session_start();
$strName="aav";
echo $strName;
$cust_id = $_POST['cust_id'];
echo $cust_id;
$strName = $_SESSION["strName"];

echo $strName;

$hoonn=$strName;

		$hoonn=(string)$row["price_current"];
		$uuurl = (string)"https://www.botbottest.club/".$hoonn."pe.jpg";
		$uuurl2 = (string)"https://www.botbottest.club/".$hoonn."pbv.jpg";
		$uuurl3 = (string)"https://www.botbottest.club/".$hoonn."roe.jpg";
		$uuurl4 = (string)"https://www.botbottest.club/".$hoonn."roa.jpg";
		$uuurl5 = (string)"https://www.botbottest.club/".$hoonn."eps.jpg";
		$uuurl6 = (string)"https://www.botbottest.club/".$hoonn."gprofit.jpg";

		echo "<img src='".$uuurl."' /><br />";
		echo "<img src='".$uuurl2."' /><br />";
		echo "<img src='".$uuurl3."' /><br />";
		echo "<img src='".$uuurl4."' /><br />";
		echo "<img src='".$uuurl5."' /><br />";
		echo "<img src='".$uuurl6."' /><br />";

?>
