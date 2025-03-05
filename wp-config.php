<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ceres_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '4t<Xtt<0$ZYa@5ssO,`e5(.;f2$7~4L[{IT2+:Bnz:&{[80NXL*G<ZRGp2qUg#M8' );
define( 'SECURE_AUTH_KEY',  'i5|*}^I%/vw1rPR6>`_$:7=;^iv_7mnFou84f2=YCG-w8(|o|m&fZ[JNB&fwf,_&' );
define( 'LOGGED_IN_KEY',    'SFU5c;G*sCaCsw8{Z_920}~71]_aalT t~#[|U_K(%l$Rd^&&9N%F&)/Y! D^(T<' );
define( 'NONCE_KEY',        '1dp{_XY+pyUh@y(J2ZL0i`76C0^qo$E$GJ@v8/=}U00q62><p6Vq4V&r F-S7k#$' );
define( 'AUTH_SALT',        '~SdyHEwczG5gW~<iF>tWFBnF/rA$lplpmEN*[9txy5v0~N!m*$v6?.sC1x$_x_l8' );
define( 'SECURE_AUTH_SALT', '8h0A~+H=Ch#{E8g_1Y)88<I#o_EqF*yh^@#%9#v25S.[p2 *b5P$: nQGUwnhOPk' );
define( 'LOGGED_IN_SALT',   '2tPc~%YMdKlNkn&^.N&@M}Z.6,|AnSKSu?]D9L1f-d8]E9c7SX]XPj%KO_M8szuQ' );
define( 'NONCE_SALT',       'SYBF/ef|Y`hj|$)d):,V3bF[MUYs-/D~xT@^?Lp`bKF&9Io|l%GSy$>]X(8G-G~U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
