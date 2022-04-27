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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'new_webshop' );

/** Database username */
define( 'DB_USER', 'Juventus' );

/** Database password */
define( 'DB_PASSWORD', '1234567' );

/** Database hostname */
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
define( 'AUTH_KEY',         ';pd6-P&n>A{0y`c0:_}07 Vn|i~/7e*iGV#L~r{QM`{YW ;yW# ftX><UNks*FQi' );
define( 'SECURE_AUTH_KEY',  'el>W<vVvGiuue>iAkKd;7-HTJ-~$E>jrLsD7~_qMb|>m6i[t4zZCv$QSHK(ajwaR' );
define( 'LOGGED_IN_KEY',    '#3j:a;4uuthu(_7wbYpt#QGEVzvx9.dH>zZk8v][qY#6B;_DWUx:1U`u(;kl/V|w' );
define( 'NONCE_KEY',        ';$f<E[D]Ath.5F} .S:t&t{kpqE@FNpHMb?Inu7Ujv6CVrD|*U~]n0#[XR!Kh; :' );
define( 'AUTH_SALT',        'C;}#Ive}uB`7W++QnCO6[UQzdI#(+~ya+h6f}pm&s*^!I|DAOyM9--.BFXx4otUH' );
define( 'SECURE_AUTH_SALT', 'p9D}<|}F_RN}Ax7kw[qVN1wXMk4h8:&1D[U9W:ZR9xz3Gh,/Z5-/Z2j)WFA#8xW+' );
define( 'LOGGED_IN_SALT',   's!#Q<e&Gjwe?E@0g{5`Ate,[c2LcJYBj3CBRrMlS$bO9AuAQ!o i!*6KDZbnTzgh' );
define( 'NONCE_SALT',       'ecW*iS{lL0`4){O}92veujMbSN^v(J4k?;cRS0 g*>Cmd1[&W1*vQRVfNh,1}V$-' );

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
