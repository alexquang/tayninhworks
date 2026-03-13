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
define( 'DB_NAME', 'tayninhworks' );

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
define( 'AUTH_KEY',         'aDN.:CSrEZ/hCXej^.}]NH~N%?mPNlkO{mDt0G%cY;VbXA>(#Lb6b~mlTNQnKV(d' );
define( 'SECURE_AUTH_KEY',  '|*Jz:Vrn~p)RVd) Kk1?*[]C<x)Wwl[vFZhB968y>g<o%@ 2inn?v0)ES0KzgM~F' );
define( 'LOGGED_IN_KEY',    'DS,X:.ee3};Je,0Y{*b1*=ko[.I2OZr7J5$}fa$&oMSR|]RYq&FcgfM00H)ioB]9' );
define( 'NONCE_KEY',        '3Y_H[Gw;G RIoi2-l!}2CDL{GIK_!=!j }::4rx.1s`x.OE&/bsS=d5(0|SUj?]n' );
define( 'AUTH_SALT',        'FOot=kpfQ5<=Qv}rGD_&+#&&yi;YJF:Zd,l&2<6&:U`0bT_zWPZ[sku+!:Fc#ss,' );
define( 'SECURE_AUTH_SALT', 'I)8YD^rgA?&_a4J)m&P3AkV8MFQo -r}|^O3lb2+gd75O<CI^N2gcDssMbX}o*TU' );
define( 'LOGGED_IN_SALT',   '|gzIeWyY$;:J&4H_(buDU7%b=2J9)tsgi<%fBwh:n#m1>q;]myto{;lUs~ZjTv*=' );
define( 'NONCE_SALT',       'o2;K%c_Zo7E3Nl%6>TSC.30=fG83CgY&!ZK!|t&#7:+h//Hqf#m`qu8M.z}z:(Ga' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
