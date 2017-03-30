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
define('AUTH_KEY',         'YRO_MlMc{o5W7:f$4{u^{+_[OJn-n=p/xj}*i|}34H,f}A3b|.;S1{>Bb*nZ^UAw');
define('SECURE_AUTH_KEY',  'aHrIUQp15U.ILD{hoY)Zly##@<2R+,s4Zd;S8[$q%kVOG,R?}XZH4-Puix?PQ~ca');
define('LOGGED_IN_KEY',    '*`t~I}Kob#<Xw61lY*anX=6_y}%hyG<L}Eagw4fA=iBXou#H)vs&rWlZ9c2<FY2}');
define('NONCE_KEY',        ')}HtioD*,y&c>6&#h)R7nSE&S7>IvM7g[pDu<tV$8^[b;~6$K o0jE|/9ez=DSfQ');
define('AUTH_SALT',        'j`fnC<U(=b+<X%@4(?^+$Z_tlv.d/Vr@^Y9K5p#U^q63{sRMG|x4MCBa) (v(*I]');
define('SECURE_AUTH_SALT', '98Xf@bQEdy`IvtFP-(j3u6xhDY,Rcqti4]WJC9g.ZD9A5tZ]Fe1A:z|xuePRMZA]');
define('LOGGED_IN_SALT',   '8GU`!5MY:&wVN})$$Jkb7nF1EhF oOA<jzcu5ZC==Bew[c2IY`uH|)P]|Bqy4BcL');
define('NONCE_SALT',       'q&o]SlI%(JE#1~@&.TS}03:-nR%={e7Ty>dL.C#)!ok35PY)+j#;I=`N3[e=ge`N');

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
