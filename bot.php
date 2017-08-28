<?php
$access_token = '2uqo5ucAcfrmOpw/3eaZFd6acQsNKYS1eqq7AK/aq6+tG9qGgetZbduYbg7pydy1nRWFJVGH5xXBJyB9Rag7mfL34PsnR8Qzmrr4JVBQBRTR0Q+R3gocjfm67V7v0Am9bHoUqYRCpTIIjrO7CceKdQdB04t89/1O/w1cDnyilFU=';
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
$debug_export = var_export($events, true);
ob_start();
var_dump($events);
$debug_dump = ob_get_clean();
// if (!is_null($events['events'])) {
// 	// Loop through each event
// 	foreach ($events['events'] as $event) {
// 		// Reply only when message sent is in 'text' format
// 		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
// 			// Get text sent
// 			$text = $event+$text;
// 			// Get replyToken
// 			$replyToken = $event['replyToken'];
			// Build message to reply back
			$messages = [
				
				  "type"=> "template",
				  "altText"=> "this is a carousel template",
				  "template"=> [
				      "type"=> "carousel",
				      "columns"=> [
				          [
				            "thumbnailImageUrl"=> "https://example.com/bot/images/item1.jpg",
				            "title"=> "this is menu",
				            "text"=> "description",
				            "actions"=> [
				                [
				                    "type"=> "postback",
				                    "label"=> "Buy",
				                    "data"=> "action=buy&itemid=111"
				                ],
				                [
				                    "type"=> "postback",
				                    "label"=> "Add to cart",
				                    "data"=> "action=add&itemid=111"
				                ],
				                [
				                    "type"=> "uri",
				                    "label"=> "View detail",
				                    "uri"=> "http://example.com/page/111"
				                ]
				            ]
				          ],
				          [
				            "thumbnailImageUrl"=> "https://example.com/bot/images/item2.jpg",
				            "title"=> "this is menu",
				            "text"=> "description",
				            "actions"=> [
				                [
				                    "type"=> "postback",
				                    "label"=> "Buy",
				                    "data"=> "action=buy&itemid=222"
				                ],
				                [
				                    "type"=> "postback",
				                    "label"=> "Add to cart",
				                    "data"=> "action=add&itemid=222"
				                ],
				                [
				                    "type"=> "uri",
				                    "label"=> "View detail",
				                    "uri"=> "http://example.com/page/222"
				                ]
				            ]
				          ]
				      ]
				  ]
			];
				// 'type' => 'text',
				// 'text' => $debug_dump
				//'text' => $text
					//"type" => "location",
				    // "title" => "my location",
				    // "address" => "KMUTNB",
				    // "latitude"=> 13.8189664,
				    // "longitude"=> 100.5121739
			// image :)
			//  'type' => 'image',
			// 	'originalContentUrl'=> 'https://cdn.pixabay.com/photo/2014/11/28/22/23/alm-549333_960_720.jpg',
   			//  'previewImageUrl'=> 'https://i.imgur.com/2WCYC2V.jpg?1'
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => 'U306cd00872315c9a853169211616fd59',
				'messages' => [$messages],
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
		
// 	}
// }
echo "OK";