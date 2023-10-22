<?php
require 'vendor/autoload.php';

if (!isset($_GET["v"]) || !isset($_GET["p"])) {
    header("Location: /");
    die("Invalid request: <a href='/'>Return</a>");
}

$id = htmlspecialchars($_GET["v"]);
$version = htmlspecialchars($_GET["p"]);
$directory = getcwd();
$width = 0;
$height = 0;
$style = "";

if (isset($_GET["playerStyle"]))
    $style = htmlspecialchars($_GET["playerStyle"]);

if (!file_exists("$directory/players/player_$version.swf")) {
    header("Location: /");
    die("Invalid player version: <a href='/'>Return</a>");
}

if (!file_exists("$directory/videos/$id.flv")) {
    header("Location: /");
    die("Invalid video ID: <a href='/'>Return</a>");
}

if ($version == "2005_v1") {
    $width = 690;
    $height = 475;
} else if ($version == "2005_v2" || $version == "2006_v1") {
    $width = 470;
    $height = 390;
} else if ($version == "2006_v2") {
    $width = 450;
    $height = 370;
} else if ($version == "2008") {
    $width = 480;
    $height = 385;
} else if ($version == "2010") {
    $width = 640;
    $height = 385;
} else if ($version == "2011" || $version == "2012" || $version == "2013") {
    $width = 640;
    $height = 390;
}

$length = \FFMpeg\FFProbe::create()->format("$directory/videos/$id.flv")->get("duration");
$source = "/players/player_$version.swf?video_id=$id&l=$length&t=$length&ps=$style";

if (isset($_GET["light"]) && $_GET["light"] == "on")
    $source .= "&theme=light";

if (isset($_GET["white"]) && $_GET["white"] == "on")
    $source .= "&color=white";

if (isset($_GET["live"]) && $_GET["live"] == "on")
    $source .= "&live_playback=1";
?>

<object id="movie">
    <param value="<?php echo $source ?>"></param>
    <param name="allowscriptaccess" value="samedomain"></param>
    <param name="allowFullScreen" value="true"></param>
    <embed name="movie" swliveconnect="true" allowfullscreen="true" src="<?php echo $source ?>" type="application/x-shockwave-flash" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></embed>
</object><br>

<span id="warning" style="display: none">
    You might not have Flash installed.<br>
    You can either go with the official Flash, or with Ruffle.<br>
    Please note that Ruffle isn't guaranteed to work, but it is 100% more secure.<br><br>
    <a href="https://chrome.google.com/webstore/detail/ruffle-flash-emulator/donbcfbmhbcapadipfkeojnmajbakjdc">Chrome Ruffle</a><br>
    <a href="https://addons.mozilla.org/en-US/firefox/addon/ruffle_rs">Firefox Ruffle</a><br>
    <a href="https://microsoftedge.microsoft.com/addons/detail/ruffle-flash-emulator/pipjjbgofgieknlpefmcckdmgaaegban">Edge Ruffle (Chromium)</a><br>
    <a href="https://archive.org/details/clean-flash-34.0.0.175-installer">CleanFlash</a><br>
    <a href="https://archive.org/details/flashplayer_old">Archived Flash</a><br><br>
    Differences:<br>
    Flash might be discontinued here, but it isn't in China. The cleaned version is the chinese version,<br>
    minus all the spyware and adware. Recommended since it comes bundled with new security updates, but not required.<br>
    It's up to your own judgement.<br><br>
    Do have Flash installed? Your browser might not support it then. Download one of these browsers:<br>
    <a href="https://ungoogled-software.github.io/ungoogled-chromium-binaries/releases/windows/64bit/67.0.3396.87-3">Ungoogled Chrome 67.0.3396.87-3 64-bit</a> Recommended, Chromium always ran best with Flash, even if I don't like Chrome<br>
    <a href="https://ftp.mozilla.org/pub/firefox/releases/84.0/win64/en-US/Firefox%20Setup%2084.0.exe">Firefox 84.0 64-bit</a><br>
    <a href="https://ftp.mozilla.org/pub/firefox/releases/84.0/win32/en-US/Firefox%20Setup%2084.0.exe">Firefox 84.0 86-bit</a>
</span>

<span id="ruffleWarning" style="display: none">Ruffle detected, don't report any bugs, unless they replicate with the official Flash player as well.</span>

<script>
    console.log("Debug information")
    console.log("ID: <?php echo $id; ?>")
    console.log("Player: <?php echo $version; ?>")
    console.log("Video: <?php echo $directory; ?>/videos/<?php echo $id; ?>.flv")
    console.log("Length: <?php echo $length; ?>")
    console.log("Source: <?php echo $source; ?>")
    
    var hasFlash
    var isRuffle
    var queries = {}

    {
        var url = document.location.search
        var regex = /[?&]?([^=]+)=([^&]*)/g
        var tokens
        
        while (tokens = regex.exec(url))
            queries[decodeURIComponent(tokens[1])] = decodeURIComponent(tokens[2])
    }
    
    try {
        hasFlash = Boolean(new ActiveXObject("ShockwaveFlash.ShockwaveFlash"))
    } catch (exception) {
        hasFlash = typeof navigator.mimeTypes["application/x-shockwave-flash"] != "undefined"
    }
    
    if (!hasFlash) {
        console.log("Flash might not be installed")
        document.getElementById("warning").style.display = "block"

        var ruffleDetection = setInterval(function() {
            if (document.getElementsByTagName("ruffle-embed").length == 0)
                return
            
            isRuffle = true
            
            console.log("Ruffle detected")
            document.getElementById("warning").style.display = "none"
            document.getElementById("ruffleWarning").style.display = "block"
            clearInterval(ruffleDetection)
        })
    }
    
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
        throw new Error("Cannot find Flash object")
    
    if (queries.width && queries.height && !isNaN(queries.width) && !isNaN(queries.height)) {
        console.log("Width: " + queries.width)
        console.log("Height: " + queries.height)

        flashObject.style.width = queries.width + "px"
        flashObject.style.height = queries.height + "px"
    }
</script>