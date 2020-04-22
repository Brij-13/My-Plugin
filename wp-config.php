<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'build-plugin_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dl?L^DojNfL+MS5+8ghzs(B]7cBq}s=8:w@Ixzd~Xm}i$`*Wp`tl7y8yvTkW^b[x' );
define( 'SECURE_AUTH_KEY',  '>IpcK&{MH`)ouzrKTx@)AfH{$VY,klk3YL3ha|T=UE*-Y<> pb}R)ed6} z=mW7k' );
define( 'LOGGED_IN_KEY',    'nYb?s,Dh^l3A)w(z,,RP>mwBY9v7FcQl{vdG3H~nLaUXz.*dmQG%=CM1x@XHfD?J' );
define( 'NONCE_KEY',        '{-h!-0zxIP>N|Fb0E/%Q:ixgqAOcch(!{~1-6K%Rd()HlBT>R8J.`0u+J f&!21h' );
define( 'AUTH_SALT',        'QPcr3]BT[E<AKGwZ?kj=ld}@%.=J}m&e(7B+&<5Jvd|eMX_<8;l|lbpO4WD+/[u#' );
define( 'SECURE_AUTH_SALT', '|UT+WcE;:rWu}[^GKb_*=f@Tx@ZpNIbWncnKGFt*9[h},!+<|*:.$:A2}{BbTw5Y' );
define( 'LOGGED_IN_SALT',   'Dp`d0O/CuBiq5) Wl]iYr54DfD!l~0XvjMnY:~!z:Bj{O1D+>l}wEF|O_~z->WAB' );
define( 'NONCE_SALT',       '0EYNnTPi#.N`=xnu=BeC&ALi8i#)C?TuTVy;;X_fZV`F7[;M#RPmhJKj#,V#aP[H' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
