<?php
require 'vendor/autoload.php';

if (!isset($_GET["v"]) || !isset($_GET["p"])) {
    header("Location: /");
    die("Invalid request: <a href='/'>Return</a>");
}

$id = htmlspecialchars($_GET["v"]);
$version = htmlspecialchars($_GET["p"]);
$directory = getcwd();

if (!file_exists("$directory/players/player_$version.swf")) {
    header("Location: /");
    die("Invalid player version: <a href='/'>Return</a>");
}

if (!file_exists("$directory/videos/$id.flv")) {
    header("Location: /");
    die("Invalid video ID: <a href='/'>Return</a>");
}

$length = \FFMpeg\FFProbe::create()->format("$directory/videos/$id.flv")->get("duration");
$source = "/players/player_$version.swf?video_id=$id&l=$length&t=$length";
?>

<object id="movie">
    <param value="<?php echo $source ?>"></param>
    <param name="allowscriptaccess" value="samedomain">
    <embed name="movie" swliveconnect="true" src="<?php echo $source ?>" type="application/x-shockwave-flash"></embed>
</object>

<script>
    console.log("Debug information")
    console.log("ID: <?php echo $id; ?>")
    console.log("Player: <?php echo $version; ?>")
    console.log("Video: <?php echo $directory; ?>/videos/<?php echo $id; ?>.flv")
    console.log("Length: <?php echo $length; ?>")
    console.log("Source: <?php echo $source; ?>")
    
    var flashObject = null
    
    if (window.document["movie"]) {
        console.log("Object source: window.document")
        flashObject = window.document["movie"]
    } else if (navigator.appName.indexOf("Microsoft Internet") != -1) {
        console.log("Object source: document.getElementById")
        flashObject = document.getElementById("movie")
    } else if (document.embeds && document.embeds["movie"]) {
        console.log("Object source: document.embeds")
        flashObject = document.embeds["movie"]
    } else
        console.log("Object source: null")

    console.log("Object: " + flashObject)

    if (flashObject == null)
        throw new Error("Cannot find flash object")
    
    console.log("Waiting for flash to be ready")
    
    // TODO: Think of a better way to do this
    var interval = setInterval(function() {
        try {
            if (flashObject.TGetProperty("/", 8) == undefined)
                return
        } catch {
            return
        }

        console.log("Flash ready")

        var width = flashObject.TGetProperty("/", 8)
        var height = flashObject.TGetProperty("/", 9)

        console.log("Width: " + width)
        console.log("Height: " + height)

        flashObject.style.width = width + "px"
        flashObject.style.height = height + "px"
        
        clearInterval(interval)
    })
</script>