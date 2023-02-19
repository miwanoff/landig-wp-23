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
define( 'DB_NAME', 'landig-wp-23' );

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
define( 'AUTH_KEY',         '[Y1j`dz(l#:xD7&T:T>z!7X9RqQW|WNWav|hLVJ~r |6W%o2|TXj<CH-C=]N]d,B' );
define( 'SECURE_AUTH_KEY',  'J&@>C/68Q#RWpj&7q~`WWQTv6r9>uq>:{dZaT HWn>H/vnuR07B.v(EAz=RJ|Cdk' );
define( 'LOGGED_IN_KEY',    '-F!O!.vBt(-2>lPB56}XusO`g|n>PSFCd/C9{hb$*$b@T5K9A-N>a[]?;QTZ7[v0' );
define( 'NONCE_KEY',        'g8AqI!DHYu2_[^QJS x@d/|Iz:P-.U@.q8.uK{=1=Sv]fx]Th#rBF=HVE]2,FVk~' );
define( 'AUTH_SALT',        'Y;}[^yzFD-NwOh:8Y>,L1,>6*|TTvu@k <A5l3MPI4Fa1+e%a+T! VqB<DENX:nB' );
define( 'SECURE_AUTH_SALT', '~zGBB6i48-1b;*Rz75Daj]E!h)Mr=$:fIXf H%eGRHUv+KCf1+^b6X bsm;:L&-+' );
define( 'LOGGED_IN_SALT',   'i*V|jg3jZ!6p[Zm+3o-gfE[Yn9{,iCHUD`ysPaCK.d,6Zq&}Eq*6+876]4%qiblt' );
define( 'NONCE_SALT',       'F,=G&q)G0t6?e05W2WW{T[A1;vHE&.mx))DL@KSW H!viewv1u%hpV_`D++E<2e9' );

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
