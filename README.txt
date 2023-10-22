Player Guide:
 - player_2005_v1: 2005
 - player_2005_v2: 2005
 - player_2006_v1: 2006
 - player_2006_v2: 2006-2008
 - player_2008: 2008-2010
 - player_2010: 2010-2011
 - player_2011: 2011-2012
 - player_2012: 2012-2013
 - player_2013: 2013

HELP WANTED: Finding unmodified versions of the player is difficult, you can help by searching for old archives of the YouTube site, and extracting their SWF files
 - Google Video (not extracted, I still want to support it despite not being YouTube)
 - 2005_v1
 - 2005_v2
 - 2006_v1 (unconfirmed unmodified)
 - 2006_v2
 - 2008
 - 2010
 - 2011
 - 2012
 - 2013

The players are the property of YouTube/Google. No copyright infringement intended. This is just a small project trying to get these historical players working again.
No login are required.

Requirements:
 - apache: For Windows/macOS, use this https://www.apachefriends.org/download.html instead, For Linux, search for a guide for your distro
 - ffmpeg (for ffprobe): https://ffmpeg.org/download.html (essentials works fine)
 - php: https://www.php.net/
 - composer: https://getcomposer.org/download/
 - yt-dlp or youtube-dl (only for the youtube-dl-script.sh): https://github.com/yt-dlp/yt-dlp

You need the apache server to allow .htaccess, and the rewrite rule.
Install all the dependencies by running: composer install.
Install this into your apache htdocs folder.
You can now specify what video ID you want to watch, and on what player version.
This can work with Ruffle, but it works best with the native Flash player.

Some players might not work out of the box. To get them to work, first edit your apache vhosts file.
 - Windows: C:\xampp\apache\conf\extra\httpd-vhosts.conf
 - Linux /etc/httpd/conf/extra/httpd-vhosts.conf
 - macOS: /Applications/XAMPP/xamppfiles/etc/extra/httpd-vhosts
and add this:
<VirtualHost *:80>
        ServerName www.youtube.com
        DocumentRoot "/srv/http"
        <Directory "/srv/http">
                AllowOverride all
                Require all granted
        </Directory>
</VirtualHost>
Make sure to replace /srv/http with the actual path to the website contents.
Then edit your hosts file to add: 127.0.0.1 www.youtube.com
 - Windows: C:\Windows\System32\drivers\etc\hosts
 - Linux\macOS: /etc/hosts

Download YouTube videos by calling youtube-dl-script.sh with the video ID. Example: youtube-dl-script.sh jNQXAC9IVRw

Ruffle: Not recommended, can contain bugs that are not replicated on real Flash, but it's 100% more secure
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
 Ungoogled Chromium: Recommended, Chromium always ran best with Flash, even if I don't like Chrome
  64bit: https://ungoogled-software.github.io/ungoogled-chromium-binaries/releases/windows/64bit/67.0.3396.87-3

 Firefox:
  64bit: https://ftp.mozilla.org/pub/firefox/releases/84.0/win64/en-US/Firefox%20Setup%2084.0.exe
  86bit: https://ftp.mozilla.org/pub/firefox/releases/84.0/win32/en-US/Firefox%20Setup%2084.0.exe

Linux/macOS users can use Wine for Flash, and the browser