<?php

$host= "sql6.freemysqlhosting.net";
$db = "sql6152094";
$CHAR_SET = "charset=utf8"; 
 
$username = "sql6152094";    
$password = "NM9EmM4AXy";   
	

$link = mysqli_connect($host, $username, $password, $db);
if (!$link) {
    die('Could not connect: ' . mysqli_connect_errno());
}
else
{
	echo "connect";
}
	
	
$text_alert=""; 
$USERID ="";
	

$link = mysqli_connect($host, $username, $password, $db);
if (!$link) {
    	die('Could not connect: ' . mysqli_connect_errno());
}
else
{
	echo "connect";
}


$sql1 = "SELECT * FROM send_alert ORDER BY `hoonname` ASC";
$result = $link->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$hoonname1 = strtoupper($row["hoonname"]);
		echo "[ ALERT ] ".$hoonname1." [ Current Price ] : " .$row["price_current"]. "  > = [ Alert Price ] : " . $row["price_alert"].$row["uid"]."<br>";
		if($row["type"]=='H')
		{
			$text_alert = "[alert] ".$hoonname1."\n[ ราคาปัจจุบัน]  ". $row["price_current"]."\n"."......... > .........\n"."[ ราคาทีตั้งเเจ้งเตือน ] ". $row["price_alert"];
			$USERID =$row["uid"];
		}
		else if($row["type"]=='SAME')
		{
			$text_alert = "[ SAME PRICE ] ".$hoonname1."\n[ ราคาปัจจุบัน ] ". $row["price_current"]."\n"."......... = .........\n"."[ ราคาทีตั้งเเจ้งเตือน ] " .$row["price_alert"]." รบกวนพิมพ์ใหม่อีกครั้ง ";
			$USERID =$row["uid"];
		}
		else if($row["type"]=='sameprice')
		{
			$text_alert = "[ SAME PRICE ] ".$hoonname1."\n[ ราคาปัจจุบัน ] ". $row["price_current"]."\n"."......... = .........\n"."[ ราคาทีตั้งเเจ้งเตือน ] " .$row["price_alert"];
			$USERID =$row["uid"];
		}
		else if($row["type"]=='notfound')
		{
			$text_alert = "Symbol Not Found";
			$USERID =$row["uid"];
		}
		else if($row["type"]=='de')
		{
			$text_alert = "[ Delete SUCCESS ] \n".$hoonname1;
			$USERID =$row["uid"];
		}
		else if($row["type"]=='denot')
		{
			$text_alert = "เกิดข้อมผิดพลาด ข้อมูลไม่ตรงกับฐานข้อมูล\n".$hoonname1." ราคา ". $row["price_alert"]."\n\n ข้อมูลตั้งเเจ้งเตือน";
			$USERID =$row["uid"];
		}
		else if($row["type"]=='shownot')
		{
			$text_alert = "ไม่พบข้อมูลการเเจ้งเตือนราคาหุ้น";
			$USERID =$row["uid"];
		}
		else if($row["type"]=='show')
		{
			$text_alert = $hoonname1;
			$USERID =$row["uid"];
		}
		else if($row["type"]=='pricert')
		{
			$text_alert = $hoonname1;
			$USERID =$row["uid"];
		}
		else if($row["type"]=='hoonsame')
		{
			$text_alert = "..มีการเเจ้งเตือน..\n".$hoonname1." อยู่เเล้ว";
			$USERID =$row["uid"];
		}
		else
		{
			$text_alert = "[ ALERT ] ".$hoonname1."\n[ ราคาปัจจุบัน ] ". $row["price_current"]."\n"."......... < .........\n"."[ ราคาทีตั้งเเจ้งเตือน ] ". $row["price_alert"];
			$USERID =$row["uid"];
		}
    }
} else {
    echo "0 results";
}
$link->close();

$access_token = 'J81JqjhEqIJMF6okb9jTNt3HWNZiE1zhZrmhbS3WZ/KTQovd6HzM5B+iQYnlFt7wz1S+UJyFzmGnd/AivBF0v1Lz9jaKAnxNsWxBlLSNWmkn1otG8tlzONrbEx5BOXysEwFX46Zk/AmD7JyKsxy3EQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');

echo "aaaaa";

// Parse JSON
$events = json_decode($content, true);
				$msg = $text_alert;
				$format_text = [
					"type" => "text",
					"text" => $msg
				];
		 
				$post_data = [
					"to" => $USERID,
					"messages" => [$format_text]
				];
				
				$header = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
				
				echo "ssss";
		 
				$ch = curl_init('https://api.line.me/v2/bot/message/push');
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
				curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		 
				$result = curl_exec($ch);
				curl_close($ch);
?>