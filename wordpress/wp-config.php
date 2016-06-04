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
define('DB_NAME', 'joadef1_controle');

/** MySQL database username */
define('DB_USER', 'joadef1_controle');

/** MySQL database password */
define('DB_PASSWORD', 'dukejlf159753');

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
define('AUTH_KEY',         '_6!%!>X{`hY4&bSb.S:~{J>-=L} =O)8yPn`|hjhU)<m$FmXlST?_fZLB0i9y8X;');
define('SECURE_AUTH_KEY',  '[wh7l~gHfq@iHgZG6jGY;PB<1rf995Ft#3%}t+]_Hm$5` g%*}+qYl#8PkTVnCq(');
define('LOGGED_IN_KEY',    '`{6/+H_`YJ1XsE|i@GF*9_>xY+Tp]aA}10 B(!UpQ{qR$ ^rcS|!G.Uwc+m7O41t');
define('NONCE_KEY',        '?-H~3+Ucxm8!%WVg|WaVs.-wE=V9y|.N~7l X!O?q-|UsL)asCM.AVg7[28=KK >');
define('AUTH_SALT',        '<E`E_+xA:Aw%ut:xA+SjW],uj#d9,ASRd~Vp/xTZs^p_-0Sc}6Ip5=*G#80d{{lZ');
define('SECURE_AUTH_SALT', '5qR+]CTm~.4M!Z-L=lv5ky>?3Q@YCeG a3tWLO{8*.ue]rdWWS%ScE8-9#)TmM]j');
define('LOGGED_IN_SALT',   'o)v:<2a~/R/h*H>+$fN<0L(|}~BnDID| U-z{Fxn^E(&oE.`n,kk|3Zv[tvh~Wfu');
define('NONCE_SALT',       ':i3U7pJqml&k<W7Q)!OR^CbX#pN-,!T18weR]Ti!iA2=+qsUSv+nW56ui v?YHdu');

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
