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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'q3>&v|)? v-Dszbr;-&W.oEO+>]NA*DuoCD|mI-LCp:TjaPoL*dN^>U~+yajYQ>/' );
define( 'SECURE_AUTH_KEY',  '<1YSY{U35pS#@qGxcMm45{}m6.eN&LN,Ic5Dx[_4xh+(@Z5z*i``!C38*)DJ}<^,' );
define( 'LOGGED_IN_KEY',    '}&udP1wY&_v7/ZO?QJ^:s}#ZJ1Sm+0n3J#Y 04kXq4^-Ygu_h-*GFvcHf<4vWD+5' );
define( 'NONCE_KEY',        'Jb$qlK@VanNHQ9b|Ve%RW`[|@)Hx;YAU^ZU^}h;#g&t@QIxAu}{i1a8a?lWS4E}H' );
define( 'AUTH_SALT',        'L2#tZXfkdElr]JvVU/z*jJ}E;::[$SW0_JB8-eJ:#?(v`}p$hWb/^[=o6jo9?g)a' );
define( 'SECURE_AUTH_SALT', '2) r}mbutu~(6?[<iq!,s,*4 )_t -]A>_E@-H*98 3cK3_v-c+x^CjIDd{Rj21B' );
define( 'LOGGED_IN_SALT',   'N#i6UwN:2jJ_dsXxMorL;P7Ey}[8?m?$nP#3_sDUIde0WVu(%L<&?i`R>3t71_L7' );
define( 'NONCE_SALT',       'IVf?F$M;mGSKM{[gRv2,CFZ-F PF`Z5tn{8:7T,,hgR1B[ IA`9>6}zG!]fk/?_)' );

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
