<?php
require_once "flash_arguments.php";
global $arguments;

$requestedUri = $_SERVER["REQUEST_URI"];

if (strpos($requestedUri, "?"))
    $requestedUri = substr($requestedUri, 0, strpos($requestedUri, "?"));

if ($requestedUri == "/watch.php" || $requestedUri == "/watch") {
    require "watch.php";
    die();
} else if ($requestedUri == "/get_video" || $requestedUri == "/get_video.php" || $requestedUri == "/players/get_video.php" || $requestedUri == "/videofeed") {
    require "get_video.php";
    die();
} else if ($requestedUri != "/" && $requestedUri != "/index.php") {
    header("HTTP/1.0 404 Not Found");
    die();
}
?>
<!DOCTYPE html>
<script>
    var flashArguments = <?php echo json_encode($arguments) ?>;
    
    function arrayIncludes(array, element) {
        if (array.includes)
            return array.includes(element)

        for (var i = 0; i < array.length; i++) {
            if (array[i] != element)
                continue
            
            return true
        }
        
        return false
    }
    
    function selected() {
        var version = document.getElementById("version").value
        var elements = document.querySelectorAll(".option")
        var showAll = document.getElementById("showAll")
        
        document.body.id = version
        
        for (var i = 0; i < elements.length; i++) {
            elements[i].disabled = !showAll.checked && !arrayIncludes(elements[i].className.split(" "), version)
            elements[i].hidden = elements[i].disabled
        }
    }
    
    function revertDefaults() {
        var version = document.getElementById("version").value
        var elements = document.querySelectorAll(".option")
        var showAll = document.getElementById("showAll")

        for (var i = 0; i < elements.length; i++) {
            if ((!showAll.checked && !arrayIncludes(elements[i].className.split(" "), version)) || elements[i].tagName.toLowerCase() == "option")
                continue
            
            var classNameSplit = elements[i].className.split(" ")
            var elementName = classNameSplit[0]
            var elementType = classNameSplit[1]
            var defaults = flashArguments[elementName]["default"]
            var defaultValue = defaults[version]

            if (defaultValue == undefined || defaultValue == null) {
                defaultValue = defaults["*"]

                if (defaultValue == undefined || defaultValue == null)
                    defaultValue = ""
            }

            console.log(elementName + " => " + defaultValue)
            
            if (elementType == "boolean" || elementType == "boolean2") {
                elements[i].getElementsByTagName("input")[0].checked = defaultValue
                continue
            }
            
            if (elementType == "url" || elementType == "text" || elementType == "number") {
                elements[i].getElementsByTagName("input")[0].value = defaultValue
                continue
            }
            
            if (elementType == "options") {
                var options = elements[i].getElementsByTagName("select")[0].getElementsByTagName("option")

                for (var j = 0; j < options.length; j++) {
                    if (options[j].value != defaultValue || (options[j].className != "" && !arrayIncludes(options[j].className.split(" "), version)))
                        continue
                    
                    options[j].selected = true
                    break
                }
            }
        }
    }
</script>

<form action="/watch.php">
    <label for="id">Video ID: </label>
    <input id="id" name="v"/><br>
    
    <label for="version">Player Version: </label>
    <select id="version" name="p" onchange="selected()">
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2008">2008</option>
        <option value="2006_v2">2006 v2</option>
        <option value="2006_v1">2006 v1</option>
        <option value="2005_v2">2005 v2</option>
        <option value="2005_v1">2005 v1</option>
        <option value="google">google</option>
    </select><br><br>
    
    <input type="submit" value="Submit"/>
    <input type="button" value="Reset" onclick="revertDefaults()"/>
    
    <input id="showAll" onclick="selected()" type="checkbox" name="showAll">
    <label for="showAll"> Show All</label><br><br>
    
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
        
        echo "<div class='$name $type option " . $settings["target"] . "'>";
        
        switch ($type) {
            case "boolean":
            case "boolean2":
                echo "<input type='checkbox' id='$name' name='$name'";
                
                if (!empty($default))
                    echo " checked";
                
                echo ">";
                echo "<label for='$name'> $pretty_name ($name)</label>";
                break;
                
            case "url":
            case "text":
            case "number":
                echo "<label for='$name'>$pretty_name ($name): </label>";
                echo "<input type='$type' id='$name' name='$name'>";
                break;
                
            case "options":
                echo "<label for='$name'>$pretty_name ($name): </label>";
                echo "<select id='$name' name='$name'>";
                
                foreach ($settings["values"] as $value_name => $value_settings) {
                    $value_target = $value_settings["target"];
                    
                    echo "<option ";
                    
                    if (!empty($value_target))
                        echo "class='option $value_target' ";
                    
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
    revertDefaults()
</script>