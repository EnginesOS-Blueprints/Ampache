#<?php exit(); ?>##
;###################
; General Config   #
;###################

; This value is used to detect quickly
; if this config file is up to date
; this is compared against a value hard-coded
; into the init script
config_version = 23

;###################
; Path Vars        #
;###################

; The public http host of your server.
; If not set, retrieved automatically from client request.
; This setting is required for WebSocket server
; DEFAULT: ""
;http_host = "localhost"

; The public path to your ampache install
; Do not put a trailing / on this path
; For example if your site is located at http://localhost
; than you do not need to enter anything for the web_path
; if it is located at http://localhost/music you need to
; set web_path to /music
; DEFAULT: ""
web_path = ""

; The local http url of your server.
; If not set, retrieved automatically from server information.
; DEFAULT: ""
;local_web_path = "http://localhost/ampache"

;##############################
; Session and Login Variables #
;##############################

; Hostname of your database
; DEFAULT: localhost
database_hostname = "mysql.engines.internal"

; Port to use when connecting to your database
; DEFAULT: none
database_port = ""

; Name of your ampache database
; DEFAULT: ampache
database_name = "ampache"

; Username for your ampache database
; DEFAULT: ""
database_username = "ampache"

; Password for your ampache database, this can not be blank
; this is a 'forced' security precaution, the default value
; will not work
; DEFAULT: ""
database_password = "ampache"

; Cryptographic secret
; This MUST BE changed with your own secret key. Ampache-specific, just pick any random string you want.
secret_key = "abcdefghijklmnoprqstuvwyz0123456"

; Length that a session will last expressed in seconds. Default is
; one hour.
; DEFAULT: 3600
session_length = 3600

; Length that the session for a single streaming instance will last
; the default is two hours. With some clients, and long songs this can
; cause playback to stop, increase this value if you experience that
; DEFAULT: 7200
stream_length = 7200

; This length defines how long a 'remember me' session and cookie will
; last, the default is 86400, same as length. It is up to the administrator
; of the box to increase this, for reference 86400 = 1 day
; 604800 = 1 week and 2419200 = 1 month
; DEFAULT: 86400
remember_length = 86400

; Name of the Session/Cookie that will sent to the browser
; default should be fine
; DEFAULT: ampache
session_name = ampache

; Lifetime of the Cookie, 0 == Forever (until browser close) , otherwise in terms of seconds
; If you want cookies to last past a browser close set this to a value in seconds.
; DEFAULT: 0
session_cookielife = 0

; Is the cookie a "secure" cookie? This should only be set to 1 (true) if you are
; running a secure site (HTTPS).
; DEFAULT: 0
session_cookiesecure       = 0

; Auth Methods
; This defines which auth methods Auth will attempt to use and in which order.
; If auto_create isn't enabled the user must exist locally.
; DEFAULT: mysql
; VALUES: mysql,ldap,http,pam,external,openid
auth_methods = "mysql"

; External authentication
; This sets the helper used for external authentication.  It should conform to
; the interface used by mod_authnz_external
; DEFAULT: none
;external_authenticator = "/usr/sbin/pwauth"

; Automatic local password updating
; Determines whether successful authentication against an external source
; will result in an update to the password stored in the database.
; A locally stored password is needed for API access.
; DEFAULT: false
;auth_password_save = "false"

; Logout redirection target
; Defaults to our own login.php, but we can override it here if, for instance,
; we want to redirect to an SSO provider instead.
; logout_redirect = "http://sso.example.com/logout"

;#####################
;  Program Settings  #
;#####################

; File Pattern
; This defines which file types Ampache will attempt to catalog
; You can specify any file extension you want in here separating them
; with a |
; DEFAULT: mp3|mpc|m4p|m4a|aac|ogg|oga|wav|aif|aiff|rm|wma|asf|flac|opus|spx|ra|ape|shn|wv
catalog_file_pattern = "mp3|mpc|m4p|m4a|aac|ogg|oga|wav|aif|aiff|rm|wma|asf|flac|opus|spx|ra|ape|shn|wv"

