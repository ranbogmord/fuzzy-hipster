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
define('AUTH_KEY',         'Ange en unik fras här');
define('SECURE_AUTH_KEY',  'Ange en unik fras här');
define('LOGGED_IN_KEY',    'Ange en unik fras här');
define('NONCE_KEY',        'Ange en unik fras här');
define('AUTH_SALT',        'Ange en unik fras här');
define('SECURE_AUTH_SALT', 'Ange en unik fras här');
define('LOGGED_IN_SALT',   'Ange en unik fras här');
define('NONCE_SALT',       'Ange en unik fras här');


/* WordPress Localized Language. */
define( 'WPLANG', 'sv_SE' );

define('BB_HOST', 'http://' . $_SERVER['HTTP_HOST']);

/* Custom WordPress URL. */
define( 'WP_SITEURL',     BB_HOST . '/wp' );
define( 'WP_HOME',        BB_HOST );
define( 'WP_CONTENT_URL', BB_HOST . '/wp-content' );
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );


/* Multisite. */
define( 'WP_ALLOW_MULTISITE', true );
// define('SUBDOMAIN_INSTALL', true);
// define('DOMAIN_CURRENT_SITE', 'vps1.capi');
// define('PATH_CURRENT_SITE', '/');
// define('SITE_ID_CURRENT_SITE', 1);
// define('BLOG_ID_CURRENT_SITE', 1);


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
define( 'WP_ALLOW_REPAIR', true);


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');