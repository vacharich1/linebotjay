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
		$userid = strtoupper($row["userid"]);
		echo $userid
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
		
		echo "ssss11";
		
		$ch = curl_init('https://api.line.me/v2/bot/message/push');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		
		
		sleep(0.5);
		if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['userId'] == 'Uf120d9606f0eaa9bd32e18f8c85ea58f')
				$userid = $event['source']['userId'];	
		else
				$userid = $event['source']['groupId'];	
				
				
		$messages55 = ['type' => 'text','text' => "ระบบจะตอบกลับมา\n AOT ราคาปัจจุบันคือ 390 by jfourtwins "];	
				
		
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
		
		sleep(0.5);
		if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['userId'] == 'Uf120d9606f0eaa9bd32e18f8c85ea58f')
				$userid = $event['source']['userId'];	
		else
				$userid = $event['source']['groupId'];	
				
				
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
		
		sleep(0.5);
		if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['userId'] == 'Uf120d9606f0eaa9bd32e18f8c85ea58f')
				$userid = $event['source']['userId'];	
		else
				$userid = $event['source']['groupId'];	
				
				
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
		
		sleep(0.5);
		if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['userId'] == 'Uf120d9606f0eaa9bd32e18f8c85ea58f')
				$userid = $event['source']['userId'];	
		else
				$userid = $event['source']['groupId'];	
				
				
		$messages55 = ['type' => 'text','text' => "หากต้องการดูว่ามีการเเจ้งเตือนหุ้นตัวไหนบ้างให้พิม @show all คำสั่งเเจ้งเตือนราคาคราวๆเท่านี้ครับ"];	
				
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
		
		sleep(1);
		if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['userId'] == 'Uf120d9606f0eaa9bd32e18f8c85ea58f')
				$userid = $event['source']['userId'];	
		else
				$userid = $event['source']['groupId'];	
				
				
		$messages55 = ['type' => 'text','text' => "การดูข้อมูลหุ้นพื้นฐานจะมีข้อมูลราวๆ 15 ตัวที่สามารถดูได้"];	
				
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
		
		}
		if($text == 'คำสั่งเเจ้งเตือน' )
		{
		$replyToken = $event['replyToken'];
		$messages66 = ['type' => 'text','text' => "คำสั่งเเจ้งเตือนราคาทั้งหมด \n\n@show all \nคือเเสดงรายการที่มีการตั้งเเจง้เตือนไว้\n\n@de all\nคือลบข้อมูลรายการเเจ้งเตือนทั้งหมด\n\n@de aot 400\nคือการลบข้อมูลหุ้น aot ที่ตั้งเเจ้งเตือนไว้ที่ราคา 400 บาท\n\n@aot>400\nคือการตั้งเเจ้งเตือนราคาถ้าหุ้นaotเกิน400บาทจะเเจ้งเตือน\n\n@aot<400\nคือเหมือนด้านบนเเต่ราคาน้อยกว่าเเทน\n\n@aot=400\nคือถ้าราคาเท่ากับ400จะเเจ้งเตือน\n\n@p aotคือ เช็คราคาปัจจุบันของหุ้นaot"];
		// Make a POST Request to Messaging API to reply to sende
		$url = 'https://api.line.me/v2/bot/message/reply';
		$data = [
								'replyToken' => $replyToken,
								'messages' => [$messages66]
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
  

?>
