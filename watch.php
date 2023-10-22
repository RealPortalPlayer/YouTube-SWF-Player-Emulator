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

<script>
    console.log("Debug information")
    console.log("ID: <?php echo $id; ?>")
    console.log("Player: <?php echo $version; ?>")
    console.log("Video: <?php echo $directory; ?>/videos/<?php echo $id; ?>.flv")
    console.log("Length: <?php echo $length; ?>")
    console.log("Source: <?php echo $source; ?>")
</script>

<object width="100%" height="100%">
	<param value="<?php echo $source ?>"></param>
    <embed name="movie" src="<?php echo $source ?>" type="application/x-shockwave-flash" width="100%" height="100%"></embed>
</object>
