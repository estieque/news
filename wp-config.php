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
define( 'DB_NAME', 'estiequenews' );

/** MySQL database username */
define( 'DB_USER', 'kazi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sagornishat6474' );

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
define( 'AUTH_KEY',         '| k#_7<`2c+~M$xVdbcFA2Y]!Z]qi 7AfgZz+T.m#_j)UHmEv#0byf+}{$q6`y2`' );
define( 'SECURE_AUTH_KEY',  't-}!_!Jb;CrWCS3n-;CMm[veys&-S`#a</9~(}-U9: L;$R2m$TN?o BpV ikF>V' );
define( 'LOGGED_IN_KEY',    ')9>+mO:d|/jr_1O6H.F/ml)5r2*{),N$k8ZST%m2,@IS{]z|b2m:(B[/>f&E#iAY' );
define( 'NONCE_KEY',        'DwUc0y<$vfXX5<=#`g+$JtKy(c<t2(d1`w5I%v^p|D~-B1.FFQv7~ZH<_NCwM/HW' );
define( 'AUTH_SALT',        '6`Vi9Ik%{HJ]_i,c*r|hBWCEJy8/XO$_CKvRV9vs/Yj+;ZPVJF7e/hq($JKgGeT#' );
define( 'SECURE_AUTH_SALT', '2<:YkhNRzwV1)Z:L0O!a4]?TUQuM|=VNhlt;Koi2nreI^k.}v..D-OWnlQI6otc*' );
define( 'LOGGED_IN_SALT',   '8yOfHwy3YziI/hFT?7]Z(v0210tzg.P }rOB9eH.[}aJ_Yc^y@(<$-.C/m}P8Aa ' );
define( 'NONCE_SALT',       'S_$~A/XAi<^N$X~zfd}X_~F.C)_4#1PSEgG:uLU_gbyr3Q|`}}R}DS)+@$dv@tOY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kz_';

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
