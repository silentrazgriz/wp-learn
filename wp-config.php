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
define('DB_NAME', 'wp-learn');

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
define('AUTH_KEY',         '{K*Sdo)X?2X@q6P}Gi_Mh06wlq(h3?,Ul{mwtDoaD$_!6uljMXEPfU,x1^v!Dt8K');
define('SECURE_AUTH_KEY',  'wZQ;f F_Y}&Q`H ul;p.`]CHr/}L{XUqkFrA~C/KRH1&.{X[Da.3@O?jI8Qldde4');
define('LOGGED_IN_KEY',    '*i=` 5,T}S|jISfjh_W!4jk$,~k.M/s1+a/H?q-1v}obBm+tQAaVsoQpyd7W$XSH');
define('NONCE_KEY',        'C_P`92*3?dM4h{LDa}F`FL[z{=WAG=e(aQD]!g)n0}yLunb_SpPs8Hee?CRo|^TK');
define('AUTH_SALT',        '!IV}MffMR ;rX*9%ysegq}&AnJZl2U[L7,$/P:l}WO;TYV`zE[fJ]@i{AxVJ5~*`');
define('SECURE_AUTH_SALT', '3o>E`tRslsj4zZkgrT yyc.H/Zqu}&5_&R0X:gcbg(<!Ddm{QzEeVvShxkgqUp)5');
define('LOGGED_IN_SALT',   'dG6Rlr>Ex:O%LMR3#$]DB?J.,(T]QNr*0POGw@!|cQUMhR~gRyP2gQv454g%<$l)');
define('NONCE_SALT',       'ri`08&yy,+oi?a^I3Xq johh~>x:Xa%L(TMf&p7zSLCWjx=|E^%FklxTScZSfH(`');

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
