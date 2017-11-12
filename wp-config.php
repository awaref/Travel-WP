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
define('DB_NAME', 'TravelWP');

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
define('AUTH_KEY',         '&eco?lD#O&$oo)Ta(r,*#u*[5`QEeLSBNrTqFIfRZg$Xq[@:FZs.;zNhj`7$/K 1');
define('SECURE_AUTH_KEY',  'Pi=GA$(b{j#u6aQX%3Y{NXKf.mWMhvm:4q1htkN._UVj{th:VeZtgR+}-iCQ.|ZP');
define('LOGGED_IN_KEY',    'NwIZa{-Tl T4Mga5,Ga;=ngUdy2GcZ$SB@`%60@iM/a_O.$Q].uam<hZ8cgs3p0i');
define('NONCE_KEY',        '.X.J/gg5ODe/# *F7*0CGBXuAw2yQtv)5C<b$rToobpB4qxO_6/,Eln>q4|isKp3');
define('AUTH_SALT',        'n@wN@6*/#5gF@%5v)BQ#r{=@XFi>yUrH37ZbYorg& n 7xChKc&A[UaQGw9t:CNF');
define('SECURE_AUTH_SALT', '?$dh31p!1V/JpVWKJLwx]97NZQfbwe6+j*]|> ao8kcR[w 2bSyh1AmLR90M&d^i');
define('LOGGED_IN_SALT',   'f1G%<e_cX|z>{[_h@CV 71Z5cQaE%<.9R&b$2xW9<kkG=Q R$Gi3Oc{1j|0(:f5B');
define('NONCE_SALT',       '6WP> J~F0%vC)%r9]+l6 A|/D^`)?g dDFs/[B%oKzqiX8+7e9Xl_fL)jHve+8uW');

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
