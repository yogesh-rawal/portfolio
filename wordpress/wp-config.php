<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressnew' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'dj,$I#hXGo1{m.3[}Uzizx;l~iE0SBhnKm.;W|%#Y)NEF0yZ67^4{uu}Nj?{$QWc' );
define( 'SECURE_AUTH_KEY',  'g$pe#bn}9}MnYA;Yv8gpELnUS{$r^r/f,-4%%kkVm/hqH,[!fe}U-p=k@nvlID? ' );
define( 'LOGGED_IN_KEY',    'E3R{x?^&7nOm%|Vk5H:MR)gnSq(=BGl`T%@$e+FxRT/e 6,q{a;={dA@hnvMk8tQ' );
define( 'NONCE_KEY',        'RRmw,Vw+r , s{Z;h)qVea:cM:=94y}z`W+ZHb8Ojl6%@4>S!PhNyKA(7e8F4@;D' );
define( 'AUTH_SALT',        'NP?j`MG9X{r*DsD%K`RcSqX:mD*J}9A Ss@|(@`[ed(=Kq:tzc9H~h^xc&2p}2fY' );
define( 'SECURE_AUTH_SALT', 'Nk{qxn,h.Lk#7q$H(+=#kbH{2{@RDX-S$nfIBD+#@#?v)jQ!w#&mb s<=V8h6 P+' );
define( 'LOGGED_IN_SALT',   'R!AZi1PTtNYJnz{zLePZ~<JEzeGi)pv4t[$*FW$y3G]A/&a]+O9m3Kn/ $jAwmI{' );
define( 'NONCE_SALT',       '2V}G%XvmDK?*x^@kUy9m2AMGsmw<0&v#dfT!XEgI[F]RUT9vpwvo}Ma(%)ff%t&W' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
