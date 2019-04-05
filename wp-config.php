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
define('DB_NAME', 'alphamedia');

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
define('AUTH_KEY',         'DqS8t# P:+n~bzL(YWfI3h+A`t>0GY# E27_r1OX_{Pf~W3sJ%WOU.x{pi;7UU|j');
define('SECURE_AUTH_KEY',  'k6dAQ_xNTbmiS7-aI`6-VnUsdIK&,iM@RN*/xIqiKB/~)p.: CBGLk4a|DEz Zz,');
define('LOGGED_IN_KEY',    'hKqE,*b|sE.S@8g>C|aOkdOK>&UwN[#-BemCyO5iPNl1?t:8UBHOX)x%=Y$!#rG6');
define('NONCE_KEY',        'I+y{$_uY6zgV&A5h<[Rr?XdX!ZaA<.TTt]Vl`0L>hi^11.[z87YOG3=|0}5%_L}{');
define('AUTH_SALT',        'Av`.LHO*t5 B59Ba%Y9eULcmSQSe{@;oaSr*3wMLY$BaCE85_E[TrK]=#P4S^@ix');
define('SECURE_AUTH_SALT', ':TmnSVE/KT]8>_Byikh=1sTcFP7^?bV@Pz~a3o/|#o?AHfiJxeY/7ujEBxidM{w#');
define('LOGGED_IN_SALT',   'J4 t7t7Dcq3fPV+M;K:D0/4_(k}qVaCtAowq>HBn,VzJoPYYyq$Vy(Y6_50%+8Sa');
define('NONCE_SALT',       'u^@6VMvEKy?0(&7GS*fdeD>{COyZsQ.~8D{L?4>+o+fQ|h)N@26q#cMctpfo]rf|');

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
