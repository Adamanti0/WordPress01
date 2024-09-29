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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'B_s=!qHNv;F<H)!)To8BL<hX*}&P,<j(1#?HI4M{),3QSLX:G&J~miE?Vp0@48(t' );
define( 'SECURE_AUTH_KEY',  '}TpP|~@G<*35vB=J<EF[<+9g/#zWWh(%M5tP:T (B8-R{$lM5-wDzLA:Z|$l&;Qw' );
define( 'LOGGED_IN_KEY',    'OXq+GxG`-rZ}`7c2,P*@l&xFQ{izc JPJ-27b$[${GwSFrFIF0_TEL58]xY8Cq25' );
define( 'NONCE_KEY',        'k<&Yyi}#q`-_qewR>#YZrdgj>Ze)G|K(%h/2NdLv!?4z<o)0xdAvVRvs+v))L})W' );
define( 'AUTH_SALT',        ' &B2q><^^--kwr[~xDwQ97`ISyZV.!}ti!OW8um.`hsY8@M IaN.12[f1$5&nENm' );
define( 'SECURE_AUTH_SALT', 'UF6):Fz%w.@/pP;bK6n*5HGZ_:%.Ft>lmoKeU!mMgnaM_it0`/7??JLCOBW]xS?u' );
define( 'LOGGED_IN_SALT',   '!rec@`@qo7NI(t3TF+cGKWSy^aVO YzC0X 3J0}EUiqcJx-99:t^D-Tk@Wd:lhWw' );
define( 'NONCE_SALT',       ']`+Rr_mO,swvvqT8q:+,D8?@tTHq+YlmrJDRR%2OZsB!La0wmqMw|fn7qHY )zyw' );

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
