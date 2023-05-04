<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mindset' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X/Hg1b0|~O$d9FJ8]4n$n{8c]dnRBS[XTTq,b4x:WYqk/MA UHkr@+_Tq/xoL1t]');
define('SECURE_AUTH_KEY',  '.PY?-eLM8R3,qPaIYQ=+LF|DT][g]TFvC0 C?S8/6|0B|r4R?GV%%<|FsV~,l/k-');
define('LOGGED_IN_KEY',    '[-+AGSz@.3a/&P&-I>xbo$M8*je.tK3x!6KHY8wWg@|g+-;)$q6X.[uCI_>Q^{$s');
define('NONCE_KEY',        'aJ@l,aq/_4UG.+$EuOn<m&K/I8 ;S$Hvxqh)+$u}E{ktz6dw>$DWiy{wK/REfL1_');
define('AUTH_SALT',        'KVWNg{K+fo =@f#canC+u</3yMenqTNjWK%:P1;|Al+]dOWCSn-M+cSEV{E1V}gW');
define('SECURE_AUTH_SALT', 'W4y^Ij)1&/{(d&@qlI~8W-[^~[fc-i$t:*CZu^Qw]@Z?}V1|9S9*(1Y[+-|%]`}^');
define('LOGGED_IN_SALT',   'dp,9[Doqyl?*x{e%c<OyoKFEX!t_+&zd^Oqa9,i9Boy+YN@@Ke7!kLWd+@c-^s@x');
define('NONCE_SALT',       'u?,eb[~8_<YP78/<BMnq?R1k6[z|F5G-GXg|X/01Np4a4W,lV+BA^w+*z<d#PD|G');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
