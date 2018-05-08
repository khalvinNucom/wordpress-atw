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
define('DB_NAME', 'aroundtheworld');

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
define('AUTH_KEY',         'H{SX+GmQnYG;>BR4I@_*!r, Kt~2m<@nm~.>Ra_d8t5N@j1V$_?lTO#}Md0c_v t');
define('SECURE_AUTH_KEY',  'y]RIx#KmE}K~u5mQ_AZk[b{=)gP(8gAgilP,Z*H8 !?+Q6}sC7T d;gRRpd&iQC}');
define('LOGGED_IN_KEY',    'H|]:@eBN(ZHF1J)l$A[4&}-gh/W5AuQ*66n}Ch97d08|%3?.4QG4dz.zMNQ>~m|f');
define('NONCE_KEY',        'xmT<,aIUt*^oM.|0!?3$ZFNg@D=`20u67TwUY7[/a!xUS?QBH 36N>;f6K$WzOeV');
define('AUTH_SALT',        'dc[>6*$ 3=nX<5iK/Cq-3hXGE[eO@w~?wlQk)V,jMlq~rTZb=2_Hk&7So^4?32QM');
define('SECURE_AUTH_SALT', 'OX@(>|XHmL5*7@j1CP9Yv]O 4xfmAH%eM=nT`p;t<=@0&t^UP5a&7H!C2IHf<]U|');
define('LOGGED_IN_SALT',   'gtU=2;u:L+v<Mb^;!>-H% z.%7|cERPnE9aRUv%%j)n*2tt6`q7H]N[oT6-X=^sq');
define('NONCE_SALT',       'ZBE7]/=hR,D%]0vmoVPM&gR$O!T^-~@,?YwHM_my17)do`|Qj*(*cFiD4u;z)+(h');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
