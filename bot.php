<?php

echo "aaaaa";
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
	
	foreach ($events['events'] as $event) {
		if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['groupId'] =='Cc5000f2d47fa9df8096c866a6f4402e9' || $event['source']['groupId'] =='C85404b458e7caaa96629fa66941c9d93' || $event['source']['groupId'] =='C0773ad778af7cec264763eb058303c53'|| $event['source']['groupId'] == 'C32b0363e6c4d916d880802158268f41f' || $event['source']['groupId'] =='C4c8db0f2c8db0b53bd1c03eb29afabcf' || $event['source']['groupId'] =='Cf19e3061292f289a6bb62c1e46336720'|| $event['source']['groupId'] == 'C51e14facfde2ebe46fc851a592f85f3a' || $event['source']['groupId'] =='Cfa20f505511fff97d66587c652e662fd' || $event['source']['groupId'] == 'Cc7b622649005eacc1f7f9453c571e1d7' || $event['source']['groupId'] == 'C541e7f51634b08117f8eb21a55296cb9'  || $event['source']['groupId'] =='C935d8d390928b6644d2dcca83a75e7d5' || $event['source']['groupId'] =='C8efbbe08a040190abb39730f26eb622b' || $event['source']['groupId'] =='C473a06905d178136680abc00bf54f440')
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
								$replyToken = $event['replyToken'];
								$timeframe2="";
								if($result == 2)
									$timeframe2 = $textcut[1];
								else
									$timeframe2 ="assets";
									
								$room='1';
								$timeframe = strtolower($timeframe2);
								sleep(0.1);
								if($timeframe !="dy" and $timeframe !="yield" and $timeframe !="pbv" and $timeframe !="pe" and $timeframe !="roe" and $timeframe !="roa" and $timeframe !="assets" and $timeframe !="liabilities" and $timeframe !="equity" and $timeframe !="revenue" and $timeframe !="eps"and $timeframe !="expenses" and $timeframe !="gprofit" and $timeframe !="gpmargin" and $timeframe !="nprofit" and $timeframe !="npm" and $timeframe !="as" and $timeframe !="lb" and $timeframe !="eq" and $timeframe !="rv" and $timeframe !="ex" and $timeframe !="gp" and $timeframe !="gpm" and $timeframe !="np" )
								{
									$messages3 = ['type' => 'text','text' => "คำสั่งทั้งหมด             @hoon assets/as       @hoon libilities/lb        @hoon equity/eq        @hoon revenue/rv       @hoon eps                  @hoon expenses/ex       @hoon gprofit/gp        @hoon gpmargin/gpm        @hoon nprofit/np           @hoon npm              @hoon roa               @hoon roe             @hoon pe         @hoon pbv             @hoon yield/dy
									
					
									                                  
EX   @hoon assert/as                                      ----> @aot assets                     or @aot as"];
						
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
								}
								else
								{
									if($timeframe =="as")
									{
										$timeframe ="assets";
									}
									else if($timeframe =="lb")
										$timeframe ="liabilities";
									else if($timeframe =="eq")
										$timeframe ="equity";
									else if($timeframe =="rv")
										$timeframe ="revenue";
									else if($timeframe =="ex")
										$timeframe ="expenses";
									else if($timeframe =="gp")
										$timeframe ="gprofit";
									else if($timeframe =="gpmargin")
										$timeframe ="gpm";
									else if($timeframe =="np")
										$timeframe ="nprofit";
									else if($timeframe =="dy")
										$timeframe ="yield";
										
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
									
									$link_pic ="https://www.botbottest.club/".$hoonname."".$timeframe.".jpg";
										#echo "work code";
									// Get replyToken
									
									$hoonname1 = strtoupper($hoonname);
									if($hoonname1 == '2S')
										$llll = "https://www.dropbox.com/s/cov1jrkmhe8q81n/2S.png";																																		
									else
										$llll = "https://www.dropbox.com/s/j09fwo3536hdkib/pic.png?dl=0";
									// Build message to reply back
									#$messages = ['type' => 'text','text' => $event['source']['roomid']];
									$messages4 = ['type' => 'text','text' => $event['source']['type']];
									
									$messages5 = ['type' => 'text','text' => $event['source']['groupId']];
									sleep(1);
									
									
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
									
									//$link_pic ='https://www.botbottest.club/'.$hoonname."".$timeframe.".jpg";
									
									//$llll ='SORRY, OUT OF SERVICE';
									$messages3 = ['type' => 'text','text' => $text_recieve];
						
									$messages1 = ['type' => 'text','text' => "Please wait 8s"];
									sleep(1);
									$messages2 = ['type' => 'image',
											 'originalContentUrl' => $link_pic,
											 'previewImageUrl' => $link_pic
									];
									
									// Make a POST Request to Messaging API to reply to sender
									$url = 'https://api.line.me/v2/bot/message/reply';
									$data = [
										'replyToken' => $replyToken,
										'messages' => [$messages2]
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
								}#elseloop
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
									$messages55 = ['type' => 'text','text' => "คำสั่งทั้งหมด             @hoon assets/as       @hoon libilities/lb        @hoon equity/eq        @hoon revenue/rv       @hoon eps                  @hoon expenses/ex       @hoon gprofit/gp        @hoon gpmargin/gpm        @hoon nprofit/np           @hoon npm              @hoon roa               @hoon roe             @hoon pe         @hoon pbv             @hoon yield/dy
									
					
									                                  
EX   @hoon assert/as                                      ----> @aot assets                     or @aot as"];
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
								
								if($text == 'ทดสอบ')
								{
									
									$replyToken = $event['replyToken'];
									
									$messages44 = [	 'type' => 'template',
													 'altText' => 'test',
													 'template' => [	'type' => 'confirm', 
																		'text'=> "Are you sure?",
																		'actions' => [
																				[
																					'type'=> 'message',
																					'label'=> 'Yes',
																					'text'=> 'yes'
																				],
																				[
																					'type'=> 'message',
																					'label'=> 'No',
																					'text'=> 'No'
																				]
																				
																         ]
															
															          ]
											 
											 ];
											 
									$messages33 = [	 'type' => 'template',
													 'altText' => 'test',
													 'template' => [	'type' => 'buttons', 
																		'thumbnailImageUrl'=> "https://www.botbottest.club/aoteps.jpg",
																		'title' => 'Menu',
																		'text'  => 'Please select',
																		'actions' => [
																				[
																					'type'=> 'uri',
																					'label'=> 'View detail',
																					'uri'=> 'https://www.botbottest.club/aoteps.jpg'
																				]
																				
																         ]
															
															          ]
											 
											 ];

									$messages55 = ['type' => 'image',
											 'originalContentUrl' => 'https://www.botbottest.club/testtest.jpg',
											 'previewImageUrl' => 'https://www.botbottest.club/testtest.jpg'
											 
											 ];
											 

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