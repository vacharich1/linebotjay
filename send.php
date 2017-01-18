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
			$text_alert = "[alert] ".$hoonname1."\n[ ราคาปัจจุบัน]  ". $row["price_current"]."\n"."......... > .........\n"."[ ราคาทีตั้งเเจ้งเตือน ] ". $row["price_alert"]."\n BY : JFOURTWINS";
			$USERID =$row["uid"];
		}
		else if($row["type"]=='SAME')
		{
			$text_alert = "[ SAME PRICE ] ".$hoonname1."\n[ ราคาปัจจุบัน ] ". $row["price_current"]."\n"."......... = .........\n"."[ ราคาทีตั้งเเจ้งเตือน ] " .$row["price_alert"]." รบกวนพิมพ์ใหม่อีกครั้ง "."\n BY : JFOURTWINS";
			$USERID =$row["uid"];
		}
		else if($row["type"]=='sameprice')
		{
			$text_alert = "[ SAME PRICE ] ".$hoonname1."\n[ ราคาปัจจุบัน ] ". $row["price_current"]."\n"."......... = .........\n"."[ ราคาทีตั้งเเจ้งเตือน ] " .$row["price_alert"];
			$USERID =$row["uid"];
		}
		else if($row["type"]=='notfound')
		{
			$text_alert = "Symbol Not Found, Please try again";
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
		else if($row["type"]=='@p')
		{
			$text_alert = "".$hoonname1." ราคาปัจจุบัน ". $row["price_current"]."\n By : JFOURTWINS";
			$USERID =$row["uid"];
		}
		else if($row["type"]=='@p_not')
		{
			$text_alert = "".$hoonname1." ไม่ตรงกับฐานข้อมูล โปรดพิมอีกครั้ง\n"." By : JFOURTWINS";
			$USERID =$row["uid"];
		}
		else if($row["type"]=='dataover')
		{
			//$text_alert = "ขออภัยสำหรับ user ฟรี สามารถตั้งเเจ้งเตือนได้เเค่ 3 ตัวเท่านั้น สนใจตั้งเพิ่มเติ่มรบกวนติดต่อ\n line : vacharich";
		    $text_alert = "ขออภัยตั้งเเจ้งเตือนได้ เพียง 200 ตัวเท่านั้น";
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
			$text_alert = "มีการเเจ้งเตือน :".$row["hoonname"].$row["price_current"].$row["price_alert"]." อยู่เเล้ว";
			$USERID =$row["uid"];
		}
		else if($row["type"]=='feedindex')
		{
			$text_alert = $row["hoonname"];
			$USERID =$row["uid"];
		}
		else if($row["type"]=='rsi')
		{
			$text_alert = "RSI เป็นเครื่องมือที่นำมาใช้วัดการแกว่งตัวของราคาหุ้น สำหรับการลงทุนในช่วงหนึ่ง ซึ่ง RSIนี้จะวิ่งอยู่ระหว่าง 0 - 100 โดยมีสัญญาณหลักๆคือ\n\nสัญญาณ\nOverbought RSI > 70\n   หมายความว่า ราคาหุ้นได้เพิ่มสูงขึ้นมาก ให้ระวังว่าราคาหุ้นอาจจะมีการพักตัวชั่วคราว หรืออาจจะปรับตัวลดลงในอนาคต แต่ไม่ได้หมายความว่าราคาหุ้นจะต้องปรับตัวลดลงจริง ๆ ในอนาคต\n\nสัญญาณ\nOversold RSI < 30\n    หมายความว่า ราคาหุ้นได้ลดลงมากแล้ว ให้ระวังว่าราคาหุ้นอาจจะมีการเด้งขึ้นชั่วคราว หรืออาจจะปรับตัวสูงขึ้นขึ้นในอนาคต แต่ไม่ได้หมายความว่าราคาหุ้นจะต้องปรับตัวขึ้นจริง ๆ ในอนาคต\n\nวิธีใช้งาน RSI\n\n1) ต่ำกว่าเส้น 30 คืออยู่ในเขต oversold \n2) เหนือกว่าเส้น 70 คืออยู่ในเขต overbought".$row["hoonname"].$row["price_current"].$row["price_alert"].$row["room"];
			$USERID =$row["uid"];
		}
		else
		{
			$text_alert = "[ ALERT ] ".$hoonname1."\n[ ราคาปัจจุบัน ] ". $row["price_current"]."\n"."......... < .........\n"."[ ราคาทีตั้งเเจ้งเตือน ] ". $row["price_alert"]."\n BY : JFOURTWINS";
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
				
		 		//$USERID
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