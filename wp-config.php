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
define( 'DB_NAME', 'icote' );

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
define( 'AUTH_KEY',         'MsSI#&[t/j%(OgsOKj+&6Vgz9f!Un;}X=>0}>^q+}#0Js#&ipk:78UJ9?FuGHkc|' );
define( 'SECURE_AUTH_KEY',  '3HJFG!; L!0]u*HM7ucigTv)*!}*QQn9DAn3LEQWFHZ`+d=@AU7B^.kn9tkHFq+X' );
define( 'LOGGED_IN_KEY',    'w}q9ORPo%V95 /L`(?3rM [DR=DdV&fTGL} 3OgD W)S}8tm9Tk=9/~jIn-wg}R[' );
define( 'NONCE_KEY',        'BCjxY+2i`Iwi`f4e@o3mOQg1_(;.ep?[:ge9*/8e][TeRjx|K8u=2yRk4d$GbFWR' );
define( 'AUTH_SALT',        'L1kP5L}d[Pl29w9J(t.*I#y5Ui7&9Eoa8H8b$^?BOlQXgw:-%]!SvN${@ Sr2lD/' );
define( 'SECURE_AUTH_SALT', 'y_GpxA4. e&Q6TPxwCAS!`7=r],vxQG.tNaG|%R.uQw]:7}16LyL:J5wi0r=K[>V' );
define( 'LOGGED_IN_SALT',   'H@?4gy;;0w[0RFBWI,MRF=_&?QzZ.k5/la|L7LZ9;QZ#8OLY*8K:j`zFJA!X5{}I' );
define( 'NONCE_SALT',       'rZsF0Tq*OUs$qTU<WA+pXeL6=`b3]1/m#&`u`O&Swy7D}|E5P,$joZkE473oC@rR' );

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
