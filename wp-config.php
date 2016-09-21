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
define('DB_NAME', 'namlimxanh4');

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
define('AUTH_KEY',         'oc,~E.rsx*]H19@M_ZPdDpv~8@$upKO2?=Jha^-N;g[)#1}k~LLqy,j?I1`fO]5I');
define('SECURE_AUTH_KEY',  'AA7D2GeTpqlsFXTJ?/){)6+[E9`tPRXw9[1XV$:w53+C)*6&=q|#GmDcWUVEduvm');
define('LOGGED_IN_KEY',    '9#jo#I;u_yjf8aRU Ric1sy c#8#g#kRh;|!b/IJL5a!M>lItJa0*,_e/m]-*lu!');
define('NONCE_KEY',        'TVz>@,5kJuu{tvs1K>)Q%xv]kcSk;oH/Q-_?aB|722uqm0~:=MAp.QAaBn`%qpY2');
define('AUTH_SALT',        'I#U%y6`na}o 3WgB# rWpx&+Ff3@qWo`O| +X6Y$>v2iRs@&m9U~b0nO{q{)l-k{');
define('SECURE_AUTH_SALT', 'E+oM>6*xGY0(+Vf%p[/MUSs#R0LQhmY3;E]CGW@L4p#4#_CBPdlLdH|h~]9$%V+D');
define('LOGGED_IN_SALT',   ',+77$g3=XYtL#-(`V&uZ;gf1U|.=mfa+W}rrHh;WQU+2F8V:296_9Sc,#JPn&Rk)');
define('NONCE_SALT',       'EAG-c<Mlwa^_w`QF*OCD+YKQK3pSWn&+KjYeM]UKm];(X+zOK`uIEuuOm]AmVda.');

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
