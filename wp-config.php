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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myportfolio' );

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
define( 'AUTH_KEY',         '6(G2EnIfa{HCY`bLB| l!K!UF^2~b C0C_TY|9f%|Lnocb9g`[L,3lK|:KGcSJN8' );
define( 'SECURE_AUTH_KEY',  'e#s2D@gib0U;)N@H0S[euaHc5;`Rcn6A{^c1SnYo7.1b)lO?t^ZAa@6t!S]3n_5S' );
define( 'LOGGED_IN_KEY',    'DB%Muqn,C)m`vwV$hJ!}x=($~XHJ*3rQGz#0n)v?Uc+ti:SR8F9T>dnc8S]T1Q{>' );
define( 'NONCE_KEY',        'A4lNhwSI)Y8=1Zn*wO88f:M5693=Uv?nsh}fWVC1ja/4g2k-tuKub8FJ,jrWi^}#' );
define( 'AUTH_SALT',        'aXi6Mb6@k@IzaN(lsKF~om}te4avjqxyr~O}jOo1RP~[=iG K.E0Ne96unafP.M?' );
define( 'SECURE_AUTH_SALT', 'sq6a*lB)PljbRCKWwo`GqLqR|gh8Q/_7=t<Ao/=@lExH$yVSV+,[(*8iyHO[RQs/' );
define( 'LOGGED_IN_SALT',   'zMM,g~*rY![)G=1Mn`BCui#8[%mY=O26CkIBd]aX$^]~P/P6[)MG96gA&W3s,7.$' );
define( 'NONCE_SALT',       '?FMK/y7~uD+o[.&~0pbqqe<r7nv`wZ>Ek;gQf%=pvdI?z)L+x|t{ZaQ^`IYHbxQ(' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
