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
define( 'DB_NAME', 'blood_donation' );

/** MySQL database username */
define( 'DB_USER', 'suprodip' );

/** MySQL database password */
define( 'DB_PASSWORD', 'brx3dNVooGBo08d2' );

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
define( 'AUTH_KEY',         '|o#5c,vFNaE9Wpd4}IB0.xgfq;m7_;XtgAh]ctl$X!6U2<OaGId/L;FUTy#.j2<g' );
define( 'SECURE_AUTH_KEY',  '67z+).,=c*.!rH.nKoYeT$dO>/sit|-C4%0Mk>g5@psabjwZv>V<oHRUM*SVbwkk' );
define( 'LOGGED_IN_KEY',    ':6l^ *^QyA6_v/cJQO$b>L6jXqM:GUN1*Z1Tnz>H?/</Vvv0uxNK`Q!l)AE2((m2' );
define( 'NONCE_KEY',        'f7QJM.$PW&&;IT)!5Gm%Unp}/V$L2,-#.Q10Pb`Nj|C|C$:tGhiEvWN|Du($kVg>' );
define( 'AUTH_SALT',        'U >uU2S:/&;#6l7PBq;R+)x#HW_Rk|kvraA<gOF!5ml7$jumk>3-I,0R_{y%Oq&2' );
define( 'SECURE_AUTH_SALT', 'H`b&4h<,91aG5&)%Z)GrI!_j.KK~EUrN,m%KQ`]g{t1 c6y@OnPIfb0`4%GIlA H' );
define( 'LOGGED_IN_SALT',   'J(pI?>(!:>4&1R4fo(pFH5j;MiRgx?=t+T!INu/~ey0J%4)p0ZfSl=.SRz71#bh9' );
define( 'NONCE_SALT',       '?yhPwoP,;7i-J4]Hc*dW9V?)fDAsi}U2,TJLHaZ:xBdo04G[OU~kX6EQd$~sX%,/' );

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
