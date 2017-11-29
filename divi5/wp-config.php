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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'punalava_wp3');

/** MySQL database username */
define('DB_USER', 'punalava_wp3');

/** MySQL database password */
define('DB_PASSWORD', 'J#UbyB4@uF[iWCar(f^53^@0');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Y2Vpnzk1gznnAoUcyrATEEAp1gm2HqIJAHogFd3iUldbQF5ECvWRy1CJ0YTTiXGG');
define('SECURE_AUTH_KEY',  'je2Ny89rrfeXY45sZDi1NQUeVmNzQt3OJe7KDhEp97jOWl3N1z1tJJcJTvMOKLVG');
define('LOGGED_IN_KEY',    'mNhi3Og1EV73JEXOSxa4BNyutd2CC2vinJJNnKkWgljmVLBPhgECTkSjDaDEfhds');
define('NONCE_KEY',        'WUgvSEMDKyGdFMRo8G27Ki8tHPHMy74DXCGVZr1PkLCxvizcOq4lEhhigUQ7jIh2');
define('AUTH_SALT',        'jePTHAxwqkf3fuxxLaBT81aTqyji49Pwkye86E6dD6WzjJFGXSSfXsZLWhgXOy69');
define('SECURE_AUTH_SALT', '6SmZdND0txLJSBgE8NkqdzOVk7NmPY2u5pYI7tB3E3pnHfhsG4uCzWy9x4xteNE6');
define('LOGGED_IN_SALT',   'PZLN2xSYmyxl6PXPQbOcpHa8S5exNYWEUnpgt5aAZuf5xBcTqCUBfywM5TdUTdCi');
define('NONCE_SALT',       'x0drxquN1b3sF15GBIwIMDCKw8XLRinpyU2UZFum7GBfeRpEA4j7zGZx70gagjrd');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
