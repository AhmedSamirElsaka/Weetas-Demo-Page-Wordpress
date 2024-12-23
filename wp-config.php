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
define( 'AUTH_KEY',          'eM:Z~o^55ifT9^iFKWR9BRnYJnaJAWZv%nz+!@$C93d+d~A1jDE9u&,1DSq:ERi%' );
define( 'SECURE_AUTH_KEY',   '<R_6,e:(zz!bzwYw>t9fZ0s80?O0OHr<($lvUYy_)A]ao-wQg9QbVTqcgR$W-Brc' );
define( 'LOGGED_IN_KEY',     '$nAdR%a`k{Z l8H1s:Wk4k~PxW:Kwvi9@4i1LC`Z^eu[q-0Mo3URVL/&;}q:7?/ ' );
define( 'NONCE_KEY',         'V(NFj*s#1Vn;PZw.`H(@+(X?=k4mGoS5_z*ehs<jtQBG9.Qhwt(R+hD]z@7k<JP`' );
define( 'AUTH_SALT',         'MxQ=#oz75jco HaGtVLOBG;*6%T*Z?csrsThb#(*+dn&?esgo{.1 _S!vDyQE|-3' );
define( 'SECURE_AUTH_SALT',  'C6k )DR5[nxYv`vtI5/.]]aPgUG[*&XxSnb}|$1.PXWZ1zH$<V5/5v~Mt4o|rTBg' );
define( 'LOGGED_IN_SALT',    '*CikK1:{v+=+@G)lVtAn_ty 5Wd5jO1Mt7+i|8RV;_wZQ%J8I1m`Y}8mpl?DW6]B' );
define( 'NONCE_SALT',        'Q_z1zA@%C$]#|:fS[*$>QvVC|>b6U0HhC&k5Z-[=NfcuMeBwvaK.gDFVXUi8F`o#' );
define( 'WP_CACHE_KEY_SALT', '7(r[EPtrFR=xV<7Y/4L69_V}29h(IEj#li>,whHM#K92^J)3{vq5ujOB#P:`:q~I' );


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
