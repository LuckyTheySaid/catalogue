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
define( 'DB_NAME', 'cataloguedb' );

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
define( 'AUTH_KEY',         '1]stV$@bUAEpQlnhzNh8IB93.63w8;lu,;<{d`waI3rhh]wOio{IR[#rLySM)0@3' );
define( 'SECURE_AUTH_KEY',  'y9/HPbzcQTKpp?+&G#VGxb&E=p24u~?NUP[1H%Ft;M:_;upP8qCRlCxfL(]V#g!7' );
define( 'LOGGED_IN_KEY',    'dks8J/4aJH5!_*>?xoK-FH095tI2&DPdYyLObS[D=loIZ70siFat&7MpyC{_-tx;' );
define( 'NONCE_KEY',        '-*GSj0i:]W-P6x7oY&pj?3LDy!J]+xmpnb#/EvGS,=ms||8Xf,<P ^swx xCP$#B' );
define( 'AUTH_SALT',        'ZR sugl~6-7qAki(iZEp!WjTPo@eN]3d1Sz>KKn&r/hhaYvcL>X2Oo~cfdi#O(d^' );
define( 'SECURE_AUTH_SALT', 'h&QI/58J*VtNX]0l:S{wS ) !k/S`po#~a0o2b0={xnggcilaio^}rk`3m^Av#( ' );
define( 'LOGGED_IN_SALT',   'K99>cz9HYViKCcXdNEhx/ohfvxo;rAeMwA^:SmsbfrFZ6lmvXKoy5IXS9E?ddx^[' );
define( 'NONCE_SALT',       'QopKTABZH+v]vz0W5i+p(&AG8dTCP=U@;tic2?<cE=5M7w<B^9UM2agKJWW%r,Kd' );

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