; Video Pattern
; This defines which video file types Ampache will attempt to catalog
; You can specify any file extension you want in here seperating them with
; a | but ampache may not be able to parse them
; DEAFULT: avi|mpg|mpeg|flv|m4v|mp4|webm|mkv|wmv|ogv|mov|divx|m2ts
catalog_video_pattern = "avi|mpg|mpeg|flv|m4v|mp4|webm|mkv|wmv|ogv|mov|divx|m2ts"

; Playlist Pattern
; This defines which playlist types Ampache will attempt to catalog
; You can specify any file extension you want in here seperating them with
; a | but ampache may not be able to parse them
; DEFAULT: m3u|pls|asx|xspf
catalog_playlist_pattern = "m3u|pls|asx|xspf"

; Prefix Pattern
; This defines which prefix Ampache will ignore when importing tags from
; your music. You may add any prefix you want seperating them with a |
; DEFAULT: The|An|A|Die|Das|Ein|Eine|Les|Le|La
catalog_prefix_pattern = "The|An|A|Die|Das|Ein|Eine|Les|Le|La"

; Catalog disable
; This defines if catalog can be disabled without removing database entries
; WARNING: this increase sensibly sql requests and slow down Ampache a lot
; DEFAULT: false
;catalog_disable = "false"

; Use Access List
; Toggle this on if you want ampache to pay attention to the access list
; and only allow streaming/downloading/api-rpc from known hosts api-rpc
; will not work without this on.
; NOTE: Default Behavior is DENY FROM ALL
; DEFAULT: true
access_control	= "true"

; Require Session
; If this is set to true ampache will make sure that the URL passed when
; attempting to retrieve a song contains a valid Session ID This prevents
; others from guessing URL's. This setting is ignored if you have use_auth
; disabled.
; DEFAULT: true
require_session = "true"

; Require LocalNet Session
; If this is set to true then ampache will require that a valid session
; is passed even on hosts defined in the Local Network ACL. This setting
; has no effect if access_control is not enabled
; DEFAULT: true
require_localnet_session = "true"

; Multiple Logins
; Added by Vlet 07/25/07
; When this setting is enabled a user may only be logged in from a single
; IP address at any one time, this is to prevent sharing of accounts
; DEFAULT: false
;prevent_multiple_logins = "false"

; Downsample Remote
; If this is set to true and access control is on any users who are not
; coming from a defined 'network' ACL will be automatically downsampled
; regardless of their preferences. Requires access_control to be enabled
; DEFAULT: false
;downsample_remote = "false"

; Track User IPs
; If this is enabled Ampache will log the IP of every completed login
; it will store user,ip,time at one row per login. The results are
; displayed in Admin --> Users
; DEFAULT: false
;track_user_ip = "false"

; User IP Cardinality
; This defines how many days worth of IP history Ampache will track
; As it is one row per login on high volume sites you will want to
; clear it every now and then.
; DEFAULT: 42 days
;user_ip_cardinality = "42"

; Allow Zip Download
; This setting allows/disallows using zlib to zip up an entire
; playlist/album for download. Even if this is turned on you will
; still need to enabled downloading for the specific user you
; want to be able to use this function
; DEFAULT: false
;allow_zip_download = "false"

Allow Zip Types
; This setting allows/disallows zip download of specific object types
; If empty, all supported object types can be zipped.
; Otherwise, only the given object list can be zipped.
; POSSIBLE VALUES: artist, album, playlist, search, tmp_playlist
; DEFAULT: none
;allow_zip_types = "album"

; File Zip Comment
; This is an optional configuration option that adds a comment
; to your zip files, this only applies if you've got allow_zip_downloads
; DEFAULT: Ampache - Zip Batch Download
;file_zip_comment = "Ampache - Zip Batch Download"

; Waveform
; This settings tells Ampache to attempt to generate a waveform
; for each song. It requires transcode and encode_args_wav settings.
; You must also set tmp_dir_path in order for this to work
; DEFAULT: false
;waveform = "false"

; Waveform color
; The waveform color.
; DEFAULT: #FF0000
;waveform_color = "#FF0000"

