<?php


public function pushMessage($USERID, $msg)
    {
        $format_text = [
            "type" => "text",
            "text" => $msg
        ];
 
        $post_data = [
            "to" => $USERID,
            "messages" => [$format_text]
        ];
 
        $header = array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->CHANNEL_ACCESS_TOKEN
        );
 
        $ch = curl_init('https://api.line.me/v2/bot/message/push');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 
        $result = curl_exec($ch);
        curl_close($ch);
    }

echo "aaaaa";
    $host= "sql6.freemysqlhosting.net";
	$db = "sql6147630";
	$CHAR_SET = "charset=utf8"; 
 
	$username = "sql6147630";    
	$password = "4RfrLrXWSH";   
	

	$link = mysqli_connect($host, $username, $password, $db);
	if (!$link) {
    		die('Could not connect: ' . mysqli_connect_errno());
	}
	else
	{
		echo "connect";
	}
 
	/*try {
		
	
		$db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);

		//echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
		
		$sql = "SELECT * FROM book";
	
		$query = $db->query($sql);
	
		//echo "<pre>".print_r($query->fetchAll(), true)."</pre>"; 
		
		// เปลี่ยนมาใช้ fecth()
		echo "<pre>".print_r($query->fetch(), true)."</pre>"; 
		
		// วนซ้ำ แสดงผลทั้งหมด
		while($row = $query->fetch()) {
			//echo "<pre>".print_r($row, true)."</pre>";
		}
	
		echo "connect";
	
	
	} catch (PDOException $e) {
	
		echo "connot connect".$e->getMessage();
		echo "assacc";
	
	}*/

$access_token = 'J81JqjhEqIJMF6okb9jTNt3HWNZiE1zhZrmhbS3WZ/KTQovd6HzM5B+iQYnlFt7wz1S+UJyFzmGnd/AivBF0v1Lz9jaKAnxNsWxBlLSNWmkn1otG8tlzONrbEx5BOXysEwFX46Zk/AmD7JyKsxy3EQdB04t89/1O/w1cDnyilFU=';
$CHANNEL_SECRET = '76f21c4e0b844b8b0fb56219aa1fb04f';
// Get POST body content
$content = file_get_contents('php://input');

// Parse JSON
$events = json_decode($content, true);

$yows = new YOWS($CHANNEL_SECRET, $access_toke, $content);

