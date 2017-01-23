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


$link = mysqli_connect($host, $username, $password, $db);
if (!$link) {
    	die('Could not connect: ' . mysqli_connect_errno());
}



$sql1 = "SELECT * FROM `teach` WHERE 1";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$userid = $row["userid"];
		$access_token = 'J81JqjhEqIJMF6okb9jTNt3HWNZiE1zhZrmhbS3WZ/KTQovd6HzM5B+iQYnlFt7wz1S+UJyFzmGnd/AivBF0v1Lz9jaKAnxNsWxBlLSNWmkn1otG8tlzONrbEx5BOXysEwFX46Zk/AmD7JyKsxy3EQdB04t89/1O/w1cDnyilFU=';
		// Get POST body content
		$content = file_get_contents('php://input');
		
		sleep(2);
		#if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['userId'] == 'Uf120d9606f0eaa9bd32e18f8c85ea58f')
		#	$userid = $event['source']['userId'];	
		#else
		#	$userid = $event['source']['groupId'];	
												
												
		$messages55 = ['type' => 'text','text' => "วิธีการใช้เเจ้งเตือนราคาหุ้น มีคำสั่งตามด้านบน\n - ถ้าต้องการดูราคาหุ้น aot พิม @p aot "];	
												
		$post_data = [
						'to' => $userid,
						'messages' => [$messages55]
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
		
		sleep(3);
		$messages55 = ['type' => 'text','text' => "ระบบจะตอบกลับมา\n\n AOT ราคาปัจจุบันคือ 390 by jfourtwins"];	
												
		$post_data = [
						'to' => $userid,
						'messages' => [$messages55]
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
		
		sleep(3);
		$messages55 = ['type' => 'text','text' => "หากต้องการเเจ้งเตือนราคาหุ้น aot จะสามารถใช้ได้สามเเบบ > , < , = โดยการพิมคือ\n @aot>390 คือการตั้งเเจ้งเเตือน"];	
												
		$post_data = [
						'to' => $userid,
						'messages' => [$messages55]
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
		
		sleep(3);
		$messages55 = ['type' => 'text','text' => "ระบบจะตอบกลับมาคือ [ALERT HOON] aot>390 คือระบบได้ทำการบันทึกเเล้ว"];	
												
		$post_data = [
						'to' => $userid,
						'messages' => [$messages55]
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
		
		sleep(5);
		$messages55 = ['type' => 'text','text' => "ต้องการดูว่ามีการเเจ้งเตือนหุ้นตัวไหนบ้างให้พิม @show all คำสั่งเเจ้งเตือนราคาคราวๆเท่านี้ครับ สามารถลบข้อมูลเได้ด้วยนะครับดูจาก คำสั่งได้"];	
												
		$post_data = [
						'to' => $userid,
						'messages' => [$messages55]
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
		
		sleep(3);
		$messages55 = ['type' => 'text','text' => "ต้องการดูข้อมูลพื้นฐานของหุ้น aot จะสามารถดูได้ 15 ข้อมูล โดยพิม @aot เว้น วรรดตามชนิดข้อมูล\n เช่น assert\n พิม @aot as ไดเลย"];	
												
		$post_data = [
						'to' => $userid,
						'messages' => [$messages55]
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
		sleep(3);
		$messages33 = [	 'type' => 'template',
             'altText' => 'test',
             'template' => [	'type' => 'buttons', 
                                                    'thumbnailImageUrl'=> 'https://www.botbottest.club/aoteps.jpg',
                                                    'title' => $hoonname,
                                                    'text'  => $timeframe,
                                                    'actions' => [
                                                                    [
                                                                            'type'=> 'uri',
                                                                            'label'=> 'View detail',
                                                                            'uri'=> 'https://www.botbottest.club/aoteps.jpg'
                                                                    ]
                                                                    
                                             ]
                            
                                      ]

		];
		
		$post_data = [
						'to' => $userid,
						'messages' => [$messages33]
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
		
		
	}
}
		
		


?>
