<?php
header("Content-Type: video/flv");

$prefix = "";

if (!file_exists("videos"))
	$prefix = "../";

echo file_get_contents($prefix . 'videos/' . $_GET["video_id"] . '.flv');
