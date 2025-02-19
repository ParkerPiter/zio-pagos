<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'zio_db' );

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
define( 'AUTH_KEY',         'si&tu>9W-E%0LEUTa+o!Gx>o%_YHNY.V[|gELBf}VOp)$cL47Aso-M ;}^HJzWsw' );
define( 'SECURE_AUTH_KEY',  '5:8YH{wlSxpVnPpiDbuk|OemQ^B,(^~|OKx)h;h)fs*MXa7wOV%*c<`r1h-OH.(V' );
define( 'LOGGED_IN_KEY',    'Y)N*4K=2GThg2 Oz_:Lk1?I>-6H;;NT:@}>S6ejvSZr5Q(5,+rv,$Z5+:f{=B2VP' );
define( 'NONCE_KEY',        'jyd`?f{b8N!+J.>pjb#t}3eWz{0=/dZQgF_UMIMm{eOkhHb!w3GPhiSu17oj$5;L' );
define( 'AUTH_SALT',        'QfxY xbJ>MjyU./`Y.IW/|Z,]w]iKtPm54Oj&-H7A1<-`&XrxT+$%a%osXRQQO^f' );
define( 'SECURE_AUTH_SALT', '6Sz}R3qaHScCpIr.0?NaHope*%KJAu`we=B[` zSHh>j}F|b4XMVrs+1Gr,o|gu^' );
define( 'LOGGED_IN_SALT',   'V4dgWUdPk$Y%`*vu1B5{Hk!+#t=*Mb=yX5AGd0::H H37; {%`Ix]r!-`rjPJEcH' );
define( 'NONCE_SALT',       'zTu<aLf=*vgR^qH1D7j4;kdJe1[eD&20*IU&l|z(2<F1=rL[m1sfk.4YkbkU z $' );

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
