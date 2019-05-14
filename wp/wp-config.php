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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         '5}D}~D&=Cn|xI}1bXeP2gDD&2RWDM3?}V|y;LrkwW6a!(3AoCM^Pf|M$nv)?=!Hu' );
define( 'SECURE_AUTH_KEY',  'Mx&OV^F~?<2l[:lE|/$RR=fdb6NJZ550lp66za&}W#v|LKf6Wbuj]Fs isAO4up#' );
define( 'LOGGED_IN_KEY',    't yz,s%Gs:N=}r=Ts5yJ9Wyf}],OpN[~wF&xY?2_nnyH3Aa#k(qHbN_7!Jk*<o4{' );
define( 'NONCE_KEY',        'i<8f!@K}*}7$=wkC48b>-O`u,Y+:?MI9fWg&0cP%~Fw1!UI3@HLDNk,gjD]Z$,b9' );
define( 'AUTH_SALT',        'Lktait2z)C>s]oBV<h);}c%1QiU|JM<HJ2C.RmYj` @atbu9Gkwk&6X?zmG2[<H@' );
define( 'SECURE_AUTH_SALT', 'qZJn+Cjx!L0}^w;oJRzxFq%eb!uSqZB_R#6X*AkJyUQ@:e:wjSz:>qAum*0/AJ/S' );
define( 'LOGGED_IN_SALT',   'Ykvp$8qH9&@F~/No(x{{7{[_3$T24!rDCi`G-Lh24*UG&b_~XxqXr^3j!qWI,Ly|' );
define( 'NONCE_SALT',       '+Rc!Xoz~yyGhf0W2+^$LqIIa<T<}h){tRNJ]Ol/~ljtNYYgvrj}GXt+6a^Btp1aZ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
