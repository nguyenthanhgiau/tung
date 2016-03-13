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
define('DB_NAME', 'xudeptrai');

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
define('AUTH_KEY',         'CIFlRm_71*|UH=>j_[SZ,=-stQi,eJ*O&4hF@{ XvidFNX%>r}}1+.Fw++?Jf;Iw');
define('SECURE_AUTH_KEY',  'fDS.0y.D0Is-(rWBZ:p=dy^/d/Lp^|e{C+}Ni)9wHNmnEe-0+h9$[h!;vo%R38HL');
define('LOGGED_IN_KEY',    '0%kFrNS@2u+WuSW3{<gP+`r&Wshh!G0)s<`A}Cd i:>AmBQ+~^)ocvNG|p<XInP&');
define('NONCE_KEY',        'X#RpQ5h8H4@aR3mMX%5q:E]0uH+(YwPT8hu=nk)G |7ZGC-)xjku$b2&a>USd*]4');
define('AUTH_SALT',        'j5S>P_(1TBOSx4a;W/ze@b?4ZyhC_iG*Y$K0zC-.%ta)R+T^`r x6|Nr`_ 0f,J2');
define('SECURE_AUTH_SALT', 'L 8TVCyUQ`t[r7:V;bawTLW7TBC]?pDQdUnbW57Sy+M-r<-DbH1H:;?WpT4gh}W-');
define('LOGGED_IN_SALT',   '@*#=`]oo`*tp(|fg4WhYUx@nT,_}gKSNakXAomb@U=xdM?00lX7wQ%wQ4cKPBl-|');
define('NONCE_SALT',       '>yepq++U1,aN#5_dQ#sQA#[}41+y}Xg5cw#|R[Q1hH@+^Nq_^.I()on!4+hR+V_]');

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
