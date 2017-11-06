<?php

///////////////////////////////////////////////


echo "aaaaa";
echo "bbbbb";
echo "bbbbb";
    $host= "sql6.freemysqlhosting.net";
	//$db = "sql6150739";
	$db = "sql6155499";
	$CHAR_SET = "charset=utf8"; 
 
	//$username = "sql6150739";    
	//$password = "xiGjqcGnZb";   
	$username = "sql6155499";    
	$password = "xwBrDIuGaA"; 
	

	$link = mysqli_connect($host, $username, $password, $db);
	if (!$link) {
    		die('Could not connect: ' . mysqli_connect_errno());
	}
	else
	{
		echo "connect";
	}
	
echo "bbbbb";	
$check_g="0";

$access_token = 'J81JqjhEqIJMF6okb9jTNt3HWNZiE1zhZrmhbS3WZ/KTQovd6HzM5B+iQYnlFt7wz1S+UJyFzmGnd/AivBF0v1Lz9jaKAnxNsWxBlLSNWmkn1otG8tlzONrbEx5BOXysEwFX46Zk/AmD7JyKsxy3EQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');

// Parse JSON
$events = json_decode($content, true);

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
//20:kong portrabort U7fd7eee8c6ab03c5f8c12b51b47a09c8
//21:alertb jfourtwins 91 Ce0b403e04c0d9382ebfad651f49edb4d
//22:alertb jfourtwins 92 C10c8b07501a03b533ad1d6ef2eb1d796
//23:alertb jfourtwins 93 C38175a4518412c04d7c3d6ca9658e48e
//24:alertb jfourtwins 94 C7223df793f44a88acd6199812ca5e684
//25:alertb jfourtwins 95 C10040e1fac3ffbac67fde46ec67990db
//26:alertb jfourtwins 96 Cfcb7acee947b6f0c60aae2309f262e52
//27:alertb jfourtwins 97 C5c710b322fb13653c6be2fdb974bc3bf
//28:Tfex C08225c330573130c678d2cd6fa60dda3 
//29: work shop 
//30.mai U00787737427143dedc0621eb52479222
//31.pon $event['source']['userId'] == 'Ub6bf6c9b02422caa946c98d863df91be' ||
//31.deedy ktbs $event['source']['userId'] == 'U041c1d5d39e47932485dcb31ed11f266' ||
//31.jay ktbs $event['source']['userId'] == 'U509014d018d7b14f1fee0f4942a97bb3' ||
//99 Z test room $event['source']['userId'] == 'Cd8a849509b94f8e164461420ff9c69cd' ||
//34 p dear Uf120d9606f0eaa9bd32e18f8c85ea58f
	 
//133BlOCK K'GIFT Cbb1b9c9dab76eef8e5ed8c9800f594b5
//134BLOCK KHUANG Cf008e45b3560032d1eb5fbdb6ddc2c43
//135BLOCK K'KHEM C2d1387af7f2adcc0cd58032d86efd5ed
//136BLOCK K'peter Cd1535b9da2590c65e5da8968e3770acc
//137BLOCK K'pipat C1b711548d509a34653aaa29195c071f0
//138BLOCK K'Ratch C0b785cd566665fcc1552fc5058675979
///139BLOCK K'Supkorn C8b5c7927ff48cf17a843225d49b1db15
//140BLOCK K'vijuck C9f0ef2857de08b6f4b76093a02bcf5de
//141BLOCK N'cj Caa434359d1c557a84b6ceee7ab537fd7
//142BLOCK Pnuj C4a548105883e306fc832b1187ef4544e
//143BLOCK P/ONE Ce2c5c0d07c8ac2097308d24f16231d37
//166 K thanadet Cdac8cdceb9108be04281c4ad2e537312
//188 K Prasit C790dd32ae8e0d99b827e0288b01a0704
//199 K kratae C72411396da7fdf56d55fba94313865e3

//กดเเถบ 1 ครั้ง 
//144BLOCK P.POK C767f906dfb84091344207472c237b081

