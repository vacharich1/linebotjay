<?php




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
	$host22= "sql6.freemysqlhosting.net";
	//$db = "sql6150739";
	$db22 = "sql6155625";
	$CHAR_SET = "charset=utf8"; 
 
	//$username = "sql6150739";    
	//$password = "xiGjqcGnZb";   
	$username22 = "sql6155625";    
	$password22 = "kD3MA9nEB3"; 
	

	$link22 = mysqli_connect($host22, $username22, $password22, $db22);
	if (!$link22) {
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
	//20:kong portrabort U7fd7eee8c6ab03c5f8c12b51b47a09c8
	foreach ($events['events'] as $event) {
		if($event['source']['userId'] == 'U7fd7eee8c6ab03c5f8c12b51b47a09c8' ||$event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['userId'] == 'Uf120d9606f0eaa9bd32e18f8c85ea58f'|| $event['source']['groupId'] =='Cc5000f2d47fa9df8096c866a6f4402e9' || $event['source']['groupId'] =='C85404b458e7caaa96629fa66941c9d93' || $event['source']['groupId'] =='C0773ad778af7cec264763eb058303c53'|| $event['source']['groupId'] == 'C32b0363e6c4d916d880802158268f41f' || $event['source']['groupId'] =='C4c8db0f2c8db0b53bd1c03eb29afabcf' || $event['source']['groupId'] =='Cf19e3061292f289a6bb62c1e46336720'|| $event['source']['groupId'] == 'C51e14facfde2ebe46fc851a592f85f3a' || $event['source']['groupId'] =='Cfa20f505511fff97d66587c652e662fd' || $event['source']['groupId'] == 'Cc7b622649005eacc1f7f9453c571e1d7' || $event['source']['groupId'] == 'C541e7f51634b08117f8eb21a55296cb9'  || $event['source']['groupId'] =='C935d8d390928b6644d2dcca83a75e7d5' || $event['source']['groupId'] =='C8efbbe08a040190abb39730f26eb622b' || $event['source']['groupId'] =='C473a06905d178136680abc00bf54f440' || $event['source']['groupId'] =='C237daf0b6d4d87518ded070aad1870d1' || $event['source']['groupId'] =='C5298abb0e80917da201f774817516046' || $event['source']['groupId'] =='C8dbd04186e455a1b3af3f9384405dc20' || $event['source']['groupId'] =='C9fe78b803761432902f6d506b806b354' || $event['source']['groupId'] =='Cf32c66c3e5edf8d409f195c642187dca' || $event['source']['groupId'] =='C968dab0b5900f8c473906649127d07cf' || $event['source']['groupId'] =='C3993ff859de54c0c4d43a663410c74fe' || $event['source']['groupId'] =='C86e955b1b58a4ed6fb08d2132f500793' || $event['source']['groupId'] =='C1e62fabdf03e3485fb2b6fc24c11eb88' || $event['source']['groupId'] =='C33e7da5de008d8300f9746146bb93b28' || $event['source']['groupId'] =='C63446a31d01311daa0377b0080d064d8' || $event['source']['groupId'] =='Cf9b6aa817208f5b58ffc75b65ed9a630' || $event['source']['groupId'] =='C9d23354be1fb585ec8b131f16a2716de' || $event['source']['groupId'] =='C70fc647662b7c1d71b7263e753cc9a02' || $event['source']['groupId'] =='Cef524b7474a2473cac7d3c1c64a131f9' || $event['source']['groupId'] =='C3891347326afc0d3660d54f90c924dcf' || $event['source']['groupId'] =='C759d0883fd4898516a302d8d4efc88fd' || $event['source']['groupId'] =='C0622db8a88e74fef209c578701b38d5d' || $event['source']['groupId'] =='C4630b617359936a9495c02cd1f62b1fa')
		{
			//	
			// Reply only when message sent is in 'text' format
			if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
				
				// Get text sent
				$text = $event['message']['text'];
				if($text=="doji" || $text=="Doji" || $text=="DOJI")
				{
					$text="โดจิ";
				}
				$arr2 = explode(" ", $text);
				if($arr2[0]=="ราคา")
				{
					$text="@p ".$arr2[1];
					sleep(0.2);
				}
				
				$test444 = strtolower($text);
				if($test444=="หุ้นที่มีเเจ้งเตือน" || $test444=="หุ้นเเจ้งเตือน")
				{
					$text="@show all";
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
				
				$replyToken = $event['replyToken'];
				
				$textcut = explode(" ", $text);
				$result = count($textcut);
				if($count==1 || $result >2)
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
									$messages556 = ['type' => 'text','text' => "[ALERT HOON]\n".$textcut[1]." > ".$textcut[2]];
									$type="h";
								}
								else if($textcut[0]=="@=")
								{
									$messages556 = ['type' => 'text','text' => "[ALERT HOON]\n".$textcut[1]." = ".$textcut[2]];
									$type="sameprice";
								}
								else if($textcut[0]=="@de")
								{
									$messages556 = ['type' => 'text','text' => "[PROCESSING DELETE]"];
									$type="@de";
								}
								else
								{
									$messages556 = ['type' => 'text','text' => "[ALERT HOON]\n".$textcut[1]." < ".$textcut[2]];
									$type='l';
								}
								if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['userId'] == 'Uf120d9606f0eaa9bd32e18f8c85ea58f' || $event['source']['userId'] == 'U7fd7eee8c6ab03c5f8c12b51b47a09c8')
									$userid = $event['source']['userId'];	
								else
									$userid = $event['source']['groupId'];	
								$check ="check1";	
								$hoon_low = strtolower($textcut[1]);
							
								$sql = "INSERT INTO hoon_check2 (id, hoonname, price, room, uid, type)
											VALUES ('', '$hoon_low', '$textcut[2]','$replyToken' ,'$userid', '$type')";
											
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
				if($result <= 2)
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
								if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['userId'] == 'U7fd7eee8c6ab03c5f8c12b51b47a09c8')
									$userid = $event['source']['userId'];	
								else
									$userid = $event['source']['groupId'];		
										
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
								sleep(0.3);	
							}
							
							if($textcut[1]=="all")
								$aaaaaaa="alert";
							if($aaaaaaa=="alert")
							{
								$type=$textcut[0];
								$check ="check1";	
								if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['userId'] == 'U7fd7eee8c6ab03c5f8c12b51b47a09c8')
									$userid = $event['source']['userId'];	
								else
									$userid = $event['source']['groupId'];		
									
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
						else if($arr1[0] == "@")
						{
							$hoonname = substr($textcut[0], 1); // cut@
							if(preg_match("/^[a-zA-Z]+$/", $hoonname[0]) != 1) 
							{
								$replyToken = $event['replyToken'];
								$messages556 = ['type' => 'text','text' => "รบกวนพิมอีกครั้งจ๊ะ ต้องไม่มีช่องว่าง ในชื่อหุ้น  @ aot ----> @aot type with no space"];
								// Make a POST Request to Messaging API to reply to sender
								#$url = 'https://api.line.me/v2/bot/message/reply';
								#$data = [
								#	'replyToken' => $replyToken,
								#	'messages' => [$messages556]
								#];
								#$post = json_encode($data);
								#$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
					
								#$ch = curl_init($url);
								#curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
								#curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
								#curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
								#curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
								#curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
								#$result = curl_exec($ch);
								#curl_close($ch);	
							}
							else
							{
								//echo $count_text_cut;
								
								$timeframe2="";
								if($result == 2)
									$timeframe2 = $textcut[1];
								else
									$timeframe2 ="all";
									
								$room='1';
								$timeframe = strtolower($timeframe2);
								sleep(0.1);
								if($timeframe !="dy" and $timeframe !="yield" and $timeframe !="pbv" and $timeframe !="pe" and $timeframe !="roe" and $timeframe !="roa" and $timeframe !="assets" and $timeframe !="liabilities" and $timeframe !="equity" and $timeframe !="revenue" and $timeframe !="eps"and $timeframe !="expenses" and $timeframe !="gprofit" and $timeframe !="gpmargin" and $timeframe !="nprofit" and $timeframe !="npm" and $timeframe !="as" and $timeframe !="lb" and $timeframe !="eq" and $timeframe !="rv" and $timeframe !="ex" and $timeframe !="gp" and $timeframe !="gpm" and $timeframe !="np" and $timeframe !="all")
								{
									$messages3 = ['type' => 'text','text' => "คำสั่งค้นหาข้อมูลพื้นฐานทั้งหมด\nhoonname xxx โดย xxxคือข้อมูลพื้นฐานที่ต้องการเช่นต้องการ assertของหุ้นaot\n\n พิม aot assert โดยทางเรามีทำตัวย่อไว้คือ as จึงสามารถพิมเป็น \n\n@aot as ก็ได้\nซึ่งได้มีการทำไว้ทั้งหมด 15 ข้อมูล\n1.assert/as\n2.libilities/lb\n3.equity/eq\n4.revenue/rv\n5.eps\n6.expenses/ex\n7.gprofit/gp\n8.gpmargin/gpm\n9.nprofit/np\n10.npm\n11.roa\n12.roe\n13.pe\n14.pbv\n15.yield/dy "];
						
									$url = 'https://api.line.me/v2/bot/message/reply';
									//$data = [
									//	'replyToken' => $replyToken,
									//	'messages' => [$messages3]
									//];
									
	
										//$post = json_encode($data);
										//$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
							
										//$ch = curl_init($url);
										//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
										//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
										//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
										//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
										//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
										//$result = curl_exec($ch);
										//curl_close($ch);
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
									else if($timeframe =="all")
										$timeframe ="all";
										
									$type="fundamental";
									$check ="check1";
									if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['userId'] == 'U7fd7eee8c6ab03c5f8c12b51b47a09c8')
										$userid = $event['source']['userId'];	
									else
										$userid = $event['source']['groupId'];		
									
									
									/*$sql = "INSERT INTO hoon_check (id, hoonname, timeframe,room)
									VALUES ('', '$hoonname', '$timeframe','$replyToken')";
									
									if (mysqli_query($link22, $sql)) {
											echo "New record created successfully";
									} 
									else {
											echo "Error: " . $sql . "<br>" . mysqli_error($link22);
									}
									sleep(0.3);
									$check ="check1";
									#echo "work code";
									$sql = "INSERT INTO `check_capture`(`id`, `check1`) VALUES ('','$check')";
									if (mysqli_query($link22, $sql)) {
											echo "New record created successfully";
									} 
									else {
											echo "Error: " . $sql . "<br>" . mysqli_error($link22);
									}*/
									
									// Check connection
									
									// sql to delete a record
									if($timeframe =="all")
									{
										$sql = "DELETE FROM show_all WHERE 1";
										
										if ($link->query($sql) === TRUE) {
											echo "Record deleted successfully";
										} else {
											echo "Error deleting record: " . $conn->error;
										}
										
										
										$sql = "INSERT INTO show_all (id, hoonname)
												VALUES ('', '$hoonname')";
												
										if (mysqli_query($link, $sql)) {
													echo "New record created successfully";
										} 
										else {
													echo "Error: " . $sql . "<br>" . mysqli_error($link);
										}
									}
									
									
									$sql = "INSERT INTO hoon_check2 (id, hoonname, price, room, uid, type)
											VALUES ('', '$hoonname', '$timeframe','$replyToken' ,'$userid', '$type')";
											
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
									
									$link_pic2 ="https://www.botbottest.club/".$hoonname."eps.jpg";
									$link_pic1 ="https://www.botbottest.club/".$hoonname."pe.jpg";
									
									$messages3 = ['type' => 'text','text' => $text_recieve];
						
									$messages1 = ['type' => 'text','text' => "Please wait 8s"];
									
									$messages2 = ['type' => 'image',
											 'originalContentUrl' => $link_pic,
											 'previewImageUrl' => $link_pic
									];
									
									$messages3 = ['type' => 'text','text' => $link_pic];
									
									$messages43 =['type'=> 'template',
									  'altText'=> 'this is a carousel template',
									  'template'=> [
										  'type'=> 'carousel',
										  'columns'=> [
										 					 [
															'thumbnailImageUrl'=> 'https://www.botbottest.club/fun.jpg',
															'title'=> $hoonname,
															'text'=> 'pe pbv roe roa pbv eps profit',
															'actions' => [
																				[
																					'type'=> 'uri',
																					'label'=> 'information',
																					'uri'=> 'https://linebotjay.herokuapp.com/show_pic.php'
																				]
																												
																		]
														   ],
										  				   [
															'thumbnailImageUrl'=> $link_pic1,
															'title'=> $hoonname,
															'text'=> 'pe',
															'actions' => [
																				[
																					'type'=> 'uri',
																					'label'=> 'result',
																					'uri'=> $link_pic1
																				]
																												
																		]
														  ],
										  				  [
															'thumbnailImageUrl'=> $link_pic2,
															'title'=> $hoonname,
															'text'=> 'eps',
															'actions' => [
																				[
																					'type'=> 'uri',
																					'label'=> 'result',
																					'uri'=> $link_pic2
																				]
																												
																		]
														  ]
														  
														  
													]
												]
											];
									
									$messages33 = [	 'type' => 'template',
													 'altText' => 'test',
													 'template' => [	'type' => 'buttons', 
																		'thumbnailImageUrl'=> $link_pic,
																		'title' => $hoonname,
																		'text'  => $timeframe,
																		'actions' => [
																				[
																					'type'=> 'uri',
																					'label'=> 'View detail',
																					'uri'=> 'https://linebotjay.herokuapp.com/show_pic.php'
																				]
																				
																         ]
															
															          ]
											 
											 ];
									if($timeframe =="all")
									{
										/*sleep(10);
										// Make a POST Request to Messaging API to reply to sender
										$url = 'https://api.line.me/v2/bot/message/reply';
										$data = [
											'replyToken' => $replyToken,
											'messages' => [$messages43]
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
											curl_close($ch);*/
									}
									
							
									
									
									
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
									$messages55 = ['type' => 'text','text' => "คำสั่งค้นหาข้อมูลพื้นฐานทั้งหมด\nhoonname xxx โดย xxxคือข้อมูลพื้นฐานที่ต้องการเช่นต้องการ assertของหุ้นaot\n\n พิม aot assert โดยทางเรามีทำตัวย่อไว้คือ as จึงสามารถพิมเป็น \n\n@aot as ก็ได้\nซึ่งได้มีการทำไว้ทั้งหมด 15 ข้อมูล\n1.assert/as\n2.libilities/lb\n3.equity/eq\n4.revenue/rv\n5.eps\n6.expenses/ex\n7.gprofit/gp\n8.gpmargin/gpm\n9.nprofit/np\n10.npm\n11.roa\n12.roe\n13.pe\n14.pbv\n15.yield/dy "];
									// Make a POST Request to Messaging API to reply to sende
									
									$messages66 = ['type' => 'text','text' => "คำสั่งเเจ้งเตือนราคาทั้งหมด \n\nหุ้นเเจ้งเตือน หรือ show all\nคือเเสดงรายการที่มีการตั้งเเจง้เตือนไว้\n\nde all\nคือลบข้อมูลรายการเเจ้งเตือนทั้งหมด\n\nde aot 400\nคือการลบข้อมูลหุ้น aot ที่ตั้งเเจ้งเตือนไว้ที่ราคา 400 บาท\n\naot>400\nคือการตั้งเเจ้งเตือนราคาถ้าหุ้นaotเกิน400บาทจะเเจ้งเตือน\n\naot<400\nคือเหมือนด้านบนเเต่ราคาน้อยกว่าเเทน\n\naot=400\nคือถ้าราคาเท่ากับ400จะเเจ้งเตือน\n\nราคา aot หรือ p aotคือ เช็คราคาปัจจุบันของหุ้นaott"];
									$url = 'https://api.line.me/v2/bot/message/reply';
									$data = [
												'replyToken' => $replyToken,
												'messages' => [$messages55,$messages66]
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
								
								if($text == 'สอนใช้งาน')
								{
										if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['userId'] == 'Uf120d9606f0eaa9bd32e18f8c85ea58f' || $event['source']['userId'] == 'U7fd7eee8c6ab03c5f8c12b51b47a09c8')
											$userid = $event['source']['userId'];	
										else
											$userid = $event['source']['groupId'];	
										$sql = "INSERT INTO teach (id, userid)
										VALUES ('', '$userid')";
										
											if (mysqli_query($link, $sql)) {
														echo "New record created successfully";
											} 
											else {
														echo "Error: " . $sql . "<br>" . mysqli_error($link);
											}	
								}
								
								if($text=="โดจิ")
								{
									if($event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b' || $event['source']['userId'] == 'U7fd7eee8c6ab03c5f8c12b51b47a09c8')
										$userid = $event['source']['userId'];	
									else
										$userid = $event['source']['groupId'];		
									$messages33 = [	 'type' => 'template',
													 'altText' => 'test',
													 'template' => [	'type' => 'buttons', 
																		'thumbnailImageUrl'=> "https://www.botbottest.club/doji.jpg",
																		'title' => 'Doji',
																		'text'  => 'Doji',
																		'actions' => [
																				[
																					'type'=> 'uri',
																					'label'=> 'View detail',
																					'uri'=> 'http://linebotjay.herokuapp.com/doji.php'
																				]
																				
																         ]
															
															          ]
											 
											 ];
											 
									$post_data = [
										'to' => $USERID,
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
										'messages' => [$messages33]
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
			
					if($text == '@@@')
					{		//$event['source']['userId'] == 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b'
							$replyToken = $event['replyToken'];
							$messages55 = ['type' => 'text','text' => $event['source']['userId']];
							// Make a POST Request to Messaging API to reply to sender
							
							$post_data = [
											'to' => 'Ub5f45b12f0f8f8a3a08e5b52ebbcc96b',
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
							
							//$url = 'https://api.line.me/v2/bot/message/reply';
							//$data = [
							//			'replyToken' => $replyToken,
							//			'messages' => [$messages55]
							//		];
							//$post = json_encode($data);
							//$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
									
							//$ch = curl_init($url);
							//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
							//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
							//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
							//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
							//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
							//$result = curl_exec($ch);
							//curl_close($ch);
					}
					
					
				}
				
		}
	}//for
}

#echo "OK11";