; Temporary Directory Path
; If Waveform is enabled this must be set to tell
; Ampache which directory to save the temporary file to. Do not put a
; trailing slash or this will not work.
; DEFAULT: false
;tmp_dir_path = "false"

; This setting throttles a persons downloading to the specified
; bytes per second. This is not a 100% guaranteed function, and
; you should really use a server based rate limiter if you want
; to do this correctly.
; DEFAULT: off
; VALUES: any whole number (in bytes per second)
;throttle_download = 10

; This determines the tag order for all cataloged
; music. If none of the listed tags are found then
; ampache will randomly use whatever was found.
; POSSIBLE VALUES: ape asf avi id3v1 id3v2 lyrics3 matroska mpeg quicktime riff
;     vorbiscomment
; DEFAULT: id3v2 id3v1 vorbiscomment quicktime matroska ape asf avi mpeg riff
getid3_tag_order = "id3v2,id3v1,vorbiscomment,quicktime,matroska,ape,asf,avi,mpeg,riff"

; Determines whether we try to autodetect the encoding for id3v2 tags.
; May break valid tags.
; DEFAULT: false
;getid3_detect_id3v2_encoding = "false"

; This determines if file metadata should be write back to files
; as id3 metadata when updated.
; DEFAULT: false
;write_id3 = "false"

; This determines if album art should be write back to files
; as id3 metadata when updated.
; DEFAULT: false
;write_id3_art = "false"

; This determines the order in which metadata sources are used (and in the
; case of plugins, checked)
; POSSIBLE VALUES (builtins): filename and getID3
; POSSIBLE VALUES (plugins): MusicBrainz,TheAudioDb, plus any others you've installed.
; DEFAULT: getID3 filename
metadata_order = "getID3,filename"

; This determines the order in which metadata sources are used (and in the
; case of plugins, checked) for video files
; POSSIBLE VALUES (builtins): filename and getID3
; POSSIBLE VALUES (plugins): Tvdb,Tmdb,Omdb, plus any others you've installed.
; DEFAULT: filename getID3
metadata_order_video = "filename,getID3"

; Some taggers use delimiters other than \0 for fields
; This list specifies possible delimiters additional to \0
; This setting takes a regex pattern.
; DEFAULT: // / \ | , ;
additional_genre_delimiters = "[/]{2}|[/|\\\\|\|,|;]"

; This determines if a preview image should be retrieved from video files
; It requires encode_get_image transcode settings.
; DEFAULT: false
;generate_video_preview = "true"

; Un comment if don't want ampache to follow symlinks
; DEFAULT: false
;no_symlinks	= "false"

; Use auth?
; If this is set to "Yes" ampache will require a valid
; Username and password. If this is set to false then ampache
; will not ask you for a username and password. false is only
; recommended for internal only instances
; DEFAULT true
use_auth	= "true"

; Default Auth Level
; If use_auth is set to false then this option is used
; to determine the permission level of the 'default' users
; default is administrator. This setting only takes affect
; if use_auth is false
; POSSIBLE VALUES: user, admin, manager, guest
; DEFAULT: guest
default_auth_level = "guest"

; 5 Star Ratings
; This allows ratings for almost any object in ampache
; POSSIBLE VALUES: false true
; DEFAULT: true
ratings = "true"

; User flags/favorites
; This allows user flags for almost any object in ampache as favorite
; POSSIBLE VALUES: false true
; DEFAULT: true
userflags = "true"

; Direct play
; This allows user to play directly a song or album
; POSSIBLE VALUES: false true
; DEFAULT: true
directplay = "true"

; Sociable
; This turns on / off all of the "social" features of ampache
; default is on, but if you don't care and just want music
; turn this off to disable all social features.
; DEFAULT: true
sociable = "true"

; Notify
; This turns on / off all Ampache notifications
; DEFAULT: true
notify = "true"

; License
; This turns on / off all licensing features on Ampache
; DEFAULT: false
;licensing = "false"

; This options will turn on/off Demo Mode
; If Demo mode is on you can not play songs or update your catalog
; in other words.. leave this commented out
; DEFAULT: false
;demo_mode = "false"