//301 kpom Ccef7269485facbaa8bd7480fc089f798
//302 kprairoj Ce381889d3d2381757866a28931f6fdeb
//155 k'kamphol C2d138fa3520426eb9f46ffb6dce72d0
//156 K'pb Cac276250bae968b7dd3416f35dadac
//145 k'kamphol C2d138fa3520426eb9f46ffb6dce72d08
//146 K'pb Cac276250bae968b7dd3416f35dadac92
//1001 K'KOR C86d9a41a47402063e99d59732f4d0f8b

	foreach ($events['events'] as $event) {
		$text = $event['message']['text'];
		if($text == '@@@@')
		{
				$replyToken = $event['replyToken'];
				$messages55 = ['type' => 'text','text' => $event['source']['userId']];
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
		
		if($text == '@@@@@')
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
		
		//user id group or induvidule
		///////////////////////////////////////////////
		if($event['source']['userId']==' U15c1ba16d211edf68f01ed74943602c4' || $event['source']['userId'] =='Ue1f0e93f7eba0bc026c7eb6d561de64b' || $event['source']['userId'] == 'U96419d67276450fe71ac0009b84072e1' || $event['source']['userId'] == 'U509014d018d7b14f1fee0f4942a97bb3' || $event['source']['userId'] == 'U041c1d5d39e47932485dcb31ed11f266' || $event['source']['userId'] == 'Ub6bf6c9b02422caa946c98d863df91be' || $event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' ||$event['source']['userId'] == 'Uf50e1aecdaadd0c9beb3e7b55e71b88c' || $event['source']['userId'] == 'U7fd7eee8c6ab03c5f8c12b51b47a09c8'|| $event['source']['userId'] =='U00787737427143dedc0621eb52479222')
			$userid = $event['source']['userId'];	
		else
			$userid = $event['source']['groupId'];
			
		if($event['source']['groupId'] == 'C08ed601df0ae440832b09b496cb0c83a')
		{
			if ($event['type'] == 'image' && $event['message']['type'] == 'image') {
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
  
		//SEND ALL ROOM
		///////////////////////////////////////////////
		if($event['source']['groupId'] == 'C877d5aaeeb523122482b7e0580450cd7')
		{
			if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
				if($text =="หุ้นที่มีเเจ้งเตือน" || $text =="หุ้นเเจ้งเตือน" || $text =="หุ้นแจ้งเตือน" || $text =="ลบทั้งหมด")	
				{
					//188 K Prasit C790dd32ae8e0d99b827e0288b01a0704
					//199 K kratae C72411396da7fdf56d55fba94313865e3	
				}
				else
				{
						
						$arr = array('C877d5aaeeb523122482b7e0580450cd7','Ce89f80c9c5a8f4fcb851e40be6b1ed5b','C2d49a85fb094bc90ff9570ff1490e046','Cd75232998108234664488e166f6c2313','C9fb7c4dfc9f7b2ea94196f07a62d2fc4','C9814aacf68dfee433e01449758ef91a1','Cb25406646b510fafa0b45ebeaea19737','C58e6deb47eb0c6eea4be1b36ee0c123d','C58b35d7a1c3b1026eabb5c3d309423f2','C661ec27c458cbcb0c73fdb3814182b09','C4c12c9d3c50ffa9355ab4ace9b5a410e','Ca9f38fce7ceaaf1b70effdf0368f8085','C1d43b6ff06f14ac10f5d41026bb7b0f3','Cc754ab90adf7432312426035ea1bd2f9' ,'C22e8a22dbe2173281e10d2d66128d5a5' ,'Ca91c9e8a2a08c8c757dafdcd2f9d2e69','C7bfe74990aeecaca1f37a2b030ad1b1e' ,'C86d9a41a47402063e99d59732f4d0f8b','Cbb1b9c9dab76eef8e5ed8c9800f594b5', 'Cf008e45b3560032d1eb5fbdb6ddc2c43', 'C2d1387af7f2adcc0cd58032d86efd5ed','Cd1535b9da2590c65e5da8968e3770acc','C1b711548d509a34653aaa29195c071f0', 'C0b785cd566665fcc1552fc5058675979', 'C8b5c7927ff48cf17a843225d49b1db15','C9f0ef2857de08b6f4b76093a02bcf5de','Caa434359d1c557a84b6ceee7ab537fd7','C4a548105883e306fc832b1187ef4544e','Ce2c5c0d07c8ac2097308d24f16231d37','Cdac8cdceb9108be04281c4ad2e537312','C767f906dfb84091344207472c237b081','C790dd32ae8e0d99b827e0288b01a0704','C72411396da7fdf56d55fba94313865e3' ,'Ce381889d3d2381757866a28931f6fdeb', 'Ccef7269485facbaa8bd7480fc089f798','C2d138fa3520426eb9f46ffb6dce72d08','Cac276250bae968b7dd3416f35dadac92');
						
						$arr = array('C58e6deb47eb0c6eea4be1b36ee0c123d','C58b35d7a1c3b1026eabb5c3d309423f2');
						reset($arr);
						if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
							foreach ($arr as $USERID) {
								$format_text = [
									"type" => "text",
									"text" => $text
								];
								$post_data = [
										'to' => $USERID,
										'messages' => [$format_text]
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
						if ($event['type'] == 'image' && $event['message']['type'] == 'image') {
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
				}//else
			}
						
		}
		
		//GRAPH ONLY 
		//1:member2 C328035648eddea983ff6b6a3fc7622ec
		//2:jay black graph C26d889d89b336a786c06358c1e2df27c
		//3:bot 3g 3r C941fb2b8a40f9d0f400969fa848c3386
		///////////////////////////////////////////////
		if($event['source']['groupId'] == 'C328035648eddea983ff6b6a3fc7622ec' || $event['source']['groupId'] == 'C26d889d89b336a786c06358c1e2df27c' || $event['source']['groupId'] == 'C941fb2b8a40f9d0f400969fa848c3386')
		{
			// Reply only when message sent is in 'text' format
			if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
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
							if(preg_match("/^[a-zA-Z0-9]+$/", $hoonname[0]) != 1) 
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
									$timeframe ="d";
								#echo $hoonname;
								//Cb880ba168d17c69174b652045a8f8b90
								//8: ideatrade bot 2 C1970832b0d5e677dc1498442f8412be7
								$room='1';
								if($event['source']['groupId'] == 'C941fb2b8a40f9d0f400969fa848c3386' || $event['source']['groupId'] == 'C26d889d89b336a786c06358c1e2df27c')//graph black
								{
									if($event['source']['groupId'] == 'C941fb2b8a40f9d0f400969fa848c3386')
										$room="21";
									if($event['source']['groupId'] == 'C26d889d89b336a786c06358c1e2df27c')
										$room="22";
								}
								else if($event['source']['groupId'] == 'C328035648eddea983ff6b6a3fc7622ec')//graph 1
								{
									$room="15";
								}
								
								
								if($event['source']['groupId'] != 'C9fe78b803761432902f6d506b806bxxx')
								{
									//Cb880ba168d17c69174b652045a8f8b90
								//8: ideatrade bot 2 C1970832b0d5e677dc1498442f8412be7
									if($event['source']['groupId'] != 'Cb880ba168d17c69174b652045a8f8b90' and $event['source']['groupId'] != 'C1970832b0d5e677dc1498442f8412be7' )
									{

										$hoon_low = strtolower($hoonname);
										$type="gg";	
				    					$check ="check1";
										$sql = "INSERT INTO hoon_check2 (id, hoonname, price, room, uid, type) VALUES ('', '$hoon_low', 6666,'$room' ,'$timeframe', '$userid')";
											
										if (mysqli_query($link, $sql)) {
											echo "New record created successfully";
										} 
										else {
											echo "Error: " . $sql . "<br>" . mysqli_error($link);
										}
										$sql = "INSERT INTO `check_capture2`(`id`, `check1`) VALUES ('','$check')";
										if (mysqli_query($link, $sql)) {
											echo "New record created successfully";
										} 
										else {
											echo "Error: " . $sql . "<br>" . mysqli_error($link);
										}
										sleep(0.3);

									}
									//ประกาศ สมัครสมาชิก 300 บาท
									$messages1 = ['type' => 'text','text' => 'ประกาศ!!!!

เนื่องด้วย ฐานข้อมูลที่ใช้รันบอทนั้นได้เดือบเต็มแล้ว จึงต้องปรับเปลี่ยนเป็นการซื้อพื้นที่บนฐานข้อมูล จึงทำให้เกิดค่าใช้จ่าย เดียจึงขอ ปีละ 300 บาทต่อคน เพื่อเป็นฐานข้อมูลในการส่งกราฟ บอทครับ และจะทำการเปลี่ยนห้อง ไปอีกห้องเพื่อเรียกกราฟรูปแบบที่เรียกได้อยู่ทุกวันนี้ครับ

ติดต่อไลน์ dea-prop เพื่อส่งหลักฐานการโอนรายปี 300 บาทครับ'];

									//1: printer Cd3afd7bd7719ceb0822ea162b50000fb
									//2:jay black graph C26d889d89b336a786c06358c1e2df27c
									//3:member_line_bot C7ab92191511e47ff839c174e7f2104c5
									//4:bot 3g 3r C941fb2b8a40f9d0f400969fa848c3386
									//5:jay 1 graph C9f2b93574be7434e6e7180a7d7503601
									//6: jay free graph C209fd17b6508ec4786c16e775638e4ae
									//7: ideatrade bot 1 Cb880ba168d17c69174b652045a8f8b90
									//8: ideatrade bot 2 C1970832b0d5e677dc1498442f8412be7
									//9:member2 C328035648eddea983ff6b6a3fc7622ec
									if($event['source']['groupId'] == 'C328035648eddea983ff6b6a3fc7622ec' || $event['source']['groupId'] == 'C941fb2b8a40f9d0f400969fa848c3386' || $event['source']['groupId'] == 'C26d889d89b336a786c06358c1e2df27c' || $event['source']['groupId'] == 'C2debaa5f387f1d99d495ee1f62f25d27' || $event['source']['groupId'] == 'C50bdba4e60f90ced6002458b6fb1aa5b' || $event['source']['groupId'] == 'C9fe78b803761432902f6d506b806b354')
									{
										$aaa="aaa";
									}
									else
									{
										$url = 'https://api.line.me/v2/bot/message/reply';
										$data = [
											'replyToken' => $replyToken,
											'messages' => [$messages1]
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
						}

				
					}//ifresult<2
			 }//if ($event['type'] == 'message' && $event['message']['type'] == 'text')
		}//if($event['source']['groupId'] 

		
				
//301 kpom Ccef7269485facbaa8bd7480fc089f798
//302 kprairoj Ce381889d3d2381757866a28931f6fdeb	
//155 k'kamphol C2d138fa3520426eb9f46ffb6dce72d0
//156 K'pb Cac276250bae968b7dd3416f35dadac	







		//alertbot jfourtwins
		///////////////////////////////////////////////
		
		if($event['source']['groupId']== 'C877d5aaeeb523122482b7e0580450cd7' || $event['source']['groupId'] == 'Ce89f80c9c5a8f4fcb851e40be6b1ed5b' || $event['source']['groupId'] == 'C2d49a85fb094bc90ff9570ff1490e046' || $even ['source']['groupId']=='Cd75232998108234664488e166f6c2313'|| $event['source']['groupId'] == 'C9fb7c4dfc9f7b2ea94196f07a62d2fc4'|| $event['source']['groupId'] == 'C9814aacf68dfee433e01449758ef91a1'|| $event['source']['groupId'] == 'Cb25406646b510fafa0b45ebeaea19737' ||$event['source']['groupId'] == 'C08ed601df0ae440832b09b496cb0c83a' || $event['source']['groupId'] =='C58e6deb47eb0c6eea4be1b36ee0c123d' || $event['source']['groupId'] =='C58b35d7a1c3b1026eabb5c3d309423f2' || $event['source']['groupId'] =='C661ec27c458cbcb0c73fdb3814182b09' || $event['source']['groupId'] =='C4c12c9d3c50ffa9355ab4ace9b5a410e' || $event['source']['groupId'] =='Ca9f38fce7ceaaf1b70effdf0368f8085' ||  $event['source']['groupId'] =='C1d43b6ff06f14ac10f5d41026bb7b0f3' || $event['source']['groupId'] =='Cc754ab90adf7432312426035ea1bd2f9' || $event['source']['groupId'] =='C22e8a22dbe2173281e10d2d66128d5a5' || $event['source']['groupId'] =='Ca91c9e8a2a08c8c757dafdcd2f9d2e69' || $event['source']['groupId'] =='C7bfe74990aeecaca1f37a2b030ad1b1e' || $event['source']['userId'] =='U15c1ba16d211edf68f01ed74943602c4' || $event['source']['groupId'] =='C86d9a41a47402063e99d59732f4d0f8b' || $event['source']['userId'] =='U96419d67276450fe71ac0009b84072e1' || $event['source']['userId'] == 'Ue1f0e93f7eba0bc026c7eb6d561de64b' || $event['source']['groupId'] =='C2d138fa3520426eb9f46ffb6dce72d08' || $event['source']['groupId'] =='Cac276250bae968b7dd3416f35dadac92' || $event['source']['groupId'] =='Ccef7269485facbaa8bd7480fc089f798' || $event['source']['groupId'] =='Ce381889d3d2381757866a28931f6fdeb' || $event['source']['groupId'] =='C790dd32ae8e0d99b827e0288b01a0704' || $event['source']['groupId'] =='C72411396da7fdf56d55fba94313865e3' || $event['source']['groupId'] =='Cdac8cdceb9108be04281c4ad2e537312' || $event['source']['groupId'] =='C767f906dfb84091344207472c237b081' || $event['source']['groupId'] =='Cbb1b9c9dab76eef8e5ed8c9800f594b5' || $event['source']['groupId'] =='Cf008e45b3560032d1eb5fbdb6ddc2c43' || $event['source']['groupId'] =='C2d1387af7f2adcc0cd58032d86efd5ed' || $event['source']['groupId'] =='Cd1535b9da2590c65e5da8968e3770acc' || $event['source']['groupId'] =='C1b711548d509a34653aaa29195c071f0' || $event['source']['groupId'] =='C0b785cd566665fcc1552fc5058675979' || $event['source']['groupId'] =='C8b5c7927ff48cf17a843225d49b1db15' || $event['source']['groupId'] =='C9f0ef2857de08b6f4b76093a02bcf5de' || $event['source']['groupId'] =='Caa434359d1c557a84b6ceee7ab537fd7' || $event['source']['groupId'] =='C4a548105883e306fc832b1187ef4544e' || $event['source']['groupId'] =='Ce2c5c0d07c8ac2097308d24f16231d37' || $event['source']['groupId'] =='Cd8a849509b94f8e164461420ff9c69cd' || $event['source']['userId'] == 'U509014d018d7b14f1fee0f4942a97bb3' || $event['source']['userId'] == 'U041c1d5d39e47932485dcb31ed11f266' || $event['source']['userId'] == 'Ub6bf6c9b02422caa946c98d863df91be' || $event['source']['userId'] == 'U7fd7eee8c6ab03c5f8c12b51b47a09c8' ||$event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' ||$event['source']['userId'] == 'Uf50e1aecdaadd0c9beb3e7b55e71b88c' || $event['source']['userId'] == 'Uf120d9606f0eaa9bd32e18f8c85ea58f'|| $event['source']['groupId'] =='Cc5000f2d47fa9df8096c866a6f4402e9' || $event['source']['groupId'] =='C85404b458e7caaa96629fa66941c9d93' || $event['source']['groupId'] =='C0773ad778af7cec264763eb058303c53'|| $event['source']['groupId'] == 'C32b0363e6c4d916d880802158268f41f' || $event['source']['groupId'] =='C4c8db0f2c8db0b53bd1c03eb29afabcf' || $event['source']['groupId'] =='Cf19e3061292f289a6bb62c1e46336720'|| $event['source']['groupId'] == 'C51e14facfde2ebe46fc851a592f85f3a' || $event['source']['groupId'] =='Cfa20f505511fff97d66587c652e662fd' || $event['source']['groupId'] == 'Cc7b622649005eacc1f7f9453c571e1d7' || $event['source']['groupId'] == 'C541e7f51634b08117f8eb21a55296cb9'  || $event['source']['groupId'] =='C935d8d390928b6644d2dcca83a75e7d5' || $event['source']['groupId'] =='C8efbbe08a040190abb39730f26eb622b' || $event['source']['groupId'] =='C473a06905d178136680abc00bf54f440' || $event['source']['groupId'] =='C237daf0b6d4d87518ded070aad1870d1' || $event['source']['groupId'] =='C5298abb0e80917da201f774817516046' || $event['source']['groupId'] =='C8dbd04186e455a1b3af3f9384405dc20' || $event['source']['groupId'] =='C9fe78b803761432902f6d506b806b354' || $event['source']['groupId'] =='Cf32c66c3e5edf8d409f195c642187dca' || $event['source']['groupId'] =='C968dab0b5900f8c473906649127d07cf' || $event['source']['groupId'] =='C3993ff859de54c0c4d43a663410c74fe' || $event['source']['groupId'] =='C86e955b1b58a4ed6fb08d2132f500793' || $event['source']['groupId'] =='C1e62fabdf03e3485fb2b6fc24c11eb88' || $event['source']['groupId'] =='C33e7da5de008d8300f9746146bb93b28' || $event['source']['groupId'] =='C63446a31d01311daa0377b0080d064d8' || $event['source']['groupId'] =='Cf9b6aa817208f5b58ffc75b65ed9a630' || $event['source']['groupId'] =='C9d23354be1fb585ec8b131f16a2716de' || $event['source']['groupId'] =='C70fc647662b7c1d71b7263e753cc9a02' || $event['source']['groupId'] =='Cef524b7474a2473cac7d3c1c64a131f9' || $event['source']['groupId'] =='C3891347326afc0d3660d54f90c924dcf' || $event['source']['groupId'] =='C759d0883fd4898516a302d8d4efc88fd' || $event['source']['groupId'] =='C0622db8a88e74fef209c578701b38d5d' || $event['source']['groupId'] =='C4630b617359936a9495c02cd1f62b1fa' || $event['source']['groupId'] =='Ce0b403e04c0d9382ebfad651f49edb4d' || $event['source']['groupId'] =='C10c8b07501a03b533ad1d6ef2eb1d796' || $event['source']['groupId'] =='C38175a4518412c04d7c3d6ca9658e48e' || $event['source']['groupId'] =='C7223df793f44a88acd6199812ca5e684' || $event['source']['groupId'] =='C10040e1fac3ffbac67fde46ec67990db' || $event['source']['groupId'] =='Cfcb7acee947b6f0c60aae2309f262e52' || $event['source']['groupId'] =='C5c710b322fb13653c6be2fdb974bc3bf' || $event['source']['groupId'] =='C08225c330573130c678d2cd6fa60dda3' || $event['source']['groupId'] =='C324db09c3c6c5d2c7ba61493adecb778' || $event['source']['userId'] =='U00787737427143dedc0621eb52479222' || $event['source']['groupId'] =='C7594e6debc1f0a9682457210be4f8174')
		{
			//	
			// Reply only when message sent is in 'text' format
			if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
				
				// Get text sent
				$text = $event['message']['text'];
				if($text=="doji" || $text=="Doji" || $text=="DOJI" || $text=="DOji" || $text=="DOJi" || $text=="DojI" || $text=="DoJi")
				{
					$text='สอนสอน';
				}
				$arr2 = explode(" ", $text);
				if($arr2[0]=="ราคา")
				{
					$text="@p ".$arr2[1];
					
				}
				
				if($arr2[0]=="ลบ")
				{
					if($arr2[1]=="ทั้งหมด")
					{
						$text="@de all"	;
					}
					else
					{
						$text="@de ".$arr2[1];
					}
					
				}
				$test444 = strtolower($text);
				if($test444=="หุ้นที่มีเเจ้งเตือน" || $test444=="หุ้นเเจ้งเตือน" || $test444=="หุ้นแจ้งเตือน")
				{
					$text="@show all";
				}
				if($test444=="ลบทั้งหมด")
				{
					$text="@de all";
				}
				if(preg_match("/^[a-zA-Z0-9]+$/", $text[0]) == 1)
				{
					$text33333="@".$test444;
					$text=$text33333;
				}
				$text11=$text;
				$arr1 = str_split($text11);
				print_r($arr1);
				$data1="";
				$count=0;
				$count_check_check=0;
				$text22="";
				
				if($arr1[0]!="@g")
				{
					if(preg_match("/^[@]+$/", $text11[0]) == 1)
					{
						foreach ($arr1 as $text1) {
							if(preg_match("/^[a-zA-Z]+$/", $text1) == 1)
							{
								$count_check_check=$count_check_check+1;
							}
							if(preg_match("/^[a-zA-Z0-9.]+$/", $text1) == 1)
							{
								$data1=$data1.$text1;
							}
							if($text1==">" || $text1=="=" || $text1=="<")
							{
								if($text1==">")
									$text22=$text22."@> ";
								if($text1=="<")
									$text22=$text22."@< ";	
								if($text1=="=")
									$text22=$text22."@= ";	
								$data2=$text1;
								$data1=$data1." ";
								$count=$count+1;
							}
						}
					}
					$text22=$text22.$data1;
					
					if($count!=1)
					{
						echo "not alert";	
					}
					else
					{
						$text=$text22;
					}
				}
				
				$replyToken = $event['replyToken'];
				$textcut = explode(" ", $text);
				$result = count($textcut);
				
				
				//send graph1 = 1111
				//send graph black 21 22
				//not send graph 111 15
				///////////////////////////////////////////////
				
				if($event['source']['groupId']== 'C877d5aaeeb523122482b7e0580450cd7' || $event['source']['groupId'] == 'Ce89f80c9c5a8f4fcb851e40be6b1ed5b' || $event['source']['groupId'] == 'C2d49a85fb094bc90ff9570ff1490e046' || $even ['source']['groupId']=='Cd75232998108234664488e166f6c2313'|| $event['source']['groupId'] == 'C9fb7c4dfc9f7b2ea94196f07a62d2fc4'|| $event['source']['groupId'] == 'C9814aacf68dfee433e01449758ef91a1'|| $event['source']['groupId'] == 'Cb25406646b510fafa0b45ebeaea19737' ||$event['source']['groupId'] == 'C08ed601df0ae440832b09b496cb0c83a' || $event['source']['groupId'] =='C58e6deb47eb0c6eea4be1b36ee0c123d' || $event['source']['groupId'] =='C58b35d7a1c3b1026eabb5c3d309423f2' || $event['source']['groupId'] == 'C9fe78b803761432902f6d506b806b354' || $event['source']['groupId'] == 'C2debaa5f387f1d99d495ee1f62f25d27' || $event['source']['groupId'] == 'C2debaa5f387f1d99d495ee1f62f25d27' || $event['source']['groupId'] == 'C50bdba4e60f90ced6002458b6fb1aa5b' || $event['source']['groupId'] =='Cd8a849509b94f8e164461420ff9c69cd' || $event['source']['groupId'] =='C661ec27c458cbcb0c73fdb3814182b09' || $event['source']['groupId'] =='C4c12c9d3c50ffa9355ab4ace9b5a410e' || $event['source']['groupId'] =='Ca9f38fce7ceaaf1b70effdf0368f8085' ||  $event['source']['groupId'] =='C1d43b6ff06f14ac10f5d41026bb7b0f3' || $event['source']['groupId'] =='Cc754ab90adf7432312426035ea1bd2f9' || $event['source']['groupId'] =='C22e8a22dbe2173281e10d2d66128d5a5' || $event['source']['groupId'] =='Ca91c9e8a2a08c8c757dafdcd2f9d2e69' || $event['source']['groupId'] =='C7bfe74990aeecaca1f37a2b030ad1b1e' || $event['source']['userId'] =='U15c1ba16d211edf68f01ed74943602c4' || $event['source']['groupId'] =='C86d9a41a47402063e99d59732f4d0f8b' || $event['source']['groupId'] == 'C2d138fa3520426eb9f46ffb6dce72d08' || $event['source']['groupId'] == 'Cac276250bae968b7dd3416f35dadac92' || $event['source']['groupId'] =='Ccef7269485facbaa8bd7480fc089f798' || $event['source']['groupId'] =='Ce381889d3d2381757866a28931f6fdeb' || $event['source']['groupId'] =='C790dd32ae8e0d99b827e0288b01a0704' || $event['source']['groupId'] =='C72411396da7fdf56d55fba94313865e3' || $event['source']['groupId'] =='Cdac8cdceb9108be04281c4ad2e537312' || $event['source']['groupId'] =='C767f906dfb84091344207472c237b081' || $event['source']['groupId'] =='Cbb1b9c9dab76eef8e5ed8c9800f594b5' || $event['source']['groupId'] =='Cf008e45b3560032d1eb5fbdb6ddc2c43' || $event['source']['groupId'] =='C2d1387af7f2adcc0cd58032d86efd5ed' || $event['source']['groupId'] =='Cd1535b9da2590c65e5da8968e3770acc' || $event['source']['groupId'] =='C1b711548d509a34653aaa29195c071f0' || $event['source']['groupId'] =='C0b785cd566665fcc1552fc5058675979' || $event['source']['groupId'] =='C8b5c7927ff48cf17a843225d49b1db15' || $event['source']['groupId'] =='C9f0ef2857de08b6f4b76093a02bcf5de' || $event['source']['groupId'] =='Caa434359d1c557a84b6ceee7ab537fd7' || $event['source']['groupId'] =='C4a548105883e306fc832b1187ef4544e' || $event['source']['groupId'] =='Ce2c5c0d07c8ac2097308d24f16231d37')
				{
					$room="1111"; 
				}
				else if($event['source']['groupId'] == 'C941fb2b8a40f9d0f400969fa848c3386' || $event['source']['groupId'] == 'C26d889d89b336a786c06358c1e2df27c')//send graph black
				{
					if($event['source']['groupId'] == 'C941fb2b8a40f9d0f400969fa848c3386')
					{
						$room="21";
					}
					if($event['source']['groupId'] == 'C26d889d89b336a786c06358c1e2df27c')
					{
						$room="22";
					}
				}
				else if($event['source']['userId']=='U15c1ba16d211edf68f01ed74943602c4' || $event['source']['groupId'] == 'C9f2b93574be7434e6e7180a7d7503601' || $event['source']['groupId'] == 'Cd3afd7bd7719ceb0822ea162b50000fb' || $event['source']['groupId'] == 'C7ab92191511e47ff839c174e7f2104c5' || $event['source']['groupId'] == 'C328035648eddea983ff6b6a3fc7622ec' || $event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b')//No send
				{
						$room="15";
				}
				else//Not send Graph
				{
					$room="111";
				}
				
				
				//user id group or induvidule
				///////////////////////////////////////////////
				if($event['source']['userId']==' U15c1ba16d211edf68f01ed74943602c4' || $event['source']['userId'] =='Ue1f0e93f7eba0bc026c7eb6d561de64b' || $event['source']['userId'] == 'U96419d67276450fe71ac0009b84072e1' || $event['source']['userId'] == 'U509014d018d7b14f1fee0f4942a97bb3' || $event['source']['userId'] == 'U041c1d5d39e47932485dcb31ed11f266' || $event['source']['userId'] == 'Ub6bf6c9b02422caa946c98d863df91be' || $event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' ||$event['source']['userId'] == 'Uf50e1aecdaadd0c9beb3e7b55e71b88c' || $event['source']['userId'] == 'U7fd7eee8c6ab03c5f8c12b51b47a09c8'|| $event['source']['userId'] =='U00787737427143dedc0621eb52479222')
					$userid = $event['source']['userId'];	
				else
					$userid = $event['source']['groupId'];	
				
				
				
				//send graph
				if($textcut[0]=="@g" and $result <=3)
				{
					if($room == "15" or $room == "111")
					{
						$messages556 = ['type' => 'text','text' => "คำสั่งเรียกกราฟ ไม่สามารถเรียกในกลุ่มทดลอง โปรติดต่อ line : vacharich หรือ line : @jfourtwins\n\n ตัวอย่าง กราฟด้านล่าง aot 60 นาที"];
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
						
						
						$messages55 = ['type' => 'image',
												 'originalContentUrl' => 'https://kumishabu.com/pic/picture2.JPG',
												 'previewImageUrl' => 'https://kumishabu.com/pic/picture2.JPG'
									  ];
									  
						$format_text = [
								"type" => "text",
								"text" => $text
							];
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
					else
					{
						$check ="check1";
						if($result<3)
						{	
							$text=$text." d";
						}
						
						$hoon_low = strtolower($textcut[1]);
						$textcut = explode(" ", $text);
						$result = count($textcut);
						$timeframe="0";
						$type="gg";
						
	//301 kpom Ccef7269485facbaa8bd7480fc089f798
	//302 kprairoj Ce381889d3d2381757866a28931f6fdeb	
	//155 k'kamphol C2d138fa3520426eb9f46ffb6dce72d08
	//156 K'pb Cac276250bae968b7dd3416f35dadac92
	
						
						
						$timeframe=$textcut[2];		
						
						$sql = "INSERT INTO hoon_check2 (id, hoonname, price, room, uid, type) VALUES ('', '$hoon_low', 6666,'$room' ,'$timeframe', '$userid')";
												
						if (mysqli_query($link, $sql)) {
								echo "New record created successfully";
						} 
						else {
								echo "Error: " . $sql . "<br>" . mysqli_error($link);
						}
						$sql = "INSERT INTO `check_capture2`(`id`, `check1`) VALUES ('','$check')";
						if (mysqli_query($link, $sql)) {
							echo "New record created successfully";
						} 
						else {
							echo "Error: " . $sql . "<br>" . mysqli_error($link);
						}
						sleep(0.3);
					}
					
				}
				
				
				//alert price
				if($count==1 || $result >2)////alert codition
				{
					if($textcut[0]=="@>" || $textcut[0]=="@<" || $textcut[0]=="@=" || $textcut[0]=="@de")
					{
						$replyToken = $event['replyToken'];
						$arr1 = str_split($textcut[2]);
						foreach ($arr1 as $text1) {
							if(preg_match("/^[a-zA-Z]+$/", $text1) == 1)
							{
								$count_check_check=-1;
							}
						}
						if($count_check_check>0)
						{
								
								if($textcut[0]=="@>")
								{
									#$messages556 = ['type' => 'text','text' => "[ALERT HOON]\n".$textcut[1]." > ".$textcut[2]];
									$type="h";
								}
								else if($textcut[0]=="@=")
								{
									#$messages556 = ['type' => 'text','text' => "[ALERT HOON]\n".$textcut[1]." = ".$textcut[2]];
									$type="sameprice";
								}
								else if($textcut[0]=="@de")
								{
									#$messages556 = ['type' => 'text','text' => "[PROCESSING DELETE]"];
									$type="@de";
								}
								else
								{
									#$messages556 = ['type' => 'text','text' => "[ALERT HOON]\n".$textcut[1]." < ".$textcut[2]];
									$type='l';
								}
								
								$check ="check1";	
								$hoon_low = strtolower($textcut[1]);
								$price = number_format((float)$textcut[2], 2, '.', '');
								$sql = "INSERT INTO hoon_check2 (id, hoonname, price, room, uid, type)
											VALUES ('', '$hoon_low', '$price','$room' ,'$userid', '$type')";
											
								if (mysqli_query($link, $sql)) {
											echo "New record created successfully";
								} 
								else {
											echo "Error: " . $sql . "<br>" . mysqli_error($link);
								}
								
								$sql = "INSERT INTO `check_capture2`(`id`, `check1`) VALUES ('','$check')";
								if (mysqli_query($link, $sql)) {
										echo "New record created successfully";
								} 
								else {
										echo "Error: " . $sql . "<br>" . mysqli_error($link);
								}
								sleep(0.3);		
						}
						else if($count_check_check==-1)
						{
							$messages556 = ['type' => 'text','text' => "โปรดพิมใหม่อีกครั้ง, \nราคาต้องเป็นตัวเลขเท่่านั้น\n@aot>xxx -> @aot>400 "];
						}
						else
						{
							$messages556 = ['type' => 'text','text' => "โปรดพิมใหม่อีกครั้ง, hoonname ---> @aot>xxx hoonไม่สามารถเป็นเเค่ตัวเลขได้"];
						}
						// Make a POST Request to Messaging API to reply to sender
						$text_check_c = strtoupper($textcut[1]);
						if($text_check_c !="RSI")
						{
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
					}

				}
				
				if($result <= 2)/////
				{
						$count_text_cut = strlen($textcut[0]);
						$x=0;
						$arr1 = str_split($textcut[0]);
						
						if($textcut[0]=="@show" || $textcut[0]=="@de" || $textcut[0]=="@p")
						{	
							$replyToken = $event['replyToken'];
							
							if($textcut[0]=="@p")
							{
								$check ="check1";
								
								$sql = "INSERT INTO hoon_check2 (id, hoonname, price, room, uid, type)
										VALUES ('', '$textcut[1]', 'not','$replyToken' ,'$userid', '@p')";	
								if (mysqli_query($link, $sql)) {
											echo "New record created successfully";
								} 
								else {
											echo "Error: " . $sql . "<br>" . mysqli_error($link);
								}
								$sql = "INSERT INTO `check_capture2`(`id`, `check1`) VALUES ('','$check')";
								if (mysqli_query($link, $sql)) {
										echo "New record created successfully";
								} 
								else {
										echo "Error: " . $sql . "<br>" . mysqli_error($link);
								}
							}
							
							if($textcut[1]=="all")
								$aaaaaaa="alert";
							if($aaaaaaa=="alert")
							{
								$type=$textcut[0];
								$check ="check1";	

								$sql = "INSERT INTO hoon_check2 (id, hoonname, price, room, uid, type)
									VALUES ('', 'alert', '$textcut[2]','$replyToken' ,'$userid', '$type')";
									
								if (mysqli_query($link, $sql)) {
											echo "New record created successfully";
								} 
								else {
											echo "Error: " . $sql . "<br>" . mysqli_error($link);
								}
								
								$sql = "INSERT INTO `check_capture2`(`id`, `check1`) VALUES ('','$check')";
								if (mysqli_query($link, $sql)) {
										echo "New record created successfully";
								} 
								else {
										echo "Error: " . $sql . "<br>" . mysqli_error($link);
								}
								sleep(0.3);
											
							}
							
						}
						else if($arr1[0] == "@" and $check_g=="0")
						{
							$hoonname = substr($textcut[0], 1); // cut@
							if(preg_match("/^[a-zA-Z]+$/", $hoonname[0]) != 1) 
							{
								$replyToken = $event['replyToken'];
								$messages556 = ['type' => 'text','text' => "รบกวนพิมอีกครั้งจ๊ะ ต้องไม่มีช่องว่าง ในชื่อหุ้น  @ aot ----> @aot type with no space"];
								
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
									$messages55 = ['type' => 'text','text' => "คำสั่งค้นหาข้อมูลพื้นฐานทั้งหมด\nhoonname xxx โดย xxxคือข้อมูลพื้นฐานที่ต้องการเช่นต้องการ assetsของหุ้นaot\n\n พิม aot assets โดยทางเรามีทำตัวย่อไว้คือ as จึงสามารถพิมเป็น \n\naot as ก็ได้\nซึ่งได้มีการทำไว้ทั้งหมด 15 ข้อมูล\n1.assets/as\n2.libilities/lb\n3.equity/eq\n4.revenue/rv\n5.eps\n6.expenses/ex\n7.gprofit/gp\n8.gpmargin/gpm\n9.nprofit/np\n10.npm\n11.roa\n12.roe\n13.pe\n14.pbv\n15.yield/dy "];
						// Make a POST Request to Messaging API to reply to sende
									
									$messages66 = ['type' => 'text','text' => "คำสั่งเเจ้งเตือนราคาทั้งหมด \n\n เรียก กราฟ @g honname timeframe\n@g aot 60 โดยเรียกได้ทุก timeframe \n\nหุ้นเเจ้งเตือน หรือ show all\nคือเเสดงรายการที่มีการตั้งเเจง้เตือนไว้\n\nde all หรือ ลบทั้งหมด\nคือลบข้อมูลรายการเเจ้งเตือนทั้งหมด\n\nde aot 400\nคือการลบข้อมูลหุ้น aot ที่ตั้งเเจ้งเตือนไว้ที่ราคา 400 บาท\n\naot>400\nคือการตั้งเเจ้งเตือนราคาถ้าหุ้นaotเกิน400บาทจะเเจ้งเตือน\n\naot<400\nคือเหมือนด้านบนเเต่ราคาน้อยกว่าเเทน\n\naot=400\nคือถ้าราคาเท่ากับ400จะเเจ้งเตือน\n\nราคา aot หรือ p aotคือ เช็คราคาปัจจุบันของหุ้นaot\n"];
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
							
						}
				
					}//ifresult<2
			 }//if ($event['type'] == 'message' && $event['message']['type'] == 'text')
		}//if($event['source']['groupId'] 
		else
		{
			echo "OK11";			
		}
	}//for
}

#echo "OK11";
