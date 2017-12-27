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
define('AUTH_KEY',         '|q9Qx7*,]fKX+Dj9s?B !9{M`!K:P%hK`0:l*wT9<G&zdqs[0 FbqPEd%xh#57f!');
define('SECURE_AUTH_KEY',  'u3^GeaSA=a=YZ8SSs1SJp.(e%QzL90 Ppk!GCP>Cv*k)D-,sW=gl(8&(+KEfjN{c');
define('LOGGED_IN_KEY',    'J[Y Q|N4eXW{s5Od{,MW w$2XE)wi0.x}j|maMxSC7!.Z/#]Lb{1df/{fE(ctc7v');
define('NONCE_KEY',        'n`^ovmB=Lo%HeP<+GEazWp-DRX!Ky &{#,;$kG81-tfz-O=fC=is#%ko4uu tSF:');
define('AUTH_SALT',        'YZ }Gj@uqElUU@#:6Wb;*!4Lp*qt<*^;0f33l!B[`T*HCm8vE;_Sk&({x&VI+g{$');
define('SECURE_AUTH_SALT', 'IdC;#T>/>G9Jr}ck`E|bob*Iz#d0[k@A*Tj396.T )+BxXV72.?nc|@K?3v}J-1V');
define('LOGGED_IN_SALT',   'X<ug@b4y],PG `a$iyIIMAYf I{k#w4Sa%IV~<E2C|@^[jDLW8H%}d(r@Mwl3v_|');
define('NONCE_SALT',       '.6Hfg>ue6?DHRp h|ZyMCRc6.u7/U*o:l@NhPVNuleuNedG[#!dAM%=,CX^^Pi= ');

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
