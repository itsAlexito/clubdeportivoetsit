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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          '}Sb@p;aY8.(gxg..b#A<YW`zouCmn[OT+=vUGK>FEv3*N|f2DIH$|[qVtgM9#=IC' );
define( 'SECURE_AUTH_KEY',   'S8OJ)o#(R^3>4lIuu}x9>IJjZ@s^.&Wf(+2{/}x[^d~I4^M)>W2KmoUTr}{.Fe2Q' );
define( 'LOGGED_IN_KEY',     '{3lKn-C<sHxGmraCB;/~KgJ.^%w]2>ebu=p|tE57O+r^<TlG9_*bRIHg[$~.8]jd' );
define( 'NONCE_KEY',         '_oJJ<Z(J7wDAqLu>>jV]{RLk!JUalCe3=!D5/%Wz=iO,`X05R3(]{P!G6^xAMM,h' );
define( 'AUTH_SALT',         '5EZ?]YUHjyd%wrwT6XEblB&|lRyNq:Z5v1~o|l3W3waXv?DO4G;dOer&,}d=32Di' );
define( 'SECURE_AUTH_SALT',  '&TwA`<@oLTf `w0$k.lL=oAs[1cBhnt6ibj?J2gOJ`U(tPf8d+c|n4YDZI7.?xNN' );
define( 'LOGGED_IN_SALT',    '}Y<6PAoXuVRGNY#b@rFR$beF i}q<vQy[?hPC1c2{~DV|RyQ!-zMY|G,oHC`d56b' );
define( 'NONCE_SALT',        'c}JrX&:WCJM,CV*JWC2^+EK1B0+GVTjP*/T8u%zFS|nc:DL+cHWMB!MHy#qd|Gye' );
define( 'WP_CACHE_KEY_SALT', 'h|` PK{|J(qmlbb)3_h;LWc-d1 vHh&oD}IVs7FtPvF0{HX5jG8x0cV@WT1DjlSp' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
