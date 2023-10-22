Requirements:
 - apache
 - ffmpeg (for ffprobe)
 - php
 - composer
 - yt-dlp or youtube-dl (only for the youtube-dl-script.sh)

You need the apache server to allow .htaccess, and the rewrite rule.
Install all the dependencies by running: composer install.
Install this into your apache htdocs folder.
You can now specify what video ID you want to watch, and on what player version.
This can work with Ruffles, but it works best with the native Flash player.

Download YouTube videos by calling youtube-dl-script.sh with the video ID. Example: youtube-dl-script.sh jNQXAC9IVRw

Ruffles: Not recommended, can contain bugs that are not replicated on real Flash, but it's 100% more secure
Chrome: https://chrome.google.com/webstore/detail/ruffle-flash-emulator/donbcfbmhbcapadipfkeojnmajbakjdc
Firefox: https://addons.mozilla.org/en-US/firefox/addon/ruffle_rs/
Edge (chromium): https://microsoftedge.microsoft.com/addons/detail/ruffle-flash-emulator/pipjjbgofgieknlpefmcckdmgaaegban

Flash:
Cleaned (recommended): https://archive.org/details/clean-flash-34.0.0.175-installer
Vanilla: https://archive.org/details/flashplayer_old

Differences:
Flash might be discontinued here, but it isn't in China. The cleaned version is the chinese version,
minus all the spyware and adware. Recommended since it comes bundled with new security updates, but not required.
It's up to your own judgement.

The current browsers do not support Flash, use this:
https://ungoogled-software.github.io/ungoogled-chromium-binaries/releases/windows/64bit/67.0.3396.87-3

Linux/macOS users can use Wine for Flash, and the browser