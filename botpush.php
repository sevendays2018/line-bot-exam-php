<?php



require "vendor/autoload.php";

$access_token = 'ff/Y7DOQEFQL3M8Aow20tzs576rDp4PALLb3gEqDFr2AK1TTEen3eNBmWrmy3Zz9wT+spR/vnrbSEhRzP79EzXZBPVww+DMn6AWMAz4rEQ1EdqxJHrfaQ/RzeKXyRb9RM4BZOlokBAVrlDvzRK17IgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '38c37ac7242948580f83e501ecece50f';

$pushID = 'U126269d84ad11b29dd3be5979c1be03f';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







