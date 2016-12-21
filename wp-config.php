<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define('REVISR_WORK_TREE', '/home/joeross/public_html/dev/regionalvet/'); // Added by Revisr
define('REVISR_GIT_PATH', ''); // Added by Revisr
define( 'WP_MEMORY_LIMIT', '256M' );

define( 'WP_MAX_MEMORY_LIMIT', '512M' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'joeross_wprv01');

/** MySQL database username */
define('DB_USER', 'joeross_wprv01');

/** MySQL database password */
define('DB_PASSWORD', '[V5P5B!S65');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kgl179q358g9damulbukrehx6tlzlj8prndo3z7r5n27p58dwvlb4hq455eqhwnd');
define('SECURE_AUTH_KEY',  'dn4tjdczs32lwjcagwe4rfbkgnijx87xudigaco8vocyiilr5n1ydocp3ojuqajg');
define('LOGGED_IN_KEY',    'vzyu2phhcft8zricchyninqyeu4buddejuj3wotbq3v9hn2vosl9ktkkv2gdr4bd');
define('NONCE_KEY',        'mkhza2ohn8woxgnt76rrkma8052mbpxiiixea4rd4ub8zaobck4zhhk2tt75xpsb');
define('AUTH_SALT',        'rxsvisuj9rcgzamubtignpux6gxtgb7l4ygra1apjmiubv95kblcnfhq7xxwlffj');
define('SECURE_AUTH_SALT', 'vjs8ogdmdfr3n4zv11gewt0xjyoviqwrk2m7hgkbxicapsl4gm5s6rd0ln2qrejh');
define('LOGGED_IN_SALT',   'kl4rcdk4rnnkdplgafpw3t9p14srfwkcfhou8jzgql4qhmgd8tt7lvfc0jydwtc3');
define('NONCE_SALT',       '0hxdt50ww0ywwzpo6qmvrrnfc2jaulala9ekm9zd2e7ibwskvimqih3otdrgxxgy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpRV01_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'dev.advertisingbros.com');
define('PATH_CURRENT_SITE', '/regionalvet/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
