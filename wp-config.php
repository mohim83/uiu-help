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
define('DB_NAME', 'uiu-help');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D2buAqZ&[@V-L0-.ZBOHx*:UXKcVj-%QT6v@+C4M:(]Q{vU:>SCbWZAG?tZ?9VY8');
define('SECURE_AUTH_KEY',  '~zqM._kUu%{WsC[oRbWP6}c/ZVucL$uSSC/>-<T-GGC^k,6%`[Cwy_o]B ~nEp;^');
define('LOGGED_IN_KEY',    'w]8)3c*w*T^x+q]|]3M%^SxbZ4D74+de;hi!<+bIb|E n+cQw*Ogp-r-kD*p-kr<');
define('NONCE_KEY',        ')<C@ffM-Zc>3VrX[&Vk-FGd`D#dA`6T5F+v!:s;,oP%h|7+2A=(==aAHu<X;PPhr');
define('AUTH_SALT',        '$A$t@B-vk6hEb.j<G,@R?HtdAtJAB|WZe|x!+(+$5Y2|o{,wD/7PFg~|htT1(1hL');
define('SECURE_AUTH_SALT', '+VzyEejVf8qRiT!I/Pn*mN`{h-ZL ]YTk}Mxkj+0`?:fZHP5])v xxoc%`Vd&[y5');
define('LOGGED_IN_SALT',   '99opF;+2(rhNU&_>x];iX V8Ej#h1-(5Oij2~0rv;#J`yc}wlvCqQ%5hVwL>Tkd{');
define('NONCE_SALT',       'i+7+r}-8jmb:?BQ}a?=y`PAp{0kuQ)6n[2?:|wKlX+2f&ap/%7} 8MBcj%9Yq:AA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
