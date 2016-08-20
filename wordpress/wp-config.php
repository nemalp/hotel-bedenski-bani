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
define('DB_NAME', 'hotel_bedenski_mineralni_bani');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'G9>#>r6|+2a0-%<BSr7>lCk3i+Vd@}8Wwwu~}V-A|CIp_- +n}<s^t)Z!2YX[b.P');
define('SECURE_AUTH_KEY',  '?,c-XqfNG>$Umq(pZJq>EJ:<>`DLT.[FDGPHWBt`C p{l%2M oZ~~2`0Y)iQz_c0');
define('LOGGED_IN_KEY',    '+%5a{i>{k33:&8;I-~1I#dUzyI?MPC~hUteaj3]>$mMGK|Z7L9*|V9F!`_X6j(&Z');
define('NONCE_KEY',        'C3EC%JU-_eq0:u-<0$xOrOE58]:#bN{W-=pW}0u=nZPx04 A#Ah[9j1Kp{?o]+#Z');
define('AUTH_SALT',        '*x,PJ7s7K)&@fef/b{fJz7Srf`w7:tXVKgD >4Lq9r;>%UAl0#J-^b&~Nfb}&Z>o');
define('SECURE_AUTH_SALT', '8&`9=[H}[_O6|Fc?A#fOWlx<uE%@q<yTC[zM*J8(15Q*JPAG560Vj)$V<M{#W|Np');
define('LOGGED_IN_SALT',   'f|T4qykt4YyJeN3f{>-d_xWM#MGy]^buG{vy EPHHa0~ZDWn)n.THJQ_rP;]VDe7');
define('NONCE_SALT',       '6=hbow(<aw%nE|4?_2lvvJdfDrPt9%. @HU YeRwI?f+AemZR5?{&_y)d*8`PZvU');

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
