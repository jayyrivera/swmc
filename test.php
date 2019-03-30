<?php
$channel_id = "UC-lHJZR3Gqxm24_Vd_AJ5Yw";
$api_key = "AIzaSyBVkJ7k_hO1F20KCeuX1pTHlEr0BtHUktU";
$api_response = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id='.$channel_id.'&fields=items/statistics/subscriberCount&key='.$api_key);
$api_response_decoded = json_decode($api_response, true);
$api_response_decoded['items'][0]['statistics']['subscriberCount'];
// $subsricbers = array("subs" => $api_response_decoded);
echo json_encode($subsricbers);
?>