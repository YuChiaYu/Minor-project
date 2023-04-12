<?php
$url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=24.151327923091475,%20120.65088609006602&radius=15000&keyword=%E5%81%A5%E8%BA%AB%E6%88%BF&language=zh-TW&key=AIzaSyBxplkQQN1mTOSfOn0ww_0v1UAHRKH05cU";
echo file_get_contents($url);
?>
