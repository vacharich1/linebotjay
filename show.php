<?php

$access_token = 'J81JqjhEqIJMF6okb9jTNt3HWNZiE1zhZrmhbS3WZ/KTQovd6HzM5B+iQYnlFt7wz1S+UJyFzmGnd/AivBF0v1Lz9jaKAnxNsWxBlLSNWmkn1otG8tlzONrbEx5BOXysEwFX46Zk/AmD7JyKsxy3EQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');

echo "aaaaa";

// Parse JSON
$events = json_decode($content, true);
				$msg = "GPU TEMP UNDER";
				$USERID = "Ub5f45b12f0f8f8a3a08e5b52ebbcc96b";
				$format_text = [
					"type" => "text",
					"text" => $msg
				];
		 
				$post_data = [
					"to" => $USERID,
					"messages" => [$format_text]
				];
				
				$header = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
		 
				$ch = curl_init('https://api.line.me/v2/bot/message/push');
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
				curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		 
				$result = curl_exec($ch);
				curl_close($ch);
?>






