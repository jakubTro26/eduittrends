<?php

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL
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
define('DB_NAME', "eduittrends_db");


/** MySQL database username */
define('DB_USER', "eduittrends_user");


/** MySQL database password */
define('DB_PASSWORD', "1bSVUeTlpc");


/** MySQL hostname */
define('DB_HOST', "localhost");


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
	define('AUTH_KEY',         '=Q|^Zx6SF NGK,i=9:J5T+~F1ul@(`]uQ@zGhxdkC-K-pB6,>m]iqd{E5cv?ps<k');
	define('SECURE_AUTH_KEY',  ']C]%+fW&!hWsY9~_RvH4Sg-3Mgc8fIMfplc(3F6$;QVt6)YxDM6gVt||92VL)kx;');
	define('LOGGED_IN_KEY',    'YJjf_M,-,Rv}P.0tW~e?p_g#g1EQbin3=RirE=SE%Uf>o^jyn,->TP22FW`%IE?%');
	define('NONCE_KEY',        'qi|R>eryUH8L#V}{CK]XX0 5]DZ_/0KGtk.8CE0.RCPh;JqG|VND+EB$ZP`U^-.o');
	define('AUTH_SALT',        '4tT8`b?<&F{My^tHVTAyBt>CG}Xjbco?@bu[51k//-[-[A|[-5(0|XG>fH%N]0J*');
	define('SECURE_AUTH_SALT', 'j`Z#u axQ_L|tjtw-Any3vNHAZ}~o!yK,<z~hD/GK^$YwUuKbKvU:Zr|58M~ Jk3');
	define('LOGGED_IN_SALT',   'Z:F.2eBQl>^W><)`?Blp+iI`tO_#M]7-?7wB>-3?-yDAX(0%mjv:]69+tps$=*-U');
	define('NONCE_SALT',       '|20gDP6%wV(Zy[ywn^lTvmqS@R0ZJ9kyK+l_9DB9PmU+KF?gQ{.bZ0fMw5+}w.R[');



	define('WP_HOME', 'https://eduittrends.pl/');

	define('WP_SITEURL', 'https://eduittrends.pl/');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
