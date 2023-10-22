<?php
header("Content-Type: video/flv");
echo file_get_contents('videos/' . $_GET["video_id"] . '.flv');
