<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u240255671_EwggO' );

/** Database username */
define( 'DB_USER', 'u240255671_q4lP4' );

/** Database password */
define( 'DB_PASSWORD', 'qrt2kU9uV3' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'CPPLzdDi@H,sT]~S+9-Ie)-n60z.5zn)^z%)c`TO[^F~)N1La6w0V&LTISpx !__' );
define( 'SECURE_AUTH_KEY',   '9Hx{uE*>*Aw+PSLJS=:Z#A$aGqfjFsfT/A2]bmi!KjS]ylg:pqg+KGkSOHqLBx%w' );
define( 'LOGGED_IN_KEY',     'Cnq8i]?0Qt+gB/VO%BQxAzmd2e%|h_rfmvk@ra@SP<p;k1x_#pg?DJQ/SB}8D]_}' );
define( 'NONCE_KEY',         '@X4UJZ>.-56QJ@,HOS*9+k?AH@CFAm:2~1noe3Od=Pq;Gg*4Z-0OJ$KrUAbgn#0#' );
define( 'AUTH_SALT',         '3KTc0pY>3RF*87C+[B#9L!]-P#TJ,mC}.nml?!+$/,sO5v]+f6<E|9 rv%T*aH!3' );
define( 'SECURE_AUTH_SALT',  'S$(zQn]{A{US*|5{%zF<+z~{{`kl&y(Jj}{<Tx8jyF}n]CgG:kJ}m%8vHDjK2NNG' );
define( 'LOGGED_IN_SALT',    'Q2u=`0S+<OeO?APM)hW#To;lPRBBja$P`c#z(S:R>CFA||#o^9ArX@XiL{h+8Nf5' );
define( 'NONCE_SALT',        'QFh2OCk-pTz 0`nC)yV~{@%!5A0#:Wx1<n&>TpJ5ZNsf7i$b85zhvWv2of22vO(`' );
define( 'WP_CACHE_KEY_SALT', 'iFBt(EE%+B~S/NN0AlFVPkJ~Rw}h6TZD)z<cTLYB):`RN?kdrB_7&|3#,kk7+wm^' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '338b355303e2cf3a921fee9bed85182b' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
