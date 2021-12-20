<?php

$id =  $_POST["name"];
$text =  $_POST["text"];



$access_token = 'ynU0QtbQ0RaavkO7aEfXHYEdAlpU+xzWDtyMgOI5fsQegkB+duJi6HEL1DSBwW6O09MSUsGhASBAiVEt8mhF8WV+M7S+BMJyRKnoTEqtfNDN7de82RC4p+okDUQ4YQYFH7KQsnDVTo+/eEbjQeeRawdB04t89/1O/w1cDnyilFU=';

$userId = $id;

$messages = array(
    'type' => 'text',
    'text' => $text,
);
$post = json_encode(array(
    'to' => array($userId),
    'messages' => array($messages),
));

$url = 'https://api.line.me/v2/bot/message/multicast';
$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
if ($result) {
    echo " <script type='text/javascript'>alert('Send message success');
window.location.href='../page/message_oa.php'
</script>";
}
