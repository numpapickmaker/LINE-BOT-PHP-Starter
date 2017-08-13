<?php
$access_token = '2uqo5ucAcfrmOpw/3eaZFd6acQsNKYS1eqq7AK/aq6+tG9qGgetZbduYbg7pydy1nRWFJVGH5xXBJyB9Rag7mfL34PsnR8Qzmrr4JVBQBRTR0Q+R3gocjfm67V7v0Am9bHoUqYRCpTIIjrO7CceKdQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;