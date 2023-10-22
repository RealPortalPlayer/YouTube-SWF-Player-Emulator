<?php
require 'vendor/autoload.php';

if (!isset($_GET["v"]) || !isset($_GET["p"])) {
	header("Location: /");
	die("Invalid request: <a href='/'>Return</a>");
}

$id = htmlspecialchars($_GET["v"]);
$version = htmlspecialchars($_GET["p"]);
$directory = getcwd();
$length = \FFMpeg\FFProbe::create()->format("$directory/videos/$id.flv")->get("duration");

echo "ID: $id<br>";
echo "Player: $version<br>";
echo "Video: $directory/videos/$id.flv<br>";
echo "Length: $length<br>";
?>

<object type="application/x-shockwave-flash" width="100%" height="100%">
	<param name="movie" value="/players/player_<?php echo $version; ?>.swf?video_id=<?php echo $id; ?>&l=<?php echo $length; ?>&t=<?php echo $length; ?>"></param>
</object>
