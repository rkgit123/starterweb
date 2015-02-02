<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'starterweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '~B0p5.@_*ej`xI=8O|p^FN7z5$|lKrwTV_[AD+~wNk<X T1q9Tgg2=kzijm_A2|y');
define('SECURE_AUTH_KEY',  '!0VDTbpaf4{2jHuB<e7|BHEL}XU5-@*!`2I k0d9EPd 6w,^V Wp8!D:2u_^Ruc(');
define('LOGGED_IN_KEY',    'vS6!C2-u5ciKv^<!<U!6>2,XvF$,g],Pk h!1h2xX[i[3sOvj13~yO:67!hNJSgZ');
define('NONCE_KEY',        '<Sw+9v11}m#-!#vklBtWP=[j+n(>[CZV6?6;FnaM0K{lQ/e$No&MBCa%{J>*=8_Y');
define('AUTH_SALT',        'A+a9p6c4@e}6xoO+A1I6?f4mZ/I(MI7aUpqKU~%T@?6Gt&*cL^%k mxdAZ|#9W}[');
define('SECURE_AUTH_SALT', '$-W|]E|Cfo&HIrV-!<}8Gm=?pN^FC Mn&L+D$ B0V]A^V0}@/[OER4$sA<A]2$L_');
define('LOGGED_IN_SALT',   'lP>3c(LgfnBPR-?!+>+7Ceo= xiRz#X~d[dh-7,V.v3i4hfj~j7,N}UVrXiYyZW?');
define('NONCE_SALT',       '3xjeH2~b|h:YZpHFzTb^(O0:41751xA?,w0o9mVArM-}d|U*|vV|M_-!P-6~.#Th');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define ('WPLANG', 'pt_BR');