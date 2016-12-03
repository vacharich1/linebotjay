<?php

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

$access_token = 'J81JqjhEqIJMF6okb9jTNt3HWNZiE1zhZrmhbS3WZ/KTQovd6HzM5B+iQYnlFt7wz1S+UJyFzmGnd/AivBF0v1Lz9jaKAnxNsWxBlLSNWmkn1otG8tlzONrbEx5BOXysEwFX46Zk/AmD7JyKsxy3EQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		
		if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b')
		{
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
										}
										
										if($result == 2)
											$timeframe = $textcut[1];
										else
											$timeframe ="1";
								}
								$check ="check1";
								$sql = "INSERT INTO hoon_check (id, hoonname, timeframe,room)
								VALUES ('', '$hoonname', '$timeframe',$room)";
								
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
								
								
								// Get replyToken
								$replyToken = $event['replyToken'];
								
								sleep(6);
								
								$sql = "SELECT id, word FROM data";
								$result = mysqli_query($link, $sql);
								
								$message_res='check id correct'
								
								if (mysqli_num_rows($result) > 0) {
									// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
										#echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
										$message_res=$row["word"]
								}
								} else {
									echo "0 results";
								}
					
								// Build message to reply back
								$messages = [
									'type' => 'text',
									'text' => $text
								];
								if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b')
								{
									$messages = [
									'type' => 'text',
									'text' => $message_res
								];
									
								}
								
								$messages2 = ['type' => 'image',
											'originalContentUrl' => 'https://photos.google.com/photo/AF1QipOiPjRtFHpDzq2fJ_-U3xoCanqxxstT00zJ4Ror',
											'previewImageUrl' => 'https://photos.google.com/photo/AF1QipOiPjRtFHpDzq2fJ_-U3xoCanqxxstT00zJ4Ror'
								];
					
								// Make a POST Request to Messaging API to reply to sender
								$url = 'https://api.line.me/v2/bot/message/reply';
								$data = [
									'replyToken' => $replyToken,
									'messages' => [$messages]
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
					
								echo $result . "\r\n";
							}
		}
	}
}
echo "OK";