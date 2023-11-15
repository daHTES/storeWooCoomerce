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
define( 'DB_NAME', 'woocoomerce' );

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
define( 'AUTH_KEY',         '5cxsj|Tz{g)wXa6u)|lmHke_t-l0&ih[PkT&k>P-*dV1Vhz2Uc:%{f-z`4n-+8F{' );
define( 'SECURE_AUTH_KEY',  'N; lt|;Zg~,-eM$XOi(*S<~H4T0K.^iMRhKySZA`Itf1<C4j`nP!V>EF:q[s>f5o' );
define( 'LOGGED_IN_KEY',    'f>`Bs%xJA-HBl33kr]jp|sVSl]ym /Zq$eCp#a*|;js6T.*(vaE<_;SB2E,i[*VF' );
define( 'NONCE_KEY',        'GmR*]E1rdJrauQQ%N1!ZM}USz*y)!fbpgtg$+U2/:E7( Qa[;lUj>+NQW+|U$_ir' );
define( 'AUTH_SALT',        'v5f+;v1C>sDch7?84I^L4NI^E!Eh?q}s]H@et76sn=:`-0y~W!QyUJoTY_*hn(2i' );
define( 'SECURE_AUTH_SALT', '0klIVdG~,Vog:#%1qpp6^feo~O_pX.%;Bu{LZ8O{Et{>kCUQ`>tfNc?<Q@+yK@y4' );
define( 'LOGGED_IN_SALT',   ' Hexr^Tj@`El@}_&t9}3f5^zD b}Lgx3PYhG)./*1=p$G 8#g;=.Uw+jUa1w^i-|' );
define( 'NONCE_SALT',       'Uhe)1)^yboaNO)G2%`^r1M-uG]<x5{IMcvGu#3fONeNm{Xok]>T3e>9%g=hr78.=' );

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
