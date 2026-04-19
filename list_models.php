<?php
$key = 'AIzaSyBCX5qpqsufFoESyx1W8nT6WCXu7SKOoEM';
$url = 'https://generativelanguage.googleapis.com/v1beta/models?key=' . $key;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Need to disable SSL verify because some dev environments might not have new certs
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

$response = curl_exec($ch);

if(curl_errno($ch)){
    file_put_contents('models_list.txt', 'Curl error: ' . curl_error($ch));
} else {
    file_put_contents('models_list.txt', $response);
}

curl_close($ch);
?>
