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
define('AUTH_KEY',         '!-|Q%9lD-7$LL=XKu_e!t@8.-54bwls @,lIa~OVS#~)Rub i9K)M{H~Q}2UQX0G');
define('SECURE_AUTH_KEY',  '_qjuz3zELc6CM^1vcK/D-0Dt].B6U*Y3%Fbx((hcJV{(N1n#wI6/ey`8?hiCbS6C');
define('LOGGED_IN_KEY',    ']S^ymKrjf@147Ybrh=w!mKhHdVzLmt`cs2oW9O[qq]+p/{;6]rY^I#gx,.`a>~Qi');
define('NONCE_KEY',        'i^ODfj$/WWMQ^oTl:n)G@&n*WW(tvbGGtA~d@Fs$i(bn-G1}M9cEXY)sW{#&KLZw');
define('AUTH_SALT',        'cYJ8gISH/oj34AY frwwfKnLj.E.=(I</e(9f9Csn<<)~1bc6F8MN+B/U vg(Jt;');
define('SECURE_AUTH_SALT', '1(ekHS|kzL&_nE[gWOJtYpVJ4,8@L{7`nl-xJ(t1+0,bgXB+ho,z(xP}0ws,IN0A');
define('LOGGED_IN_SALT',   '<k_B/=DvB|#*dvmR}bun*z#*2f.Iz> %;{lO!7BKHB]kz0WcZCzTwdcy[5s]NaY-');
define('NONCE_SALT',       'BvRcc*i;cgF@Er^R]FHY{QK@-hM`OD}49F}.9IGMfY<p_>emC<d[$_?2Pk*+*/lQ');

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
