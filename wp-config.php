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
define('DB_NAME', 'bdindependiente');

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
define('AUTH_KEY',         'tn[}ttVkB2Y*cAm]}KLm8u~E/k@+mW;/+~8f8$W.X:6m)N1_(cgdPxnE;T8B3<B)');
define('SECURE_AUTH_KEY',  '-yU_fn*9r,]B@/g0a )ui;C6ud|Z1/VOKkQ`[-QgS?m4=)di|4|Wx,xel2?Eo%x4');
define('LOGGED_IN_KEY',    'm+AmT9c(6&3>aO~wu, @*rm$%u>dn}ZYtANVaDNX=Fk(y7Qn;yT#OKr^fryeK#+p');
define('NONCE_KEY',        'JY|yAy>AS;,nL1qWZSS=,(R!WTCX)p|O9Iyc%=r 4U`6]{N/q,wMuE^*cDHcrHVm');
define('AUTH_SALT',        '3:Py^@O/6Y4FC^)$f2s#+$&4^|!6,1naC,oY2@w&M?sSGTP~d_(>eD!jqD_}5=k9');
define('SECURE_AUTH_SALT', 'S3Xg<*B^h$LQ%<%]a7x!Z:WFZWvh@wcxxWn];bg6GR0c.tuCPrtQupwDqdDhGzis');
define('LOGGED_IN_SALT',   'dp:I7!<Ai!x)K4^az{QHNP k5N>71Y,9NQdeH[)[lcfX`,J1V;)#`zoKfvc8;2eS');
define('NONCE_SALT',       'n&@kb:GqST9TQ3Y1Gn|_Fj`S]_Nw8K%5H%::,,xHHa=yFm&r*3UxNGzz7Wm6R]q#');

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
