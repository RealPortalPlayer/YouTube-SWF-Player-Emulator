<?php
$requestedUri = $_SERVER["REQUEST_URI"];

if (strpos($requestedUri, "?"))
    $requestedUri = substr($requestedUri, 0, strpos($requestedUri, "?"));

if ($requestedUri == "/watch.php") {
    require "watch.php";
    die();
} else if ($requestedUri == "/get_video" || $requestedUri == "/get_video.php" || $requestedUri == "/players/get_video.php") {
    require "get_video.php";
    die();
} else if ($requestedUri != "/") {
    header("HTTP/1.0 404 Not Found");
    die();
}
?>

<form action="/watch.php">
    <input name="v" placeholder="Video ID"/>
    <select name="p">
        <?php 
        $iterator = new DirectoryIterator("players");
        foreach ($iterator as $file) {
            if ($file->isDot() || $file->getExtension() != "swf") 
                continue;
            
            $playerVersion = htmlspecialchars($file->getFilename());
            $playerVersion = substr(substr($playerVersion, 0, strrpos($playerVersion, ".")), 7);
            $parsedName = str_replace("_", " ", $playerVersion);
            
            echo "<option value='$playerVersion'>$parsedName</option>";
        } 
        ?>
    </select>
    <input type="submit" value="Submit"/>
</form>

Videos:<br>
<?php
$iterator = new DirectoryIterator("videos");
foreach ($iterator as $file) {
    if ($file->isDot() || $file->getExtension() != "flv")
        continue;

    $id = htmlspecialchars($file->getFilename());
    $id = substr($id, 0, strpos($id, "."));

    echo "$id<br>";
}
?>
