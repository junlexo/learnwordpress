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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'GXhh^&n8MwA*-P6UGz3br+qD#t_=RSieXs;!-Rk<mT}Aln?k?+p^;=X,HLeSKfnB');
define('SECURE_AUTH_KEY',  'sKmoTg %>E 2UEghz%)Xh[[g!j[B11l`n)%BwRNy<k^Wpc?r$<hBMvpe`kfh#V,>');
define('LOGGED_IN_KEY',    '5y;f9?z0.&P<Dox/7[uqt~;NipKeuLNgN%?V3xR^)C/1R}_d)H-+m*=?qkg[b+|;');
define('NONCE_KEY',        'TS7Y~XqMH$]Qy3{ U]cF^27.7$fl_qK9]rM Z,Af|OeuNg:O-:OxU7A>wm-AH?4 ');
define('AUTH_SALT',        '9`}e/&UU~cJBxIYOUJ0$U s|&=ikmpf#0ooBI;4.`<2H.]MadsvE@[+IK@,u5*ls');
define('SECURE_AUTH_SALT', '*?hL)O+wefo!?sX7W.|yHlIj?TYH5h(:|K2/wp&;NQNFgF6bW1uo;)]xwr|Wl$a@');
define('LOGGED_IN_SALT',   ')|Q@2Y%H$@@<<AQQ6d#~0]rl<%8x(2iyusBthYqhJbq7e-dG.cm?o@!ghx)lHb`U');
define('NONCE_SALT',       '2K_qIc&wv`*o3)+p9^jrE4;ZK@=HgO si bADos?6-e !90<#uyVp6J5XB8A ~X]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tp_';

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
