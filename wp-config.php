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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mehmoodpro' );

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
define( 'AUTH_KEY',         ')(h*@G7W=MKRfd8m-&{MBl}4xVLjBXL5YDJh[Cq<V_2u;Pk]v|E|vZqVf7XJ(e4}' );
define( 'SECURE_AUTH_KEY',  '#Y$xTOf/j-wh|[eDS`Mj|y0@MXUJTm5~O<GZT+9dYzNKcK8YyojF-bay^pFFn2D+' );
define( 'LOGGED_IN_KEY',    '~*LzJ%HhG6j!.SZ|1UvUYf/1:c4A7Pc KQ}&r>g-A<qlP2)!3-:%wc(H,<=<zv|C' );
define( 'NONCE_KEY',        '#^%5VE(7a;R!Tvj+acXD~4_1.w,q|]|,$/CR*,hcCe|jA t6;O-H{a0LAj=?`!|6' );
define( 'AUTH_SALT',        'J?W1JL1mq43jQTn=>/MZx455fsUWuKd9bnW}zp7::6S/Buo{V?/G)D=1wfris0W6' );
define( 'SECURE_AUTH_SALT', '0Jk%x&GLD+3}6B/C ssB@:U#TIDp*l8A+5Z`Wb(M[E~XF[bm/1+=2fa`p~>$JA|R' );
define( 'LOGGED_IN_SALT',   'OTK!/%!(<g_Jx44PJF8~l7qxAre5a EK1O2qIOZV>WI;o~}c}}~27F;#ba6/YMAG' );
define( 'NONCE_SALT',       'OJ_NKv`fMe@&BCa_e/ wPihbj<atqDTD0{b9g7G WSFn>lp#b.sr#D=k]Qp+UJEb' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
