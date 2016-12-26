<?php

$host= "sql6.freemysqlhosting.net";
$db = "sql6150739";
$CHAR_SET = "charset=utf8"; 
 
$username = "sql6150739";    
$password = "xiGjqcGnZb";   
	

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
		echo "[alert] : ". $row["hoonname"]." [ Current Price ] : " . $row["price_current"]. "  > = [ Alert Price ] : " . $row["price_alert"].$row["uid"]."<br>";
		if($row["type"]=='H')
		{
			$text_alert = "[alert] : ". $row["hoonname"]." [ Current Price ] : " . $row["price_current"]. "  > = [ Alert Price ] : " . $row["price_alert"]. "<br>";
			$USERID =$row["uid"];
		}
		else if($row["type"]=='SAME')
		{
			$text_alert = "[same price] : ". $row["hoonname"]." [ Current Price ] : " . $row["price_current"]. "  == [ Alert Price ] : " . $row["price_alert"]." please sent new alert";
			$USERID =$row["uid"];
		}
		else
		{
			$text_alert = "[alert] : ". $row["hoonname"]." [ Current Price ] : " . $row["price_current"]. "  < =  [ Alert Price ] : " . $row["price_alert"]. "<br>";
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