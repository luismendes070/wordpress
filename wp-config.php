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
define('DB_NAME', 'prototipo_site_institucional');

/** MySQL database username */
define('DB_USER', 'luismendes070');

/** MySQL database password */
define('DB_PASSWORD', '§(1ç&weugjkbc');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'users');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$-J)$r--Kqop#}+|RD_[j*A.]@a?V4SM~alH*nmw-.)3`z3b3ud86R-7>ex#18_6');
define('SECURE_AUTH_KEY',  'nyr6Vhw?LpRpEPX>H)>+[Z+l{9FOe{f{/}g1gb{DZG33S>`aGmJ%$hve29-+{d|!');
define('LOGGED_IN_KEY',    ',%P*(0@=}[aHg)@Pd3L{EY,(&qrBM.+jAF]?+p+EHfp:.iT}7+7PKBxH*?lgAAZ/');
define('NONCE_KEY',        'r3[AvaR!FGp!FhN,!mg,fY[^rQg9(3<Dv,-en@9Olq4!d?oKe]+^;GVIT&j13a]R');
define('AUTH_SALT',        '7XIB-)aI{l&B}Vmr;Q?|n/ebMYr<)^vs$84Y]8Na1h@r#$Nx:][@!1eA)!NqsqA5');
define('SECURE_AUTH_SALT', 'kbh?oX-{w J-[DDW+rz{2-5qW=>!vN@*];oO.pOGP@%]bw/+Jgf;qm<S%Eg]$B#i');
define('LOGGED_IN_SALT',   '2w@~-po)^oVB|QX(bx#pdkE-tC ~Vw^wWa<Q5Gi_cMNX+;/ZQ<(g5F|MVzb6l|1<');
define('NONCE_SALT',       '%+W3ws&pHKMDGEr-62FX%ijv;k[<V6oM1+a|@?}9.|J|5+coltcS`,&--^`kh)>c');

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
