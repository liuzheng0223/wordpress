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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'S{D$Ys#zoe5w~Gg1SLrH8Gn{Xrk!sn%qejKR,ce#thxT8}x%FD{V%?J]>M$R17Zx');
define('SECURE_AUTH_KEY',  '&`@aluCUlGix3^Gx{;!/?D%]3Np6H-FC>Yd,<g[VGsR3KHr&TSH8Ah@3Htp[AaTF');
define('LOGGED_IN_KEY',    'gCW1^iMNib<#t<ebK0: >yH7hS#FvA!O>c.x&/zNDAVY:_3(%iHHBy;|0QSU~909');
define('NONCE_KEY',        ',MtO_;Su(T_2g{m~x:1|8;qZvU4i=eGZ]p,}E<1^,LR=0p/S7>BUdHb$i^!I^m$r');
define('AUTH_SALT',        '$n<P~WUTI/*&2fxwb).JyL(#U(Z)l6RQ]pI9@.8@a-:RvGVdO3tolqB/ReI<a<Tq');
define('SECURE_AUTH_SALT', 'RL:g2q}`KLZ72.*xp3~.95,.B$:u6qT9(>k=fjlYtD) Y3(oD}0p.Q=+G_W8he^q');
define('LOGGED_IN_SALT',   'tO]y)e.d]y:D(FX3{v?wF,l[!^Vr5&!uRso-1r^Nkup3#s0HuO2`0..0yVyB*Q$y');
define('NONCE_SALT',       'Ie%M+diR#]1?-eq1faPkw=ZXw15VzdT0BiGL%-^` 9keegTM,?h|2CSmq9OmZ=KQ');

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
