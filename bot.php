<?php

echo "aaaaa";
    $host= "sql6.freemysqlhosting.net";
	$db = "sql6144521";
	$CHAR_SET = "charset=utf8"; 
 
	$username = "sql6144521";    
	$password = "IAC4FPTQV2";   
	

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
								// Get replyToken
								$replyToken = $event['replyToken'];
					
								// Build message to reply back
								$messages = [
									'type' => 'text',
									'text' => $text
								];
								if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b')
								{
									$messages = [
									'type' => 'text',
									'text' => 'check id correct'
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