; Caching
; This turns the caching mechanisms on or off, due to a large number of
; problems with people with very large catalogs and low memory settings
; this is off by default as it does significantly increase the memory
; requirments on larger catalogs. If you have the memory this can create
; a 2-3x speed improvement.
; DEFAULT: false
;memory_cache = false

; Memory Limit
; This defines the "Min" memory limit for PHP if your php.ini
; has a lower value set Ampache will set it up to this. If you
; set it below 16MB getid3() will not work!
; DEFAULT: 32
;memory_limit = 32

; Album Art Preferred Filename
; Specify a filename to look for if you always give the same filename
; i.e. "folder.jpg" Ampache currently only supports jpg/gif and png
; Especially useful if you have a front and a back image in a folder
; comment out if ampache should search for any jpg,gif or png
; DEFAULT: folder.jpg
;album_art_preferred_filename = "folder.jpg"

; Maximal upload size
; Specify the maximal allowed upload size for images, in bytes.
; DEFAULT: 102400
;max_upload_size = 102400

; Resize Images * Requires PHP-GD *
; Set this to true if you want Ampache to resize the Album
; art on the fly, this increases load time and CPU usage
; and also requires the PHP-GD library. This is very useful
; If you have high-quality album art and a small upload cap
; DEFAULT: false
;resize_images = "false"

; Statistical Graphs * Requires PHP-GD *
; Set this to true if you want Ampache to generate statistical
; graphs on usages / users.
; DEFAULT: false
;statistical_graphs = "false"

; Art Gather Order
; Simply arrange the following in the order you would like
; ampache to search. If you want to disable one of the search
; methods simply leave it out. DB should be left as the first
; method unless you want it to overwrite what's already in the
; database
; POSSIBLE VALUES (builtins): db tags folder lastfm musicbrainz google
; POSSIBLE VALUES (plugins): amazon,TheAudioDb,Tmdb,Omdb,Flickr
; DEFAULT: db,tags,folder,musicbrainz,lastfm,google
art_order = "db,tags,folder,musicbrainz,lastfm,google"

; Recommendations
; Set this to true to enable display of similar artists or albums
; while browsing. Requires Last.FM.
; DEFAULT: false
;show_similar = "false"

; Concerts
; Set this to true to enable display of artist concerts
; Requires Last.FM.
; DEFAULT: false
;show_concerts = "false"

; Last.FM API Key
; Set this to your Last.FM api key to actually use Last.FM for
; recommendations and metadata.
lastfm_api_key = "d5df942424c71b754e54ce1832505ae2"

; Wanted
; Set this to true to enable display missing albums and the
; possibility for users to mark it as wanted.
; DEFAULT: false
wanted = "true"

; Wanted types
; Set the allowed types of wanted releases (album,compilation,single,ep,live,remix,promotion,official)
; DEFAULT: album,official
wanted_types = "album,official"

; Wanted Auto Accept
; Mark wanted requests as accepted by default (no content manager agreement required)
; DEFAULT: false
;wanted_auto_accept = "false"

; EchoNest API key
; EchoNest provides several music services. Currently used for missing song 30 seconds preview.
;echonest_api_key = ""

; Broadcasts
; Allow users to broadcast music.
; This feature requires advanced server configuration, please take a look on the wiki for more information.
; DEFAULT: false
;broadcast = "false"

; Web Socket address
; Declare the web socket server address
; DEFAULT: determined automatically
;websocket_address = "ws://localhost:8100"

; Debug
; If this is enabled Ampache will write debugging information to the log file
; DEFAULT: false
;debug = "false"

; Debug Level
; This should always be set in conjunction with the
; debug option, it defines how prolific you want the
; debugging in ampache to be. values are 1-5.
; 1 == Errors only
; 2 == Error + Failures (login attempts etc.)
; 3 == ??
; 4 == ?? (Profit!)
; 5 == Information (cataloging progress etc.)
; DEFAULT: 5
debug_level = 5

; Path to Log File
; This defines where you want ampache to log events to
; this will only happen if debug is turned on. Do not
; include trailing slash. You will need to make sure that
; the specified directory exists and your HTTP server has
; write access.
; DEFAULT: NULL
;log_path = "/var/log/ampache"

