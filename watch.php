<?php
if (!isset($_GET["v"]) || !isset($_GET["p"])) {
	header("Location: /");
	die("Invalid request: <a href='/'>Return</a>");
}

$id = htmlspecialchars($_GET["v"]);
$version = htmlspecialchars($_GET["p"]);
?>

<object type="application/x-shockwave-flash" width="100%" height="100%">
	<param name="movie" value="/players/player_<?php echo $version; ?>.swf?video_id=<?php echo $id; ?>"></param>
</object>
