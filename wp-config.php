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
define( 'DB_NAME', 'photographywebsite' );

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
define( 'AUTH_KEY',         '?P_c/rf~0Or)ORV!e&BazOZ=}Qf8*T+;7=qN}NdR*Zj?Vc5jB7gCgm >+o`;Im.n' );
define( 'SECURE_AUTH_KEY',  'no`?|`+?*i,yLEIyz)v-tMTzO!32&xn&41?;TMktRSEJ}ey1R{Ko_Uv Qm~-6}dl' );
define( 'LOGGED_IN_KEY',    '^_8bD).#kuXTS)Kwq#c8N4LqeU|v lcca]vM{C.e`[)!wn|pceQdyh+^1=(tB>w|' );
define( 'NONCE_KEY',        'd7g:R06<waNU*@rqKA:@W|/lRoO,$P4*MD@vV!;<}$ }:Y44@/?;[Tp_fVb_$RQJ' );
define( 'AUTH_SALT',        'qhl}K]AXI5#ie<]4hoCzqbmZ2,!fgxE8c|4+l0uU4SQHJd+a&x[kIEYrcn,)tEmn' );
define( 'SECURE_AUTH_SALT', '*n=S9v18Dblg09zwcsawp</B>a=Yt)I0P+:`jwL&&W}-g8Zrj~CYGEcYFu$P&4DC' );
define( 'LOGGED_IN_SALT',   'U=<ihFviM^?6g?s5;IfoFmJDmucJ/%d]Ug1-;h?bOdzDqUeDc(I+J0|<$Uz R0<j' );
define( 'NONCE_SALT',       'W~e;|-~i:IQnv{kgN?B1_.qEhgUwV%r tYbo+mI]%2+EYX(;kZvVE3/7/%p=&z;C' );

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
