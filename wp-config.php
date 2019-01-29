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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'Uk@&lDHS(@#nBKSY/JAmh,M#|0.h*BwrjB]b+9ZRZ`vMRNaGW*]+**y7!)`dpV(_');
define('SECURE_AUTH_KEY',  'bG}44F{Ll+|mThR,,}^g}eZm<cxlWL:qQo5#p=+`ZPr83?%#TN3I{t}=*hDGA]<!');
define('LOGGED_IN_KEY',    'WZ&>rbY/r?FzF>mhe2t3!r?H+l6=TcX^~_V:oVmeeXx>yy$;Hv$*(%h&Z}{JDwK1');
define('NONCE_KEY',        '8#d21q>pOk#f-g9:jKNb9#6x`{`(7=`Jh|eZG9J*U~t,HM#x#;(d*5Gb_3o?[p[g');
define('AUTH_SALT',        'XM6r|zk4:rjme5>juTw[l*W:-`Ilz>j<sOV=>{ksT/eP2jStca|(gE<rKfvu_MQE');
define('SECURE_AUTH_SALT', '^a-v|*zhc<*RLREx=nl~_ 4Cc?Vas{o&@DW(U/nKR2WK0x#~}S4GC>=Sp|B9>}GQ');
define('LOGGED_IN_SALT',   '@L2eu@WnTW$-&yWr?)D@{<+kk/fxJv6FtM,,c1-Tk=L>pI4Wi!($R_.!.H>D17u&');
define('NONCE_SALT',       'WN$_x;3s_~d34<C9I^;>ewCaG{f~cxwD4qC%.G;fN_EL Xkmr:U0^ K.[=)tp-Pb');

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
