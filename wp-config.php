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
define( 'DB_NAME', 'wp-blog' );

/** MySQL database username */
define( 'DB_USER', 'indramahesa' );

/** MySQL database password */
define( 'DB_PASSWORD', 'indramahesa' );

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
define( 'AUTH_KEY',         'kr/)N{!@D`>yK2G!@E}Pge*:_8~(hw%Xw?UN&]}lK>Uv(NZ8p;cp bg#g1(k.jh-' );
define( 'SECURE_AUTH_KEY',  '{LnBdUdclD]9{lb3R3=~|]b{&1Lm9hwiWT/}>pVikP:9E159};Z9WcuW{#6#=x!K' );
define( 'LOGGED_IN_KEY',    'Xm|6pC7xy9Eib7u3+S.9a~rC$[L*8ozD2r=Et-@EY]wHug/uw5&/HRFHEDEL/fM`' );
define( 'NONCE_KEY',        '`cD}_g7S(y2Lz%@]G.?)+ztF2tY}QWiNl%WZuN/-l,34w*K<4Ng}<py :#q0yje{' );
define( 'AUTH_SALT',        '7zk$67XM+,-T kyw~9nnXa/< =1g}x|}Arj$}#| %!]cS6YSAeiak~s<nvUFKQ)R' );
define( 'SECURE_AUTH_SALT', '[e#2})iVu/,^H^zTT:ZP...O}#m;.G1d/]`PnAQG_mF|[LL&8f*h3n!(l.l kCGq' );
define( 'LOGGED_IN_SALT',   'VqCJq-O@99t17EO]gzHPhh[V_r^!G5#pud {jJ.p1ju1@a}-66)#%X1 oYf(oV${' );
define( 'NONCE_SALT',       ']6t+V?<EO)}3caV5IW(V4T)Mo!#BF=/ALI<ay{o0d<7%:[6IfHf6~+<9$5=j!=XZ' );

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
