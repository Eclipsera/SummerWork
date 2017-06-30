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
define('DB_NAME', 'test_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1locoloco');

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
define('AUTH_KEY',         '_!1,]nV%dSoTt_2aaC5,&$],,`#_&&A^G4[iwWriSBwBC.V<{H!7td[hF0_;g3$t');
define('SECURE_AUTH_KEY',  'Kr<iF?it:t{V`}1FonWc#}Yh[EIBtV[kl~wAw.nO2l,gtx+RP5t-WxtItI<4QgN:');
define('LOGGED_IN_KEY',    '8s}9u]=G8UTbL07y3LdkJ&kMPu3h>I$,(rM~o:.kCxA}3$.jkYW{/P!H}8-O&Z--');
define('NONCE_KEY',        '15^rK4>g=)X8*plwo]-$ weYA&[(hs{p=F3,!A(KCTq|#i(I`<?;b`k;!5R]Om[@');
define('AUTH_SALT',        '2gL)-^a};i ;NY=;zVw]VPd_?TMyR:I:pT6#F/l*,AC<qmj2T2i-U&B1@/z%m69[');
define('SECURE_AUTH_SALT', '95;q`<O] A.Lb!#gzHH.+]Q%TU&yMUvg7+aA6#sFQbO>0KLXfhQvT ?S}TP+S8uI');
define('LOGGED_IN_SALT',   '+rcg#3HD6j cT)(ODv`:bL+!_@L^=-gyDm7yrX@h@-*Bv=RcDU3Er_2N9__J_E3W');
define('NONCE_SALT',       'oF}fj:sP#5uLezzu%Brl9%t9A&s&x0e%`PRwM<Bd#n?(X$*1~edBx`#BX 8O#JZc');

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

