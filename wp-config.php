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
define( 'DB_NAME', 'delicious bakery' );

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
define( 'AUTH_KEY',         'rq8t3@?oOZF&KQRC/uV}-f4x%76e0qLyjo~i0P8TRTrELWD gF_dUlNYzA)iRW),' );
define( 'SECURE_AUTH_KEY',  '` 0y*]w,0!!*:2EWGt)6jVo5g,][}5QUlL#yS|*zEX%Ow+hq-T<x@0Z_B2m9xkLt' );
define( 'LOGGED_IN_KEY',    '{,q!e>pcy.w472>@c(]Iw=b/askS-.]NN(l+lfkj^{ &x_y^<9p>C&]9dofsH]Qy' );
define( 'NONCE_KEY',        '.q:/-=#1L[k&ZsMqQM/vp`3dbtA1FV2(4;QWYAhHXfaHTGwXt$p0O9V(fi_4C<?`' );
define( 'AUTH_SALT',        'vAWm=+xedQ1BUD^MU]N0{t{#Zfpxv2>yPX9C<q{2Ey5WF83Ik~zxeGu_6dz~LhzF' );
define( 'SECURE_AUTH_SALT', 'GQ/w~if[h-;4LEg^*G4mAi1aH.9dIW )XL>&uq&;ao`B_QJ=H{]kkR:g[U`@]<x]' );
define( 'LOGGED_IN_SALT',   'iImj~hXroes8+A<VlfL>IL,BcSzyy<Q.G]dZSOQ 95<?OTvzoNo2B QXI FDlc01' );
define( 'NONCE_SALT',       'L1!V;>6,IrXKeC^VoF{WVv1Jc}|/S/3 `N5WbFU+KU<iY$R[S~q]K8&jSup1k;S+' );

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