// Validate parsed JSON data
if (!is_null($events['events'])) {
	
	
// Loop through each event
	//1: printer Cd3afd7bd7719ceb0822ea162b50000fb
	//2:jay black graph C26d889d89b336a786c06358c1e2df27c
	//3:member_line_bot C7ab92191511e47ff839c174e7f2104c5
	//4:bot 3g 3r C941fb2b8a40f9d0f400969fa848c3386
	//5:jay 1 graph C9f2b93574be7434e6e7180a7d7503601
	//6: jay free graph C209fd17b6508ec4786c16e775638e4ae
	//7: ideatrade bot 1 Cb880ba168d17c69174b652045a8f8b90
	//8: ideatrade bot 2 C1970832b0d5e677dc1498442f8412be7
	//9:member2 C328035648eddea983ff6b6a3fc7622ec
	
	foreach ($events['events'] as $event) {
		if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['groupId'] =='Cc5000f2d47fa9df8096c866a6f4402e9')
		{
			
			 $yows->pushMessage("Ub5f45b12f0f8f8a3a08e5b52ebbcc96b", "test push");
				
			// Reply only when message sent is in 'text' format
			if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
				// Get text sent
				$text = $event['message']['text'];
				
				$textcut = explode(" ", $text);
				$result = count($textcut);
				if($result <= 2)
				{
						$count_text_cut = strlen($textcut[0]);
						$x=0;
						$arr1 = str_split($textcut[0]);
						if($arr1[0] == "@")
						{
							$hoonname = substr($textcut[0], 1); // cut@
							if(preg_match("/^[a-zA-Z]+$/", $hoonname[0]) != 1) 
							{
								$replyToken = $event['replyToken'];
								$messages556 = ['type' => 'text','text' => "รบกวนพิมอีกครั้งจ๊ะ ต้องไม่มีช่องว่าง ในชื่อหุ้น  @ aot ----> @aot type with no space"];
								// Make a POST Request to Messaging API to reply to sender
								$url = 'https://api.line.me/v2/bot/message/reply';
								$data = [
									'replyToken' => $replyToken,
									'messages' => [$messages556]
								];
								$post = json_encode($data);
								$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
					
								$ch = curl_init($url);
								curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
								curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
								curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
								curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
								$result = curl_exec($ch);
								curl_close($ch);	
							}
							else
							{
								//echo $count_text_cut;
								
								if($result == 2)
									$timeframe = $textcut[1];
								else
									$timeframe ="all";
								#echo $hoonname;
								$room='1';
								
								$sql = "INSERT INTO hoon_check (id, hoonname, timeframe,room)
								VALUES ('', '$hoonname', '$timeframe','$replyToken')";
								
								if (mysqli_query($link, $sql)) {
										echo "New record created successfully";
								} 
								else {
										echo "Error: " . $sql . "<br>" . mysqli_error($link);
								}
								sleep(0.3);
								$check ="check1";
								#echo "work code";
								$sql = "INSERT INTO `check_capture`(`id`, `check1`) VALUES ('','$check')";
								if (mysqli_query($link, $sql)) {
										echo "New record created successfully";
								} 
								else {
										echo "Error: " . $sql . "<br>" . mysqli_error($link);
								}
									#echo "work code";
								// Get replyToken
								$replyToken = $event['replyToken'];
								$hoonname1 = strtoupper($hoonname);
								if($hoonname1 == '2S')
									$llll = "https://www.dropbox.com/s/cov1jrkmhe8q81n/2S.png";																																		
								else
									$llll = "https://www.dropbox.com/s/j09fwo3536hdkib/pic.png?dl=0";
								// Build message to reply back
								#$messages = ['type' => 'text','text' => $event['source']['roomid']];
								$messages4 = ['type' => 'text','text' => $event['source']['type']];
								
								$messages5 = ['type' => 'text','text' => $event['source']['groupId']];
								sleep(4);
								
								
								$text_recieve="aaaaa";
								
								
								$sql = "SELECT * FROM `data` WHERE 1";
								$result = $link->query($sql);
								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										$text_recieve=$row["word"];
										
									}
								} else {
									echo "0 results";
								}
								$link->close();
								sleep(0.5);
								
								$sql = "DELETE FROM `data` WHERE 1";

								if ($link->query($sql) === TRUE) {
									echo "Record deleted successfully";
								} else {
									echo "Error deleting record: " . $link->error;
								}
								
								$link->close();
								
								
								//$llll ='SORRY, OUT OF SERVICE';
								$messages3 = ['type' => 'text','text' => $text_recieve];
					
								$messages1 = ['type' => 'text','text' => $llll];
								
								$messages2 = ['type' => 'image',
										 'originalContentUrl' => 'http://static.bigstockphoto.com/images/homepage/2016_popular_photo_categories.jpg',
										 'previewImageUrl' => 'http://static.bigstockphoto.com/images/homepage/2016_popular_photo_categories.jpg'
								];
								
								// Make a POST Request to Messaging API to reply to sender
								$url = 'https://api.line.me/v2/bot/message/reply';
								$data = [
									'replyToken' => $replyToken,
									'messages' => [$messages3]
								];
								$post = json_encode($data);
								$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
					
								$ch = curl_init($url);
								curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
								curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
								curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
								curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
								$result = curl_exec($ch);
								curl_close($ch);
								
								
								
								
								
								#echo "check1";
								#sleep(10);
								#echo $result . "\r\n";
							}
						}
						else
						{
							if(preg_match("/^[a-zA-Z]+$/", $text[0]) == 1) {
								$replyToken = $event['replyToken'];
								$messages55 = ['type' => 'text','text' => "ลืม @ นะจ๊ะ "];
								// Make a POST Request to Messaging API to reply to sender
								$url = 'https://api.line.me/v2/bot/message/reply';
								$data = [
									'replyToken' => $replyToken,
									'messages' => [$messages55]
								];
								$post = json_encode($data);
								$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
					
								$ch = curl_init($url);
								curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
								curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
								curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
								curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
								$result = curl_exec($ch);
								curl_close($ch);
							}
							else
							{
								if($text == 'เเสดงคำสั่งทั้งหมด' || $text == 'คำสั่ง' )
								{
									$replyToken = $event['replyToken'];
									$messages55 = ['type' => 'text','text' => "@checkgpu 1 เเสดงข้อมูลการ์ใบที่1 
																				@checkgpu 2 เเสดงข้อมูลการ์ดใบที่ 2 
																				@checkgpu all เเสดงการ์ดจอทุกใบที่มี"];
									// Make a POST Request to Messaging API to reply to sende
									$url = 'https://api.line.me/v2/bot/message/reply';
									$data = [
												'replyToken' => $replyToken,
												'messages' => [$messages55]
											];
									$post = json_encode($data);
									$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
											
									$ch = curl_init($url);
									curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
									curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
									curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
									curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
									curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
									$result = curl_exec($ch);
									curl_close($ch);
								}	
								
							}
							
						}
				
					}//ifresult<2
			 }//if ($event['type'] == 'message' && $event['message']['type'] == 'text')
		}//if($event['source']['groupId'] 
		else
		{
				
				foreach ($events['events'] as $event) {
					$text = $event['message']['text'];
			
					if($text == '@@addgroupbyjay_botroom')
					{
							$replyToken = $event['replyToken'];
							$messages55 = ['type' => 'text','text' => $event['source']['groupId']];
							// Make a POST Request to Messaging API to reply to sender
							$url = 'https://api.line.me/v2/bot/message/reply';
							$data = [
										'replyToken' => $replyToken,
										'messages' => [$messages55]
									];
							$post = json_encode($data);
							$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
									
							$ch = curl_init($url);
							curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
							curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
							curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
							curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
							$result = curl_exec($ch);
							curl_close($ch);
					}
					
					
				}
				
		}
	}//for
}

#echo "OK11";