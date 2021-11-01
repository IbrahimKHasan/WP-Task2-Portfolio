<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')R05@rH&R;+OuhzB%M<cjh,C]t~*MzAeF[7hUS%sD.iF+T*0;.7ERTB#T5yihN Z' );
define( 'SECURE_AUTH_KEY',  '^c>zu?oF8:EL$NUIXy:;>Pq,vz6^:G12v[cMd*13EA.^;;JmEekGng;#{X^T$MRl' );
define( 'LOGGED_IN_KEY',    'D*1Es06:)N$$KDt5YL7!+3TY3FrfvP[?(_cN&&K*D5q~r6OSw9(&@@k7!1NS#)3l' );
define( 'NONCE_KEY',        '2&Tq6JTr1z*j-5p*1f1S 3x91rFdzh_7l?)_vT%rblsGiIU##(l_$Hd97j|n0_<X' );
define( 'AUTH_SALT',        '^XP*sTp&#UNf@+kSd4Vsf%wi{Q1MU:[PC9BfsBF~PEd+Jb529G]Wa5M>ua5=ZA /' );
define( 'SECURE_AUTH_SALT', 'z@7@ Odo;rGd<)^F9P;e0 ^N}(Z4qO`:4WYX[IZuO3PWPhBj.0l5~xdxv_7U Ex+' );
define( 'LOGGED_IN_SALT',   '1juO5r[y3V^R;K~=II !Ew,p8oKh~FA JrLj8]ae0j_Cx?$l8L<:4{)h4.wYo+r_' );
define( 'NONCE_SALT',       'N;6slt-7p!dfyF&%`1x.uY 0Y[ak#On0YPhx?AfRbQTX.=?H;r*^A!w!ot:L!/hh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
