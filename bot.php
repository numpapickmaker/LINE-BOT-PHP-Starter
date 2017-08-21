<?php
include ('line-bot-api/php/line-bot.php');
$channelSecret = 'U306cd00872315c9a853169211616fd59';
$access_token  = '2uqo5ucAcfrmOpw/3eaZFd6acQsNKYS1eqq7AK/aq6+tG9qGgetZbduYbg7pydy1nRWFJVGH5xXBJyB9Rag7mfL34PsnR8Qzmrr4JVBQBRTR0Q+R3gocjfm67V7v0Am9bHoUqYRCpTIIjrO7CceKdQdB04t89/1O/w1cDnyilFU=';
$bot = new BOT_API($channelSecret, $access_token);
	
$bot->sendMessageNew('U39f72cc.....d460d6ddf', 'Hello World !!');
if ($bot->isSuccess()) {
    echo 'Succeeded!';
    exit();
}
// Failed
echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
exit();