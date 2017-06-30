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
define('DB_NAME', 'seed-website');

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
define('AUTH_KEY',         'ERN[t(!IybigGIZJEPd75!W4M*v(@v_#c_)4{+*{0t;-zRLH#MAXT/T3!82SIC=D');
define('SECURE_AUTH_KEY',  'Do}/nr0/dGanUcfVoc=4*%L>N+[6_h1*8,uTK^|>hV*SWt73K|uBPm>>H9TmqaiV');
define('LOGGED_IN_KEY',    'MH}XFtBni~-;@WIgrM&J2H[q/Bme[Xe)5XxuuasTmN(:J,JF(wP }H::gv2ky[#U');
define('NONCE_KEY',        'X6?ZM;Yg!aGq<9i!6~|^XYwZkwV+A0VL|Z|IwVb{Ho5 hcnkCm>p|N_M`hES^t2G');
define('AUTH_SALT',        '*S3az1h&EE4BL^8XEfI:1/b-0pCSk+B|6 csUMPbq|pSkIuVkNA&^a| n;< ys;f');
define('SECURE_AUTH_SALT', '>*wiTa7MPh}s1R![MzL2._2`sydxAwimA+8tQ<hv9T.^nFd`]CTeR 3lcRQe^]|n');
define('LOGGED_IN_SALT',   'aF9!gePA)_HL!COYa!%K%U}=,51bFucHO}xpqE.)9}4a#aAQ%iFv>^55nCQiqo5$');
define('NONCE_SALT',       'vP:iGI<QZd&g!fg+_xv!nDXYN)USu_X^?2U#g4:ft5exad.9OOg<*FCu]Y,NGI{M');

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
