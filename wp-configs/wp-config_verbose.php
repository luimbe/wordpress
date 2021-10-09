<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define( 'DB_NAME',     'database_name_here' );
define( 'DB_USER',     'username_here' );
define( 'DB_PASSWORD', 'password_here' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );


/* MySQL database table prefix. */
$table_prefix = 'wpfix_';
define( 'CUSTOM_USER_TABLE',      $table_prefix . 'user1' );
define( 'CUSTOM_USER_META_TABLE', $table_prefix . 'usermeta1' );


/* Authentication Unique Keys and Salts. YOU MUST CHANGE THESE */
define('AUTH_KEY',         'pr5qzQOix5q0|-V,U`uKe+*6O`SnM*bwz[0xBH:YfwuS,e(?HH=W~Bj.v-~`V~cq');
define('SECURE_AUTH_KEY',  '[/OvYk-_rx*JdUW^/7dIdvJ0-`y:e8k[LeY*!G$E)@_@A,~t481sPWMukCgTi%=W');
define('LOGGED_IN_KEY',    '#1O|+)o%I7C~@ <.qyKO6mr<BZ;i5FT24)|*{QbIn&Cw%-Fk:Pi+|-gtih=3+P`ixe.vcrf%1D5-RY7lYgQ=Z1!tml');
define('AUTH_SALT',        'MP]rU[8M+XjEd~kHI2J73&Fgi#X|Z+PEfO=FY6k8I`~;IiDw_w|O-tMiH=jg)VIA');
define('SECURE_AUTH_SALT', 'IR;@Z.T^bY|C#=).->}Tg6RoSy0/FOsx`x;`0&Jhc~Lj{p#&E-|;#O#?e|+fSO6]');
define('LOGGED_IN_SALT',   '|.{:7U>)bWWCA1UV`Q;=N_f1TrE>&s|:a,/X}9*E!D6x^Nm6xyk`LR=fT].Is+p1');
define('NONCE_SALT',       '9K;eN$^#c3D<n-s,Rw+|0g= R=6^|,EDo9_q[+?&RZ;om!y%3Dw~A?yz/-v@!}?;');


/* SSL */
define( 'FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_ADMIN', true );


/* Specify maximum number of Revisions. */
define( 'WP_POST_REVISIONS', '63' );
/* Media Trash. */
define( 'MEDIA_TRASH', true );
/* Trash Days. */
define( 'EMPTY_TRASH_DAYS', '120' );


/* Multisite. */
define( 'WP_ALLOW_MULTISITE', false );


/* WordPress debug mode for developers. */
define( 'WP_DEBUG',         true );
define( 'WP_DEBUG_LOG',     false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG',     false );
define( 'SAVEQUERIES',      false );


/* PHP Memory */
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );


/* WordPress Cache */
define( 'WP_CACHE', true );


/* Compression */
define( 'COMPRESS_CSS',        false );
define( 'COMPRESS_SCRIPTS',    false );
define( 'CONCATENATE_SCRIPTS', false );
define( 'ENFORCE_GZIP',        true );


/* CRON */
define( 'DISABLE_WP_CRON',      'false' );


/* Updates */
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');