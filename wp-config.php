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
define('DB_NAME', 'chabliscadiou');

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
define('AUTH_KEY',         'x|^dw%U5L6x)<lS==aPGK@+CD6j2.O=WiuQrwH.%({,:7oA.-+lS$SJ;|b+@1)zN');
define('SECURE_AUTH_KEY',  '}](]n|12NzW+1QwuxLndDDt=csU_` CCaU-l*xgt3 Qh0$@ma5b:zoO;U.V+0zWL');
define('LOGGED_IN_KEY',    'u6F-`o&=^rP$&^t@UxR)2o1t-&b5bvJXhv3.`;P,I=1/?++&1y-Zc.;~Q~FOWLUS');
define('NONCE_KEY',        'F/n~MG5mZkS.>E&hSo72xZ%G0I$i%Qm3{=+FL%:>}*F:b<S39U^x*AyCKw0!:uu&');
define('AUTH_SALT',        'Ct1K~`Uy;1~E,=M)CiLjG`vI8*BfqSSv|1RSf;i-gk{6 ;zC!X[pVr(AHm;QIbV ');
define('SECURE_AUTH_SALT', 'e)HOrs)q8K<0o8~=L{iIJ%;;AU/:Zpf~xU],kj&,_rV7Tic?Wr~8%Zmxnc4,V6f^');
define('LOGGED_IN_SALT',   ').^G[0V0U0H;SR%;8LeEZzzlq:RQ,f`Up=./]/TjFi*J1!=NT4_JKwsbGxx)snw_');
define('NONCE_SALT',       'YU)!Gy&G,3NH3D?hC6J|+`Kp;+z!at>4^Y0li0rgi!H7[x7Rwm:&HxRA-$.P$Wl)');

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
