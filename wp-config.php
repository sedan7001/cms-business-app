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
// define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sedan');

/** MySQL database username */
define('DB_USER', 'sedan');

/** MySQL database password */
define('DB_PASSWORD', 'hurin0315');

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
 // define('WP_HOME','http://sedan.ivyro.net/wordpress');
 // define('WP_SITEURL','http://sedan.ivyro.net/wordpress');
define('AUTH_KEY',         '77H!`R+j;*+>`P!9U7eSXj @*scV^gU_4#l7Gm8*]LE;S?xd1g~t*Td)}%Pa9c;h');
define('SECURE_AUTH_KEY',  'pSju+?10j%85co01XW;u;8h^xI]HG4;yR6sG4_Oa@wU_up-:F25M5Ohd,3rg7 3i');
define('LOGGED_IN_KEY',    'J{rG0fD{){&O`n@ArSQbUK<H#(`B#2Ntt=Z8H|,*J$@yWd#t!?-h~Jgh/J@?xf7Q');
define('NONCE_KEY',        'yCzjYAwE-Ak~{MFmFYna.8;=p^eVyVC:xX{&Kr@Q6;L(uOn< >JP1s75gD=Vy0Ui');
define('AUTH_SALT',        '`|ecNlc!;Caw9]pB&(`+^ws%Z,p|(efO.oR|Ab_9u_Lt$*%W#_]<+c,j &np`4?(');
define('SECURE_AUTH_SALT', 'Kl:O(X&ZD|c@zvTT5-x21YVb~65{~,m|M(HlTT?nrH;0W~m{_5Z;Fr61m:2mVY9X');
define('LOGGED_IN_SALT',   '=0pM&i:@k2w+M3qbj*94Q6a)UUa<4hvRNH{ZFl;yfHs[$x+A|I8[mj%|LgzA8l!;');
define('NONCE_SALT',       '*cEQFUC9DW=-SFhjb.$Q akr0?~_*M 91iw7m7~w}RQyNv_{Sk/#6Cju!!IPnWkg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'soodong_';

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
