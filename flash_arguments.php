<?php
$arguments = [
    "ssl" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "SSL",
        "values" => []
    ],
    "BASE_YT_URL" => [
        "target" => "2006_v2 2008 2011 2012 2013",
        "type" => "url",
        "default" => "",
        "pretty_name" => "Base YouTube URL",
        "values" => []
    ],
    "BASE_GDATA" => [
        "target" => "2008",
        "type" => "url",
        "default" => "",
        "pretty_name" => "Base Google Data URL",
        "values" => []
    ],
    "use_gdata" => [
        "target" => "2008",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Use Google Data",
        "values" => []
    ],
    "el" => [
        "target" => "2011 2012 2013",
        "type" => "options",
        "default" => "profilepage",
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
                "target" => "2011 2012 2013",
                "pretty_name" => "Video Editor"
            ],
            "mole" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "Mole"
            ],
            "popout" => [
                "target" => "2011 2012 2013",
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
        ]
    ],
    "ps" => [
        "target" => "2008 2011 2012 2013",
        "type" => "options",
        "default" => "default",
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
                "target" => "2011 2012 2013",
                "pretty_name" => "Ad"
            ],
            "vevo" => [
                "target" => "2011 2012 2013",
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
                "target" => "2011 2012 2013",
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
                "pretty_name" => "YVA"
            ],
            "leanback" => [
                "target" => "2011",
                "pretty_name" => "Lean Back"
            ],
            "blogger" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "Blogger"
            ],
            "disco" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "Disco"
            ],
            "olympics" => [
                "target" => "2012 2013",
                "pretty_name" => "Olympics"
            ],
            "instream" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "In-stream"
            ],
            "live" => [
                "target" => "2011 2012 2013",
                "pretty_name" => "Live"
            ],
            "picasaweb" => [
                "target" => "2011 2012 2013",
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
        ]
    ],
    "flvurl" => [
        "target" => "2008 2013",
        "type" => "url",
        "default" => "",
        "pretty_name" => "FLV URL",
        "values" => []
    ],
    "thirdPartyFlvUrl" => [
        "target" => "2013",
        "type" => "url",
        "default" => "",
        "pretty_name" => "Third-party FLV URL",
        "values" => []
    ],
    // TODO: 2008 fmt_map
    "fmt_url_map" => [
        "target" => "2008",
        "type" => "url",
        "default" => "",
        "pretty_name" => "Format URL Map",
        "values" => []
    ],
    "hd" => [
        "target" => "2008",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "HD",
        "values" => []
    ],
    "attrib" => [
        "target" => "2011 2012 2013",
        "type" => "options",
        "default" => "",
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
        ]
    ],
    // TODO: 2008 adtype
    // TODO: 2013 adformat
    // TODO: 2008 2011 2012 2013 eurl
    "disable_click_through" => [
        "target" => "2008 2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Disable Click Through",
        "values" => []
    ],
    // TODO: 2008 conn
    // TODO: 2006_v2 2008 tk
    "referrer" => [
        "target" => "2011 2012 2013",
        "type" => "text",
        "default" => "",
        "pretty_name" => "Referrer",
        "values" => []
    ],
    "ad_channel" => [
        "target" => "2011 2012 2013",
        "type" => "text",
        "default" => "",
        "pretty_name" => "Ad Channel",
        "values" => []
    ],
    "autohide" => [
        "target" => "2008 2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Auto-hide",
        "values" => []
    ],
    "infringe" => [
        "target" => "2006_v2 2008 2010 2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Infringe",
        "values" => []
    ],
    // TODO: 2008 ftoken
    "autoplay" => [
        "target" => "2008 2010 2011 2012 2013",
        "type" => "boolean",
        "default" => "1",
        "pretty_name" => "Auto-play",
        "values" => []
    ],
    "bgcolor" => [
        "target" => "2011 2012 2013",
        "type" => "text",
        "default" => "",
        "pretty_name" => "Background Color",
        "values" => []
    ],
    "controls" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => "1",
        "pretty_name" => "Controls",
        "values" => []
    ],
    "cctp" => [
        "target" =>  "2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Cued Click to Play",
        "values" => []
    ],
    "defaultbufferlength" => [
        "target" => "2011 2012 2013",
        "type" => "number",
        "default" => "",
        "pretty_name" => "Default Buffer Length",
        "values" => []
    ],
    // TODO: 2008 2013 c
    // TODO: 2008 d
    // TODO: 2008 avg_rating
    "title" => [
        "target" => "2011 2012 2013",
        "type" => "text",
        "default" => "",
        "pretty_name" => "Title",
        "values" => []
    ],
    "allow_ratings" => [
        "target" =>  "2008",
        "type" => "boolean",
        "default" => "1",
        "pretty_name" => "Allow Ratings",
        "values" => []
    ],
    // TODO: 2013 cbrand
    // TODO: 2013 cbr
    // TODO: 2013 cbrver
    // TODO: 2013 cmodel
    // TODO: 2013 cos
    // TODO: 2013 cosver
    // TODO: 2013 cplatform
    // TODO: 2013 cver
    "disablekb" => [
        "target" =>  "2008 2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Disable Keyboard",
        "values" => []
    ],
    "enablecsi" => [
        "target" =>  "2008 2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Enable CSI Logging",
        "values" => []
    ],
    "enablejsapi" => [
        "target" =>  "2008 2011 2012 2013",
        "type" => "boolean",
        "default" => "1",
        "pretty_name" => "Enable JS API",
        "values" => []
    ],
    "enablesizebutton" => [
        "target" =>  "2011 2012 2013",
        "type" => "boolean",
        "default" => "1",
        "pretty_name" => "Enable Size Button",
        "values" => []
    ],
    "enablereatecontrol" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => "1",
        "pretty_name" => "Enable Rate Control",
        "values" => []
    ],
    // TODO: 2008 2011 2012 2013 feature
    // TODO: 2008 2011 2012 2013 fexp
    // TODO: 2008 iv_module
    // TODO: 2008 ratings_module
    // TODO: 2008 karaoke_module
    // TODO: 2008 captions_video_id
    // TODO: 2008 watermark
    "flip" => [
        "target" => "2008",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Flip",
        "values" => []
    ],
    // TODO: 2008 keywords
    // TODO: 2008 video_recorder_module
    // TODO: 2008 cc_load_policy
    // TODO: 2008 2011 2012 2013 framer
    // TODO: 2008 et
    // TODO: 2008 aswap
    "fs" => [
        "target" => "2006_v2 2008 2011 2012 2013",
        "type" => "boolean",
        "default" => "1",
        "pretty_name" => "Enable Fullscreen",
        "values" => []
    ],
    "iurl" => [
        "target" => "2008 2013",
        "type" => "url",
        "default" => "",
        "pretty_name" => "Image URL",
        "values" => []
    ],
    "iurlsd" => [
        "target" => "2013",
        "type" => "url",
        "default" => "",
        "pretty_name" => "SD Image URL",
        "values" => []
    ],
    "iurlmaxres" => [
        "target" => "2013",
        "type" => "url",
        "default" => "",
        "pretty_name" => "Image URL Max Resolution",
        "values" => []
    ],
    "thumbnail_tiles_url" => [
        "target" => "2013",
        "type" => "url",
        "default" => "",
        "pretty_name" => "Thumbnail Tiles URL",
        "values" => []
    ],
    // TODO: 2013 sdetail
    "can_watch_later" => [
        "target" => "2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Can Watch Later",
        "values" => []
    ],
    // TODO: 2013 csi_page_type
    // TODO: 2008 2013 cyc
    "start" => [
        "target" => "2008 2013",
        "type" => "number",
        "default" => "",
        "pretty_name" => "Start",
        "values" => []
    ],
    "end" => [
        "target" => "2008 2013",
        "type" => "number",
        "default" => "",
        "pretty_name" => "End",
        "values" => []
    ],
    "fshd" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => "1",
        "pretty_name" => "Enable HD Fullscreen",
        "values" => []
    ],
    "gestures" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => "1",
        "pretty_name" => "Enable Gestures",
        "values" => []
    ],
    // TODO: 2008 2011 2012 2013 hl
    // TODO: 2008 2011 2012 2013 jsapicallback
    // TODO: 2008 content_xml
    // TODO: 2008 creator
    // TODO: 2008 token
    "color1" => [
        "target" => "2008",
        "type" => "number",
        "default" => "",
        "pretty_name" => "Color 1",
        "values" => []
    ],
    "color2" => [
        "target" => "2008",
        "type" => "number",
        "default" => "",
        "pretty_name" => "Color 2",
        "values" => []
    ],
    // TODO: 2008 showcuepoints
    "border" => [
        "target" => "2008",
        "type" => "number",
        "default" => "",
        "pretty_name" => "Border",
        "values" => []
    ],
    // TODO: 2008 ap
    // TODO: 2008 allowseekahead
    "maxbufferlength" => [
        "target" => "2011 2012 2013",
        "type" => "number",
        "default" => "",
        "pretty_name" => "Max Buffer Length",
        "values" => []
    ],
    "mbhosted" => [
        "target" => "2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Maybe Hosted",
        "values" => []
    ],
    "nochrome" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "No Chrome",
        "values" => []
    ],
    "nologo" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "No Logo",
        "values" => []
    ],
    // TODO: 2011 2012 2013 playerapiid
    // TODO: 2008 2011 2012 2013 player_id
    // TODO: 2008 plid
    // TODO: 2006_v2 2008 sourceid
    // TODO: 2008 sdetail
    // TODO: 2008 video_pub_id
    // TODO: 2008 data
    // TODO: 2008 datatype
    "loop" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Loop",
        "values" => []
    ],
    "shuffle" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Shuffle",
        "values" => []
    ],
    "index" => [
        "target" => "2011 2012 2013",
        "type" => "number",
        "default" => "",
        "pretty_name" => "Index",
        "values" => []
    ],
    "player_wide" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Wide Player",
        "values" => []
    ],
    // TODO: 2011 2012 2013 playlist
    // TODO: 2012 2013 playlist_module
    "playnext" => [
        "target" => "2006_v2 2008 2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Play Next",
        "values" => []
    ],
    "q" => [
        "target" => "2006_v2 2008 2011 2012 2013",
        "type" => "text",
        "default" => "",
        "pretty_name" => "Query",
        "values" => []
    ],
    "rel" => [
        "target" => "2008 2011 2012 2013",
        "type" => "boolean",
        "default" => "1",
        "pretty_name" => "Show Related Videos",
        "values" => []
    ],
    "egm" => [
        "target" => "2008",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Enhanced Genie Menu",
        "values" => []
    ],
    // TODO: 2008 onscreensearch
    "showsearch" => [
        "target" => "2008",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Show Search",
        "values" => []
    ],
    "seek_stress" => [
        "target" => "2011",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Seek Stress",
        "values" => []
    ],
    "showinfo" => [
        "target" => "2008 2011 2012 2013",
        "type" => "boolean",
        "default" => "1",
        "pretty_name" => "Show Info",
        "values" => []
    ],
    "sn" => [
        "target" => "2006_v2 2008",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Suppress Next",
        "values" => []
    ],
    "shownextbutton" => [
        "target" => "2011 2012",
        "type" => "boolean",
        "default" => "1",
        "pretty_name" => "Show Next Button",
        "values" => []
    ],
    "showinstantreplaybutton" => [
        "target" => "2012",
        "type" => "boolean",
        "default" => "1",
        "pretty_name" => "Show Instant Replay Button",
        "values" => []
    ],
    "showpopout" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => "1",
        "pretty_name" => "Show Pop-out",
        "values" => []
    ],
    // TODO: 2006_v2 2008 2011 2012 2013 sk
    // TODO: 2008 e
    "ss" => [
        "target" => "2008 2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Suppress End-Screen Share",
        "values" => []
    ],
    "record" => [
        "target" => "2005",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Record",
        "values" => []
    ],
    "seekbar_thumbs" => [
        "target" => "2008",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Seekbar Thumbs",
        "values" => []
    ],
    "svfshd" => [
        "target" => "2012",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Stage Video Fullscreen HD",
        "values" => []
    ],
    // TODO: 2006_v2 2008 2011 2012 2013 sw
    "theme" => [
        "target" => "2011 2012 2013",
        "type" => "options",
        "default" => "",
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
        ]
    ],
    "color" => [
        "target" => "2011 2012 2013",
        "type" => "options",
        "default" => "",
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
        ]
    ],
    "modesetbranding" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Prefer YouTube Title Tip",
        "values" => []
    ],
    // TODO: 2008 2011 2012 2013 vq
    // TODO: 2008 dtst
    "stagevideo" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Stage Video",
        "values" => []
    ],
    "sendtmp" => [
        "target" => "2011 2012 2013",
        "type" => "boolean",
        "default" => "",
        "pretty_name" => "Send Segments To Temporary Logs",
        "values" => []
    ]
    // TODO: 2012 2013 content_v
    // TODO: 2013 agcid
    // TODO: 2011 2012 2013 watch_xlb
    // TODO: 2013 iv_load_policy
    // TODO: 2006_v2 nc
    // TODO: 2006_v2 auth_code
];