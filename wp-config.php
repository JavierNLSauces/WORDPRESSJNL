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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ELRmim22533' );

/** MySQL hostname */
define( 'DB_HOST', 'node29891-env-9374435.es-1.axarnet.cloud' );

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
define( 'AUTH_KEY',         'rwJk2ch5k;!-+$uj]_|0H_6+CeT<8,)r7?U+Sxu|$]0k(ci!CsU6_/cd<`[=~4JV' );
define( 'SECURE_AUTH_KEY',  'Pn/-0@93IyHUqvgbiI0_^4A,l1z QT8wQS(8;QXmP/I#HorjS|W#?0aX{! zic;$' );
define( 'LOGGED_IN_KEY',    '%~uJir*CVQ C.@^#a[,W[4zx0[^e7-)p/=IncMm,8Fzds9+b_V%Ae&^UuInQQD@,' );
define( 'NONCE_KEY',        'SoGb(6}SMD=DbHxtEKo|vh}>}ccw:RL<%Kxqd{nHl5MXZN;tKIwNx>1>?ut5T[$A' );
define( 'AUTH_SALT',        'Zh cPA _%nYc`-mx28cf~aHj!B_6k9q%%H|N-hjs,cuK9s~A+G5v6HNmY{iphpzR' );
define( 'SECURE_AUTH_SALT', 'nla@>btd;C8#V0=e}a,,m* br,d!w.LLxGmgW:u[kRBZ3Q(Ms}55rBw[Za(@^~NZ' );
define( 'LOGGED_IN_SALT',   'q0LEDpOG8R3C]E|$yzr7xba}[1iQH8M7VOdI!BZN#:s`(TWL<r{]vc6ML%Xr6LY?' );
define( 'NONCE_SALT',       'u%xN,==gz8b8km=O})!)wOj_5DIs~jUu/8d9]z6)(K8f^#r^n47X?9A87=,2RK5J' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
