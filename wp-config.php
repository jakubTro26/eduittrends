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
	define('AUTH_KEY',         ']eAmGA*DUKGyPL62B{.+zmO6/F^1<=mt_@`F~zy*s__nRY<r?k=a&;HQt.q!YsO-');
	define('SECURE_AUTH_KEY',  'H!%yB>-H+,(-|^}oU|MdE!CfN7{jlA|OQl|r*y*=HV{$xUX,$=VBRL]{:S{,BWo}');
	define('LOGGED_IN_KEY',    'WECJ0uxMf-WhXnXY7,H_.D;Mn+_fV|W@fkY;O:s;o7xL5?D&lPMHr:ov4ZsHt&~v');
	define('NONCE_KEY',        '6a<($`<nK8#`e??W0*X;BSZBi5|CQM]63/!Q@4]cQcf[OUlji&&+h:u+(;buGYJZ');
	define('AUTH_SALT',        'KGP3+=2zYgK]bm$=XBx|07M^3 (gP:+gd!5hH+q@,AfKY:1N<AE;PIqG- rcNx5b');
	define('SECURE_AUTH_SALT', ':qsF$G=7@n;;sCmpIWn@2Z]^VUf{rl9Z=*E+8NAi!=4x%TM@mDNayh@2G*>f]`Wy');
	define('LOGGED_IN_SALT',   'j4`$(W#E&rMd8zPaS4m3Y7r^Ym[fVA(v|48Gw10z8&juR7%g%`oFZDQp|at:#m!h');
	define('NONCE_SALT',       ';pIj3.:*}[VW<lD%wlu-CsX>x`ac<|[aCHPgr. :#l;FV7M#}RYilJYy$^S+qJXo');


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
