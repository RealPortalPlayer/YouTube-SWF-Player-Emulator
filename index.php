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
