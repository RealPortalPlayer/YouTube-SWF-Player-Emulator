<?php
$requestedUri = $_SERVER["REQUEST_URI"];

if (strpos($requestedUri, "?"))
    $requestedUri = substr($requestedUri, 0, strpos($requestedUri, "?"));

if ($requestedUri == "/watch.php" || $requestedUri == "/watch") {
    require "watch.php";
    die();
} else if ($requestedUri == "/get_video" || $requestedUri == "/get_video.php" || $requestedUri == "/players/get_video.php") {
    require "get_video.php";
    die();
} else if ($requestedUri != "/" && $requestedUri != "/index.php") {
    header("HTTP/1.0 404 Not Found");
    die();
}
?>

<form action="/watch.php">
    <label for="id">Video ID: </label>
    <input id="id" name="v" placeholder="Video ID"/><br>
    
    <label for="version">Player Version: </label>
    <select id="version" name="p">
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
    </select><br><br>
    
    <input type="submit" value="Submit"/><br><br>
    
    <label for="width">Override Width: </label>
    <input id="width" name="width" placeholder="Override Width"><br>
    
    <label for="height">Override Height: </label>
    <input id="height" name="height" placeholder="Override Height"><br>
    
    <input type="checkbox" id="light" name="light">
    <label for="light"> Light theme</label><br>

    <input type="checkbox" id="white" name="white">
    <label for="white"> White progress bar</label><br>

    <input type="checkbox" id="live" name="live">
    <label for="live"> Fake live</label><br>

    <label for="playerStyle">Player Style: </label>
    <select id="playerStyle" name="playerStyle">
        <option value="docs">Google Docs</option>
        <option value="books">Google Books</option>
        <option value="popup">Pop-up</option>
        <option value="akamai-hd-live">Akamai HD Live</option>
        <option value="googlemediaads">Google Media Ads</option>
        <option value="trueview-indisplay-ctp">TrueView In-Display CTP</option>
        <option value="custom-big">Custom Big</option>
        <option value="chromeless">Chromeless</option>
        <option value="custom-small">Custom Small</option>
        <option value="default">Default</option>
        <option value="ad">Ad</option>
        <option value="vevo">Vevo</option>
        <option value="mobile">Mobile</option>
        <option value="chromeless-invideo">Chromeless In-video</option>
        <option value="wii">Wii</option>
        <option value="google-live">Google Live</option>
        <option value="play">Play</option>
        <option value="vevo-embedded">Vevo Embedded</option>
        <option value="yva">YVA</option> <!-- What does YVA mean? YouTube Video App? -->
        <option value="blogger">Blogger</option>
        <option value="disco">Disco</option>
        <option value="olympics">Olympics</option>
        <option value="instream">In-stream</option>
        <option value="live">Live</option>
        <option value="picasaweb">Picasa Web</option>
        <option value="testing">Testing</option>
        <option value="xl">XL</option>
        <option value="trueview-inslate">TrueView In-slate</option>
    </select>
</form>

Player guide:<br>
2005 v1: 2005<br>
2005 v2: 2005<br>
2006 v1: 2006<br>
2006 v2: 2006-2008<br>
2008: 2008-2010<br>
2010: 2010-2011<br>
2011: 2011-2012<br>
2012: 2012-2013<br>
2013: 2013<br><br>

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