; Log filename pattern
; This defines where the log file name pattern.
; %name.%Y%m%d.log will create a different log file every day.
; DEFAULT: %name.%Y%m%d.log
log_filename = "%name.%Y%m%d.log"

; Charset of generated HTML pages
; Default of UTF-8 should work for most people
; DEFAULT: UTF-8
site_charset = "UTF-8"

; Locale Charset
; Local charset (mainly for file operations) if different
; from site_charset.
; This is disabled by default, enable only if needed
; (for Windows please set lc_charset to ISO8859-1)
; DEFAULT: ISO8859-1
;lc_charset = "ISO8859-1"

; Refresh Limit
; This defines the default refresh limit in seconds for
; pages with dynamic content, such as now playing
; DEFAULT: 60
; Possible Values: Int > 5
refresh_limit = "60"

;#########################################################
; Custom actions (optional)                              #
;#########################################################

; Your custom play action title
;custom_play_action_title_0 = ""
; Your custom play action icon name (stored as /images/icon_[your_image].png)
;custom_play_action_icon_0 = ""
; Your custom action script, where:
;   - %f: the media file path
;   - %c: the excepted codec target (mp3, ogg, ...)
;   - %a: the artist name
;   - %A: the album name
;   - %t: the song title
;custom_play_action_run_0 = ""

; Example for Karaoke playing
;custom_play_action_title_0 = "Karaoke"
;custom_play_action_icon_0 = "microphone"
;custom_play_action_run_0 = "sox \"%f\" -p oops | ffmpeg -i pipe:0 -f %c pipe:1"

;#########################################################
; LDAP login info (optional)                             #
;#########################################################

; LDAP filter string to use (required)
; For OpenLDAP use "uid"
; For Microsoft Active Directory (MAD) use "sAMAccountName"
; DEFAULT: null
; ldap_filter = "sAMAccountName"

; LDAP objectclass (required)
; OpanLDAP objectclass = "*"
; MAD objectclass = "organizationalPerson"
; DEFAULT null
;ldap_objectclass = "organizationalPerson"

; Initial credentials to bind with for searching (optional)
; DEFAULT: null
;ldap_username = ""
;ldap_password = ""

; Require that the user is in a specific group (optional)
; DEFAULT: null
;ldap_require_group = "cn=yourgroup,ou=yourorg,dc=yoursubdomain,dc=yourdomain,dc=yourtld"

; This is the search dn used to find users (required)
; DEFAULT: null
;ldap_search_dn = "ou=People,dc=yoursubdomain,dc=yourdomain,dc=yourtld"

; This is the address of your ldap server (required)
; DEFAULT: null
;ldap_url = ""

; Attributes where additional user information is stored (optional)
; OpenLDAP ldap_name_field = "cn"
; MAD ldap_name_field = "displayname"
; DEFAULT: null
;ldap_email_field = "mail"
;ldap_name_field  = "cn"

;#########################################################
; OpenID login info (optional)                           #
;#########################################################

; Requires specific OpenID Provider Authentication Policy
; DEFAULT: null
; VALUES: PAPE_AUTH_MULTI_FACTOR_PHYSICAL,PAPE_AUTH_MULTI_FACTOR,PAPE_AUTH_PHISHING_RESISTANT
;openid_required_pape = ""

;#########################################################
; Public Registration settings, defaults to disabled     #
;#########################################################

; This setting will silently create an ampache account
; for anyone who can login using ldap (or any other login
; extension). The default is to create new users as guests
; see auto_user config option if you would like to change this
; DEFAULT: false
;auto_create = "false"

; This setting turns on/off public registration. It is
; recommended you leave this off, as it will allow anyone to
; sign up for an account on your server.
; REMEMBER: don't forget to set the mail from address further down in the config.
; DEFAULT: false
;allow_public_registration = "false"

; Require Captcha Text on Image confirmation
; Turning this on requires the user to correctly
; type in the letters in the image created by Captcha
; Default is off because its very hard to detect if it failed
; to draw, or they failed to enter it.
; DEFAULT: false