<?php
$video_id = "";

if (!empty($_GET["video_id"]))
    $video_id = $_GET["video_id"];
else if (!empty($_GET["docid"]))
    $video_id = $_GET["docid"];
else {
    header("HTTP/1.0 400 Bad Request");
    die();
}

header("Content-Type: video/flv");
echo file_get_contents("videos/$video_id.flv");
