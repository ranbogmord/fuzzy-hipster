<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define( 'DB_NAME',     'testwp' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8' );


/* MySQL database table prefix. */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
define('AUTH_KEY',         '! K%HYW(b({,Yw}gJ]wr9hXX+>~OAP@(rgYE~1c dB}fJ-fLHSa2|M|VS6g*h!;$');
define('SECURE_AUTH_KEY',  'jBaQi-o|o$y|F<{)cQ +9&Df7H>!ctt nz|wOzZ9=y:M,QQ`B*.yR*]$tfl:o<|O');
define('LOGGED_IN_KEY',    'N$zmfJL,0>2HFN%t]Pd$O201;!vh?$?;4{T|U7Gexr5^mYMm-+)%+lU=QTFu?zxS');
define('NONCE_KEY',        'zW+&N1_J75_g M`s7b2GG3K3-PE_V+,c7Bw06|@Ti([Ew-6>4$n?RPv4>l`_Thb|');
define('AUTH_SALT',        '(9vIzz{AqgtN*6|W9{`@F+(=');
define('SECURE_AUTH_SALT', '< np>V7!#eVl9v_1Ms-l]<5]#atdj=8BK`7du#.jVl{E&OzaRL(A#|Mw};-WUROZ');
define('LOGGED_IN_SALT',   '|EmnR4#cX2LE-l&9j-E;fq*`4{$#b3wtT/|/ YY5u`?&N#!EH?gYPFKw8;TbM0;8');
define('NONCE_SALT',       'sp28Oh>|]KkduuImIGI9?035{@gAc[q>}):XQfI@n8/(sUvh6qm)+:lc;~blx=R:');


/* WordPress Localized Language. */
define( 'WPLANG', 'sv_SE' );


/* Custom WordPress URL. */
define( 'WP_SITEURL',     'http://vps1.capi' );
define( 'WP_HOME',        'http://vps1.capi/wp' );
define( 'WP_CONTENT_URL', 'http://vps1.capi/wp-content' );
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );


/* Multisite. */
define( 'WP_ALLOW_MULTISITE', true );


/* WordPress debug mode for developers. */
define( 'WP_DEBUG',         false );


/* WordPress Cache */
define( 'WP_CACHE', true );


/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );


/* Updates */
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');