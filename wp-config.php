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
define('DB_NAME', 'forunadb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'zcdaisy724');

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
define('AUTH_KEY',         'S:E94:4{w&L_N%F#C>K6q9F;zJ}1gi s.T)Y#|o|{GQ]`Y;y@.ke@OWm@VXPhO(=');
define('SECURE_AUTH_KEY',  ' ?M-hHW==|Ugh4V<qV:9$0eh9,[I/FwqD~XFO0|FNtZ3zVt9#sol*HRy}Ageg0RO');
define('LOGGED_IN_KEY',    '+0+*Q?F5.%/S(A]5WU9jO*61p7cXAU$Rp=dG)cwqxCp. jgwKiWX7+3!60RtZAiA');
define('NONCE_KEY',        'N04E=A[,<QiE/x2zU}v~-4.lB_4PA`L6Mt-Zzx8$,Gsr3z!W1]@GI?eZ=e!?mF n');
define('AUTH_SALT',        'W12)e`r{/#G.nuwYW5wOw{4V>Qi.%]87/d<{bPt+=tgS#<(rZ4jM;$xX o$lK~g3');
define('SECURE_AUTH_SALT', 'hF)U^$7*7%MsL=-NkjGJ_KM;+pLVbuq$%<V|T=:c|WeXu>ucQ$qwP}B#0Un7h;2n');
define('LOGGED_IN_SALT',   ')Ocf#g5MP:%1TAomY2:;a]Fw{C`7b.u{35K.9NBB~]q4>vXaVL7bnzI+060(nR|S');
define('NONCE_SALT',       'i{TbSI~O*^azzX )u/-<8A%=..gXs!l=+A$T4`Y0 >syix7J%*q3du4-S91H8Lb,');

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
set_time_limit(300);
define('WP_MEMORY_LIMIT', '256M');
