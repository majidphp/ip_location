<?php
/**
 * To find user location by IP
 * - Register in api.ipstack.com
 * - Get your API key
 * - Paste the API key in line 9
 */
$userIP = $_SERVER['REMOTE_ADDR'];
$apiKey = 'YOR API KEY';
$apiURL = 'http://api.ipstack.com/';
$apiCall = $apiURL.$userIP.'?access_key='.$apiKey;
$jsonResponse = file_get_contents($apiCall);
$response = json_decode($jsonResponse, true);
print_r($response);
