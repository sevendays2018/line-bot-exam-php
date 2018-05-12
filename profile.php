<?php

$url = 'https://api.line.me/v2/bot/profile/U126269d84ad11b29dd3be5979c1be03f';

$headers = array('Authorization: Bearer ff/Y7DOQEFQL3M8Aow20tzs576rDp4PALLb3gEqDFr2AK1TTEen3eNBmWrmy3Zz9wT+spR/vnrbSEhRzP79EzXZBPVww+DMn6AWMAz4rEQ1EdqxJHrfaQ/RzeKXyRb9RM4BZOlokBAVrlDvzRK17IgdB04t89/1O/w1cDnyilFU=
');

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

