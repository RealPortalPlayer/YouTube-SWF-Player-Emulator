Start a PHP server in this folder
Use a Flash Player Projector, and connect to: http://<IP>/player_<year>.swf?video_id=<id>
Example: http://127.0.0.1/player_2005.swf?video_id=jNQXAC9IVRw

Use any FLV video you want, as long as it's in this folder, and it has the video ID as its name

Right now, you can only really use this to watch some videos

Bugs:
* Only the 2005 players works, everything else doesn't. Perhaps it doesn't know the video length?
* Clicking on the video progress bar resets it to the beginning of the video, maybe for the same reason as above.
* The 2005 v2 player keeps trying to get something else while you're watching a video?
* Anything that requires external YouTube features, like sharing, won't work. Go figure.
* The player thinks it's being embedded on an external site, we should probably find a way to trick it.
