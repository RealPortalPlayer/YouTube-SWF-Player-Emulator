<?php
require_once "flash_arguments.php";
global $arguments;

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

<script>
    function selected() {
        var version = document.getElementById("version").value
        var elements = document.getElementsByClassName("option")

        for (var i = 0; i < elements.length; i++) {
            elements[i].disabled = !elements[i].className.includes(version)
            elements[i].hidden = elements[i].disabled
        }
    }
</script>

<form action="/watch.php">
    <label for="id">Video ID: </label>
    <input id="id" name="v"/><br>
    
    <label for="version">Player Version: </label>
    <select id="version" name="p" onchange="selected()">
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
    <input id="width" name="width" type="number"><br>
    
    <label for="height">Override Height: </label>
    <input id="height" name="height" type="number"><br>

    <input type="checkbox" id="live_playback" name="live_playback">
    <label for="live_playback"> Live</label><br><br>
    
    YouTube Environment:<br>
    <?php
    foreach ($arguments as $name => $settings) {
        $default = $settings["default"];
        $pretty_name = $settings["pretty_name"];
        $type = $settings["type"];
        
        echo "<div class='option " . $settings["target"] . "'>";
        
        switch ($type) {
            case "boolean":
                echo "<input type='checkbox' id='$name' name='$name'";
                
                if (!empty($default))
                    echo " checked";
                
                echo ">";
                echo "<label for='$name'> $pretty_name</label>";
                break;
                
            case "url":
            case "text":
            case "number":
                echo "<label for='$name'>$pretty_name: </label>";
                echo "<input type='$type' id='$name' name='$name' value='$default'>";
                break;
                
            case "options":
                echo "<label for='$name'>$pretty_name: </label>";
                echo "<select id='$name' name='$name'>";
                
                foreach ($settings["values"] as $value_name => $value_settings) {
                    $value_target = $value_settings["target"];
                    
                    echo "<option ";
                    
                    if (!empty($value_target))
                        echo "class='option $value_target' ";
                    
                    if ($default == $value_name)
                        echo "selected ";
                    
                    echo "value='$value_name'>" . $value_settings["pretty_name"] . "</option>";
                }
                
                echo "</select>";
                break;
        }
        
        echo "</div>";
    }
    ?>
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

<script>
    selected()
</script>