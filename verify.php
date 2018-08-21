<?php
$access_token = '0ZAuIFADOxTNTrzS5KY7zfMXJnfjlWqdRQLHfp5HrwHJzyk5xykJ9tVSMJicrxSVm/HOSGQzEPaLaDq/BL0f5mYvedIGK1wQMEnjnqq8ljnV8UdzKOWfCxO3rnB1uqyYNL7V90UAw9qx/smA9SoY6wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
