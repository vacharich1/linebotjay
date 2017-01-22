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
				
				$messages33 =['type'=> 'template',
								  'altText'=> 'this is a carousel template',
								  'template'=> [
									  'type'=> 'carousel',
									  'columns'=> [
													  [
														'thumbnailImageUrl'=> 'https://www.botbottest.club/rsi.jpg',
														'title'=> 'rsi?',
														'text'=> 'RSI เป็นเครื่องมือที่นำมาใช้วัดการแกว่งตัวของราคาหุ้น สำหรับการลงทุนในช่วงหนึ่ง อ่านต่อ คลิก view detail',
														'actions' => [
																			[
																				'type'=> 'uri',
																				'label'=> 'View detail',
																				'uri'=> 'https://www.botbottest.club/rsiis.jpg'
																			]
																											
																	]
													  ],
													  [
														'thumbnailImageUrl'=> 'https://www.botbottest.club/rsi30.jpg',
														'title'=> 'rsi<30',
														'text'=> 'rsi<30 เข้าเขต oversold',
														'actions' => [
																			[
																				'type'=> 'uri',
																				'label'=> 'View detail',
																				'uri'=> 'https://www.botbottest.club/rsiis.jpg'
																			]
																											
																	]
													  ],
													  [
														'thumbnailImageUrl'=> 'https://www.botbottest.club/rsi3035.jpg',
														'title'=> '35>rsi>30',
														'text'=> 'rsi<35 กำลังเข้าเขต oversold',
														'actions' => [
																			[
																				'type'=> 'uri',
																				'label'=> 'View detail',
																				'uri'=> 'https://www.botbottest.club/rsiis.jpg'
																			]
																											
																	]
													  ],
													  [
														'thumbnailImageUrl'=> 'https://www.botbottest.club/rsi70.jpg',
														'title'=> 'rsi>70',
														'text'=> 'rsi>70 เข้าเขต overbought',
														'actions' => [
																			[
																				'type'=> 'uri',
																				'label'=> 'View detail',
																				'uri'=> 'https://www.botbottest.club/rsiis.jpg'
																			]
																											
																	]
													  ]
									  			]
								  			]
							];
		 
				$post_data = [
					"to" => $USERID,
					"messages" => [$messages33]
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






