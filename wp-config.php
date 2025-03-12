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
define( 'AUTH_KEY',          '85ej@*>peSy=B-;9Q&DjGU@l+Zd%&XT>m1L@%)(~tRk{-6p.t3vYjiS}k&5S#Bd5' );
define( 'SECURE_AUTH_KEY',   'neD1;ZNN%n7`Exq[8]7|,CDNV5V+ZzhIC(YY@Ns#PQG5=XN9*^Rs-PoI|$;B1gtm' );
define( 'LOGGED_IN_KEY',     'GD(8b>q[ZDuk6Hg;{d<]3MUo+9K?H|Y)[IZW@l{| ldR3gA0.XP8 h]SRU9ypUQW' );
define( 'NONCE_KEY',         'TMoaPm*GzX2A)d=rQ}grZNUZc%DWJ.y@t*])FV*hEE@Ah7`>Eh+ZhvlvIf>yvCx=' );
define( 'AUTH_SALT',         '={6uM2GH2&|e$;.@SpJ.@LXZ=!( xtjgclZO(17c#OVp+Q`O[w+nVG4?{H^^/PsT' );
define( 'SECURE_AUTH_SALT',  'j^SXO8W.bnqF~K7@!pPA8CIt^nqO8[[q|UW:#A?t @9@2+K$aAz$*<HKc(_J0t>$' );
define( 'LOGGED_IN_SALT',    '`kR=XqtY.Kk&:CG^l&-$?&[hS;Kr O$U.=1;ql4f*fHG9>E9~o-NxMEu($pxxF*8' );
define( 'NONCE_SALT',        '0l}kBuwj-_UkUCd*L#TJxjL<<r)&i28TYh+[@$R:v$<h<5ZVD2,Ly4nl}R8:P,B2' );
define( 'WP_CACHE_KEY_SALT', 'v-|R@20:X)9r0{*X5%a6Pj<i>hf-JK^14wa1cXuH(ISAzL*z.c:1PaPdYa*y*^wo' );


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
