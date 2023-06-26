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
define( 'DB_NAME', 'training2' );

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
define( 'AUTH_KEY',         'u ]maWfkdaOOEROCd$K^%}cP#&x9o^q6..@C&QWR_j&z6vP:x8c%Jrr/p6hm|z}E' );
define( 'SECURE_AUTH_KEY',  'U*v{^J;d#jm!,#~%BRyIcw#@)TlHKGL.^Ji9#baWQ$AyDWLQr*U3uyebA`ej%zlC' );
define( 'LOGGED_IN_KEY',    '/HKPS5`.hO6;.ELz/PZ_S*Er#Z}0canpNj]Izs7M-Q[Y*T^$,TLp)kUOJ`I4yI|m' );
define( 'NONCE_KEY',        '?~`i-d%>ZtbA1ddS9e&fI^obn;#(ozc{gxI)oW4u=cXq!b}SN%,UM>vA.k[N*,8M' );
define( 'AUTH_SALT',        '-?DyWh!iV6(J>)FK)f[llZ8p0@UfA_hH%}XL@q$f@11U0^Nd2X[+h7[{|}*6Px6o' );
define( 'SECURE_AUTH_SALT', 'hOHxEbq/s#O1 M~/~%5jP&~2Kc{]}Q%]t4TNx4G#J1<LTN-,c@!4Au3]=y%4z|vs' );
define( 'LOGGED_IN_SALT',   '4#y!l?/TSM[*$bX=%A27o3y+g;o~jcl.-TA,]G!DQ$*_FSb@d^SUukC7i}+WwAXN' );
define( 'NONCE_SALT',       'OJx=,.<!/,VVNl9[3Z=/(Y_29MqfI!cQ+^6usE2Rk%^E$aQEBD13K0aRbkb`h_:c' );

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
