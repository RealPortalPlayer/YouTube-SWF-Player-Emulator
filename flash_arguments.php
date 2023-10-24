<?php
$arguments = [
    // TODO: 2011 account_playback_token
    // TODO: 2008 adtype
    // TODO: 2013 adformat
    // TODO: 2011 adobePassToken
    "advideo" => [
        "target" => "2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Is Advertising Video",
        "values" => [],
        "ignore_empty" => []
    ],
    "ad3_module" => [
        "target" => "2010 2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Ad3 Module",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 ad_module
    "ad_channel" => [
        "target" => "2010 2011 2012 2013",
        "type" => "text",
        "default" => [],
        "pretty_name" => "Ad Channel",
        "values" => [],
        "ignore_empty" => []
    ],
    "ad_preroll" => [
        "target" => "2010 2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Ad Pre-roll",
        "values" => [],
        "ignore_empty" => [
            "*" => true
        ]
    ],
    "ajax_preroll" => [
        "target" => "2010",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Ad Pre-roll",
        "values" => [],
        "ignore_empty" => [
            "*" => true
        ]
    ],
    // TODO: 2013 agcid
    "akamaihd_module" => [
        "target" => "2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Akamai HD Module",
        "values" => [],
        "ignore_empty" => []
    ],
    "akamaihd_preroll" => [
        "target" => "2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Akamai HD Pre-roll",
        "values" => [],
        "ignore_empty" => [
            "*" => true
        ]
    ],
    // TODO: 2008 allowseekahead
    "allow_embed" => [
        "target" =>  "2010 2011",
        "type" => "boolean",
        "default" => [
            "*" => true
        ],
        "pretty_name" => "Allow Embed",
        "values" => [],
        "ignore_empty" => []
    ],
    "allow_ratings" => [
        "target" =>  "2008",
        "type" => "boolean",
        "default" => [
            "*" => true
        ],
        "pretty_name" => "Allow Ratings",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 ap
    // TODO: 2011 aptok
    // TODO: 2008 aswap
    "attrib" => [
        "target" => "2011 2012 2013",
        "type" => "options",
        "default" => [],
        "pretty_name" => "Attributes",
        "values" => [
            "ad-true-indisplay-pv" => [
                "target" => "",
                "pretty_name" => "Ad TrueView In-display PV"
            ],
            "ad-trueview-insearch" => [
                "target" => "",
                "pretty_name" => "Ad TrueView In-search"
            ]
        ],
        "ignore_empty" => []
    ],
    // TODO: 2011 authKey
    // TODO: 2006_v1 2006_v2 auth_code
    // TODO: 2010 2011 auth_timeout
    "author" => [
        "target" => "2010 2011",
        "type" => "text",
        "default" => [],
        "pretty_name" => "Author",
        "values" => [],
        "ignore_empty" => []
    ],
    "autohide" => [
        "target" => "2008 2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Auto-hide",
        "values" => [],
        "ignore_empty" => []
    ],
    "autoplay" => [
        "target" => "2008 2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [
            "*" => true
        ],
        "pretty_name" => "Auto-play",
        "values" => [],
        "ignore_empty" => []
    ],
    "authuser" => [
        "target" => "2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 avg_rating

    "BASE_GDATA" => [
        "target" => "2008",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Base Google Data URL",
        "values" => [],
        "ignore_empty" => []
    ],
    "BASE_YT_URL" => [
        "target" => "2006_v1 2006_v2 2008 2010 2011 2012 2013",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Base YouTube URL",
        "values" => [],
        "ignore_empty" => []
    ],
    "BASE_URL" => [
        "target" => "2010 2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Base URL",
        "values" => [],
        "ignore_empty" => []
    ],
    "bgcolor" => [
        "target" => "2010 2011 2012 2013",
        "type" => "text",
        "default" => [],
        "pretty_name" => "Background Color",
        "values" => [],
        "ignore_empty" => []
    ],
    "border" => [
        "target" => "2008",
        "type" => "number",
        "default" => [],
        "pretty_name" => "Border",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2010 2011 branded_playlist
    // TODO: 2010 2011 branded_small_banner_image_map
    "branded_small_banner_image_url" => [
        "target" => "2010 2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Branded Small Banner Image URL",
        "values" => [],
        "ignore_empty" => []
    ],

    // TODO: 2008 2013 c
    "can_watch_later" => [
        "target" => "2011 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Can Watch Later",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 captions_video_id
    // TODO: 2013 cbr
    // TODO: 2013 cbrand
    // TODO: 2013 cbrver
    "cctp" => [
        "target" =>  "2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Cued Click to Play",
        "values" => [],
        "ignore_empty" => []
    ],
    "cc3_module" => [
        "target" => "2010 2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Captions3 Module",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 cc_load_policy
    // TODO: 2013 cmodel
    "color" => [
        "target" => "2011 2012 2013",
        "type" => "options",
        "default" => [],
        "pretty_name" => "Color",
        "values" => [
            "normal" => [
                "target" => "",
                "pretty_name" => "Normal"
            ],
            "white" => [
                "target" => "",
                "pretty_name" => "White"
            ],
            "yellow" => [
                "target" => "2013",
                "pretty_name" => "Yellow"
            ]
        ],
        "ignore_empty" => []
    ],
    "color1" => [
        "target" => "2008 2010",
        "type" => "number",
        "default" => [],
        "pretty_name" => "Color 1",
        "values" => [],
        "ignore_empty" => []
    ],
    "color2" => [
        "target" => "2008 2010",
        "type" => "number",
        "default" => [],
        "pretty_name" => "Color 2",
        "values" => [],
        "ignore_empty" => []
    ],
    "comments_module" => [
        "target" => "2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Comments Module",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 conn
    // TODO: 2012 2013 content_v
    // TODO: 2008 content_xml
    "controls" => [
        "target" => "2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [
            "*" => true
        ],
        "pretty_name" => "Controls",
        "values" => [],
        "ignore_empty" => []
    ],
    "convDislikeUrl" => [
        "target" => "2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Conversion Dislike URL",
        "values" => [],
        "ignore_empty" => []
    ],
    "convLikeUrl" => [
        "target" => "2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Conversion Like URL",
        "values" => [],
        "ignore_empty" => []
    ],
    "convViewUrl" => [
        "target" => "2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Conversion View URL",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2013 cos
    // TODO: 2013 cosver
    // TODO: 2013 cplatform
    // TODO: 2008 2010 2011 cr
    // TODO: 2008 creator
    // TODO: 2010 2011 2013 csi_page_type
    // TODO: 2013 cver
    // TODO: 2008 2010 2011 2013 cyc
    // TODO: 2011 cycToken
    
    // TODO: 2008 d
    // TODO: 2008 data
    // TODO: 2008 datatype
    "defaultbufferlength" => [
        "target" => "2010 2011 2012 2013",
        "type" => "number",
        "default" => [],
        "pretty_name" => "Default Buffer Length",
        "values" => [],
        "ignore_empty" => []
    ],
    "disablekb" => [
        "target" =>  "2008 2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Disable Keyboard",
        "values" => [],
        "ignore_empty" => []
    ],
    "disable_click_through" => [
        "target" => "2008 2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Disable Click Through",
        "values" => [],
        "ignore_empty" => []
    ],
    "disable_seek_on_time" => [
        "target" => "2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Disable Seek on Time",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 dtst

    // TODO: 2008 e
    "egm" => [
        "target" => "2008",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Enhanced Genie Menu",
        "values" => [],
        "ignore_empty" => []
    ],
    "el" => [
        "target" => "2010 2011 2012 2013",
        "type" => "options",
        "default" => [
            "*" => "profilepage"
        ],
        "pretty_name" => "Event Label",
        "values" => [
            "previewpage" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "Preview Page"
            ],
            "embedded" => [
                "target" => "",
                "pretty_name" => "Embedded"
            ],
            "leanback" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "Lean Back"
            ],
            "videoeditor" => [
                "target" => "2010 2011 2012 2013",
                "pretty_name" => "Video Editor"
            ],
            "mole" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "Mole"
            ],
            "popout" => [
                "target" => "2010 2011 2012 2013",
                "pretty_name" => "Pop-out"
            ],
            "leaf" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "Leaf"
            ],
            "editpage" => [
                "target" => "",
                "pretty_name" => "Edit Page"
            ],
            "adunit" => [
                "target" => "",
                "pretty_name" => "Ad Unit"
            ],
            "preview" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "Preview"
            ],
            "profilepage" => [
                "target" => "",
                "pretty_name" => "Profile Page"
            ],
            "detailpage" => [
                "target" => "",
                "pretty_name" => "Detail Page"
            ]
        ],
        "ignore_empty" => []
    ],
    "enablecsi" => [
        "target" =>  "2008 2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Enable CSI Logging",
        "values" => [],
        "ignore_empty" => []
    ],
    "enablejsapi" => [
        "target" =>  "2008 2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [
            "*" => true
        ],
        "pretty_name" => "Enable JS API",
        "values" => [],
        "ignore_empty" => []
    ],
    "enableratecontrol" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => [
            "*" => true
        ],
        "pretty_name" => "Enable Rate Control",
        "values" => [],
        "ignore_empty" => []
    ],
    "enablesizebutton" => [
        "target" =>  "2011 2012 2013",
        "type" => "boolean",
        "default" => [
            "*" => true
        ],
        "pretty_name" => "Enable Size Button",
        "values" => [],
        "ignore_empty" => []
    ],
    "enable_cardio" => [
        "target" => "2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Enable Cardio Realtime Analytics",
        "values" => [],
        "ignore_empty" => []
    ],
    "end" => [
        "target" => "2008 2013",
        "type" => "number",
        "default" => [],
        "pretty_name" => "End",
        "values" => [],
        "ignore_empty" => []
    ],
    "endscreen_module" => [
        "target" => "2010 2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "End Screen Module",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 et
    // TODO: 2006_v1 2006_v2 2008 2010 2011 2012 2013 eurl
    // TODO: 2005_v2 ewurl

    // TODO: 2008 2010 f
    // TODO: 2008 2010 2011 2012 2013 feature
    // TODO: 2008 2010 2011 2012 2013 fexp
    // TODO: 2011 finskyToken
    "flip" => [
        "target" => "2008",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Flip",
        "values" => [],
        "ignore_empty" => []
    ],
    "flvurl" => [
        "target" => "2008 2010 2011 2013",
        "type" => "url",
        "default" => [],
        "pretty_name" => "FLV URL",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2010 fmt_list
    // TODO: 2008 fmt_map
    "fmt_names" => [
        "target" => "2011",
        "type" => "text",
        "default" => [],
        "pretty_name" => "Format Names",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2010 fmt_stream_map
    "fmt_url_map" => [
        "target" => "2008",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Format URL Map",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 2010 2011 2012 2013 framer
    "fs" => [
        "target" => "2005_v2 2006_v1 2006_v2 2008 2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [
            "*" => true,
            "2005_v2" => false, // It doesn't enable the fullscreen button for these versions, it tells that it is fullscreened
            "2006_v1" => false,
            "2006_v2" => false
        ],
        "pretty_name" => "Enable Fullscreen",
        "values" => [],
        "ignore_empty" => [
            "2005_v2" => true,
            "2006_v1" => true,
            "2006_v2" => true
        ]
    ],
    "fshd" => [
        "target" => "2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [
            "*" => true
        ],
        "pretty_name" => "Enable HD Fullscreen",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2011 ftok
    // TODO: 2008 2011 ftoken

    "gestures" => [
        "target" => "2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [
            "*" => true
        ],
        "pretty_name" => "Enable Gestures",
        "values" => [],
        "ignore_empty" => []
    ],

    "hbid" => [
        "target" => "2011",
        "type" => "",
        "default" => [],
        "pretty_name" => "Default Video to HTML5",
        "values" => [],
        "ignore_empty" => [
            "*" => true
        ]
    ],
    "hd" => [
        "target" => "2008",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "HD",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 hd_watermark
    // TODO: 2008 2010 2011 2012 2013 hl
    // TODO: 2011 hlsvp

    "idpj" => [
        "target" => "2011",
        "type" => "number",
        "default" => [],
        "pretty_name" => "Initial Detailed Ping Jitter",
        "values" => [],
        "ignore_empty" => []
    ],
    "index" => [
        "target" => "2011 2012 2013",
        "type" => "number",
        "default" => [],
        "pretty_name" => "Index",
        "values" => [],
        "ignore_empty" => []
    ],
    "is_doubleclick_tracked" => [
        "target" => "2008 2010",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Is Double-click Tracked",
        "values" => [],
        "ignore_empty" => []
    ],
    "infringe" => [
        "target" => "2006_v2 2008 2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Infringe",
        "values" => [],
        "ignore_empty" => [
            "*" => true
        ]
    ],
    "interstitial" => [
        "target" => "2010 2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Interstitial",
        "values" => [],
        "ignore_empty" => []
    ],
    "iurl" => [
        "target" => "2008 2010 2011 2013",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Image URL",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2011 iurlstoryboard_high
    // TODO: 2011 iurlstoryboard_low
    "iurlmaxres" => [
        "target" => "2011 2013",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Image URL Max Resolution",
        "values" => [],
        "ignore_empty" => []
    ],
    "iurlsd" => [
        "target" => "2011 2013",
        "type" => "url",
        "default" => [],
        "pretty_name" => "SD Image URL",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 2013 iv_load_policy
    // TODO: 2008 iv_module

    "iv3_module" => [
        "target" => "2010 2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "IV3 Module",
        "values" => [],
        "ignore_empty" => []
    ],

    // TODO: 2008 2010 2011 2012 2013 jsapicallback

    // TODO: 2008 karaoke_module
    // TODO: 2008 2010 2011 keywords

    "ldpj" => [
        "target" => "2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Long Detail Ping Jitter",
        "values" => [],
        "ignore_empty" => []
    ],
    "leanback_module" => [
        "target" => "2010 2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Lean Back Module",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2010 list
    "liveplayback_module" => [
        "target" => "2010 2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Live Playback Module",
        "values" => [],
        "ignore_empty" => []
    ],
    "logwatch" => [
        "target" => "2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Log Watch",
        "values" => [],
        "ignore_empty" => [
            "*" => true
        ]
    ],
    "loop" => [
        "target" => "2008 2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Loop",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2011 loudness
    
    "maxbufferlength" => [
        "target" => "2010 2011 2012 2013",
        "type" => "number",
        "default" => [],
        "pretty_name" => "Max Buffer Length",
        "values" => [],
        "ignore_empty" => []
    ],
    "mbhosted" => [
        "target" => "2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Maybe Hosted",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2010 2011 mediaid
    "modestbranding" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Prefer YouTube Title Tip",
        "values" => [],
        "ignore_empty" => []
    ],
    "multicamera_module" => [
        "target" => "2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Multi-camera Module",
        "values" => [],
        "ignore_empty" => []
    ],
    "multicamera_preroll" => [
        "target" => "2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Multi-camera Pre-roll",
        "values" => [],
        "ignore_empty" => [
            "*" => true
        ]
    ],

    // TODO: 2006_v1 2006_v2 nc
    "ncop" => [
        "target" => "2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "No Content Owner Playback",
        "values" => [],
        "ignore_empty" => []
    ],
    "nochrome" => [
        "target" => "2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "No Chrome",
        "values" => [],
        "ignore_empty" => []
    ],
    "nologo" => [
        "target" => "2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "No Logo",
        "values" => [],
        "ignore_empty" => []
    ],
    "no_get_video_log" => [
        "target" => "2010 2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "No Get Video Log",
        "values" => [],
        "ignore_empty" => []
    ],
    
    // TODO: 2008 onscreensearch
    // TODO: 2011 oid

    // TODO: 2010 2011 partnerid
    // TODO: 2008 2010 2011 2012 2013 playerapiid
    // TODO: 2008 2010 2011 2012 2013 player_id
    "player_wide" => [
        "target" => "2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Wide Player",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2010 2011 2012 2013 playlist
    // TODO: 2011 2012 2013 playlist_module
    "playnext" => [
        "target" => "2005_v2 2006_v1 2006_v2 2008",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Play Next",
        "values" => [],
        "ignore_empty" => []
    ],
    "playNext" => [
        "target" => "2010 2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Play Next",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 2010 2011 plid
    "ps" => [
        "target" => "2008 2010 2011 2012 2013",
        "type" => "options",
        "default" => [
            "*" => "default"
        ],
        "pretty_name" => "Player Style",
        "values" => [
            "docs" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "Google Docs"
            ],
            "books" => [
                "target" => "2012 2013",
                "pretty_name" => "Google Books"
            ],
            "popup" => [
                "target" => "",
                "pretty_name" => "Pop-up"
            ],
            "akamai-hd-live" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "Akamai HD Live"
            ],
            "googlemediaads" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "Google Media Ads"
            ],
            "trueview-indisplay-ctp" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "TrueView In-Display CTP"
            ],
            "custom-big" => [
                "target" => "",
                "pretty_name" => "Custom Big"
            ],
            "chromeless" => [
                "target" => "",
                "pretty_name" => "Chromeless"
            ],
            "custom-small" => [
                "target" => "",
                "pretty_name" => "Custom Small"
            ],
            "default" => [
                "target" => "",
                "pretty_name" => "Default"
            ],
            "ad" => [
                "target" => "2010 2011 2012 2013",
                "pretty_name" => "Ad"
            ],
            "vevo" => [
                "target" => "2010 2011 2012 2013",
                "pretty_name" => "Vevo"
            ],
            "vevo-detailpage" => [
                "target" => "2008",
                "pretty_name" => "Vevo Detail Page"
            ],
            "mobile" => [
                "target" => "",
                "pretty_name" => "Mobile"
            ],
            "chromeless-invideo" => [
                "target" => "",
                "pretty_name" => "Chromeless In-video"
            ],
            "wii" => [
                "target" => "",
                "pretty_name" => "Wii"
            ],
            "google-live" => [
                "target" => "2010 2011 2012 2013",
                "pretty_name" => "Google Live"
            ],
            "play" => [
                "target" => "2013",
                "pretty_name" => "Play"
            ],
            "vevo-embedded" => [
                "target" => "",
                "pretty_name" => "Vevo Embedded"
            ],
            "yva" => [
                "target" => "",
                "pretty_name" => "YVA" // TODO: What does YVA mean? YouTube Video App?
            ],
            "leanback" => [
                "target" => "2010 2011",
                "pretty_name" => "Lean Back"
            ],
            "blogger" => [
                "target" => "2010 2011 2012 2013",
                "pretty_name" => "Blogger"
            ],
            "disco" => [
                "target" => "2010 2011 2012 2013",
                "pretty_name" => "Disco"
            ],
            "olympics" => [
                "target" => "2012 2013",
                "pretty_name" => "Olympics"
            ],
            "instream" => [
                "target" => "2010 2011 2012 2013",
                "pretty_name" => "In-stream"
            ],
            "live" => [
                "target" => "2010 2011 2012 2013",
                "pretty_name" => "Live"
            ],
            "picasaweb" => [
                "target" => "2010 2011 2012 2013",
                "pretty_name" => "Picasa Web"
            ],
            "testing" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "Testing"
            ],
            "trueview-instream" => [
                "target" => "2011 2012",
                "pretty_name" => "TrueView In-stream"
            ],
            "xl" => [
                "target" => "",
                "pretty_name" => "XL"
            ],
            "trueview-inslate" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "TrueView In-slate"
            ]
        ],
        "ignore_empty" => []
    ],
    // TODO: 2011 ptchn
    // TODO: 2010 2011 ptk
    "pyv_beacon_url" => [
        "target" => "2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Promoted Video Beacon URL",
        "values" => [],
        "ignore_empty" => []
    ],
    "pyv_billable_url" => [
        "target" => "2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Promoted Video Billable URL",
        "values" => [],
        "ignore_empty" => []
    ],
    "pyv_conv_url" => [
        "target" => "2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Promoted Video Conversion URL",
        "values" => [],
        "ignore_empty" => []
    ],
    
    "q" => [
        "target" => "2006_v2 2008 2010 2011 2012 2013",
        "type" => "text",
        "default" => [],
        "pretty_name" => "Query",
        "values" => [],
        "ignore_empty" => []
    ],

    "ratings3_module" => [
        "target" => "2010 2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Ratings3 Module",
        "values" => [],
        "ignore_empty" => []
    ],
    "ratings_module" => [
        "target" => "2008",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Ratings Module",
        "values" => [],
        "ignore_empty" => []
    ],
    "ratings_preroll" => [
        "target" => "2010 2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Ratings Pre-roll",
        "values" => [],
        "ignore_empty" => [
            "*" => true
        ]
    ],
    "record" => [
        "target" => "2008",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Record",
        "values" => [],
        "ignore_empty" => []
    ],
    "referrer" => [
        "target" => "2010 2011 2012 2013",
        "type" => "text",
        "default" => [],
        "pretty_name" => "Referrer",
        "values" => [],
        "ignore_empty" => []
    ],
    "rel" => [
        "target" => "2008 2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [
            "*" => true
        ],
        "pretty_name" => "Show Related Videos",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2011 rvs
    
    // TODO: 2005_v2 s (could be some sort of session token)
    // TODO: 2008 2010 2011 2013 sdetail
    "seekbar_thumbs" => [
        "target" => "2008",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Seekbar Thumbs",
        "values" => [],
        "ignore_empty" => []
    ],
    "seek_module" => [
        "target" => "2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Seek Module",
        "values" => [],
        "ignore_empty" => []
    ],
    "seek_stress" => [
        "target" => "2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Seek Stress",
        "values" => [],
        "ignore_empty" => []
    ],
    "sendtmp" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Send Segments To Temporary Logs",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 showcuepoints
    "showinfo" => [
        "target" => "2008 2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [
            "*" => true
        ],
        "pretty_name" => "Show Info",
        "values" => [],
        "ignore_empty" => []
    ],
    "showinstantreplaybutton" => [
        "target" => "2012",
        "type" => "boolean",
        "default" => [
            "*" => true
        ],
        "pretty_name" => "Show Instant Replay Button",
        "values" => [],
        "ignore_empty" => []
    ],
    "shownextbutton" => [
        "target" => "2010 2011 2012",
        "type" => "boolean",
        "default" => [
            "*" => true
        ],
        "pretty_name" => "Show Next Button",
        "values" => [],
        "ignore_empty" => []
    ],
    "showpopout" => [
        "target" => "2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [
            "*" => true
        ],
        "pretty_name" => "Show Pop-out",
        "values" => [],
        "ignore_empty" => []
    ],
    "showsearch" => [
        "target" => "2008",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Show Search",
        "values" => [],
        "ignore_empty" => []
    ],
    "shuffle" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Shuffle",
        "values" => [],
        "ignore_empty" => []
    ],
    "sliced_bread" => [
        "target" => "2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Sliced Bread", // ??????
        "values" => [],
        "ignore_empty" => [
            "*" => "1"
        ]
    ],
    // TODO: 2006_v2 2008 2010 2011 2012 2013 sk
    "sn" => [
        "target" => "2006_v2 2008",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Suppress Next",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2006_v2 2008 2010 2011 sourceid
    "ss" => [
        "target" => "2008 2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Suppress End-Screen Share",
        "values" => [],
        "ignore_empty" => []
    ],
    "ssl" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "SSL",
        "values" => [],
        "ignore_empty" => []
    ],
    "stagevideo" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Stage Video",
        "values" => [],
        "ignore_empty" => []
    ],
    "start" => [
        "target" => "2008 2010 2011 2013",
        "type" => "number",
        "default" => [],
        "pretty_name" => "Start",
        "values" => [],
        "ignore_empty" => []
    ],
    "ste" => [
        "target" => "2010 2011",
        "type" => "number",
        "default" => [],
        "pretty_name" => "Seconds to Expiration",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 stream
    "streaminglib_module" => [
        "target" => "2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Streaming Library Module",
        "values" => [],
        "ignore_empty" => []
    ],
    "streaminglib_preroll" => [
        "target" => "2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Streaming Library Pre-roll",
        "values" => [],
        "ignore_empty" => [
            "*" => true
        ]
    ],
    // TODO: 2011 storyboard_spec
    // TODO: 2011 subscribed
    // TODO: 2008 subtitle_module
    "svfshd" => [
        "target" => "2012",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Stage Video Fullscreen HD",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2006_v2 2008 2010 2011 2012 2013 sw

    // TODO: 2011 watch_ajax_token
    // TODO: 2011 2012 2013 watch_xlb
    // TODO: 2008 2010 2011 watermark

    "tabsb" => [
        "target" => "2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Toasted And Buttered Sliced Bread", // ?????
        "values" => [],
        "ignore_empty" => [
            "*" => "1"
        ]
    ],
    "theme" => [
        "target" => "2011 2012 2013",
        "type" => "options",
        "default" => [],
        "pretty_name" => "Theme",
        "values" => [
            "dark" => [
                "target" => "",
                "pretty_name" => "Dark"
            ],
            "light" => [
                "target" => "",
                "pretty_name" => "Light"
            ],
            "tlb" => [
                "target" => "2011",
                "pretty_name" => "Three Little Bears Experiment"
            ]
        ],
        "ignore_empty" => []
    ],
    "thirdPartyFlvUrl" => [
        "target" => "2011 2013",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Third-party FLV URL",
        "values" => [],
        "ignore_empty" => []
    ],
    "threed_layout_preview" => [
        "target" => "2011",
        "type" => "",
        "default" => [],
        "pretty_name" => "ThreeD Layout Preview",
        "values" => [],
        "ignore_empty" => [
            "*" => true
        ]
    ],
    "threed_module" => [
        "target" => "2010 2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "ThreeD Module",
        "values" => [],
        "ignore_empty" => []
    ],
    "threed_preroll" => [
        "target" => "2010 2011 2012 2013",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "ThreeD Pre-roll",
        "values" => [],
        "ignore_empty" => [
            "*" => true
        ]
    ],
    "thumbnail_tiles_url" => [
        "target" => "2013",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Thumbnail Tiles URL",
        "values" => [],
        "ignore_empty" => []
    ],
    "thumbnail_url" => [
        "target" => "2010 2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Thumbnail URL",
        "values" => [],
        "ignore_empty" => []
    ],
    "timestamp" => [
        "target" => "2010",
        "type" => "number",
        "default" => [],
        "pretty_name" => "Timestamp",
        "values" => [],
        "ignore_empty" => []
    ],
    "title" => [
        "target" => "2008 2010 2011 2012 2013",
        "type" => "text",
        "default" => [],
        "pretty_name" => "Video Title",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2006_v2 2008 2010 tk
    "tmi" => [
        "target" => "2010 2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "TMI", // TODO: What does TMI mean
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2008 2010 2011 token
    "track_embed" => [
        "target" => "2010",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Track Embed",
        "values" => [],
        "ignore_empty" => []
    ],
    // TODO: 2011 tspto

    // TODO: 2008 usef
    // TODO: 2010 2011 user_age
    // TODO: 2010 2011 user_gender
    "use_gdata" => [
        "target" => "2008",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Use Google Data",
        "values" => [],
        "ignore_empty" => []
    ],

    // TODO: 2008 video_pub_id
    // TODO: 2008 video_recorder_module
    // TODO: 2008 2010 2011 2012 2013 vq

    "webcam_module" => [
        "target" => "2010",
        "type" => "url",
        "default" => [],
        "pretty_name" => "Webcam Module",
        "values" => [],
        "ignore_empty" => []
    ],
    "webcam_preroll" => [
        "target" => "2010",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Webcam Pre-roll",
        "values" => [],
        "ignore_empty" => [
            "*" => true
        ]
    ],
    "was_playing" => [
        "target" => "2005_v2",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "Was Playing",
        "values" => [],
        "ignore_empty" => []
    ],
    
    // TODO: 2008 ymouse
    "ypc_buy_url" => [
        "target" => "2010",
        "type" => "url",
        "default" => [],
        "pretty_name" => "YPC Buy Module",
        "values" => [],
        "ignore_empty" => []
    ],
    "ypc_license_checker_module" => [
        "target" => "2010 2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "YPC License Checker Module",
        "values" => [],
        "ignore_empty" => []
    ],
    "ypc_module" => [
        "target" => "2010 2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "YPC Module",
        "values" => [],
        "ignore_empty" => []
    ],
    "ypc_preview" => [
        "target" => "2010 2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "YPC Preview",
        "values" => [],
        "ignore_empty" => []
    ],
    "yva_module" => [
        "target" => "2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "YVA Module",
        "values" => [],
        "ignore_empty" => []
    ],
    "yva_preroll" => [
        "target" => "2011",
        "type" => "boolean",
        "default" => [],
        "pretty_name" => "YVA Pre-roll",
        "values" => [],
        "ignore_empty" => [
            "*" => true
        ]
    ],

    // TODO: 2010 ypc_vid
    // TODO: 2010 ypc_video_price
    // TODO: 2010 ypc_video_type
    
    // TODO: 2008 xmouse
    
    "xmas_module" => [
        "target" => "2011",
        "type" => "url",
        "default" => [],
        "pretty_name" => "X-Mas Module",
        "values" => [],
        "ignore_empty" => []
    ],
];