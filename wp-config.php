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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'B[2~y=EPQX+|ba[wdiE?TEnhi=0]{fj%[!GYKqy~}:ID(SvS]3sGQlzVucaA8Tcp' );
define( 'SECURE_AUTH_KEY',  'E4pZ$2#^*6Y]S;m=2au-~8M%g?}Q6%*NpUw VJ,Xa0o^P.U-T5UM+/QO?oyChuft' );
define( 'LOGGED_IN_KEY',    'U<SFY*_CadFb-lK^PJ(XQtVJ]a=28^vVr_bR7&[)nULRe@2rTj~YX~Rdr2|v89=Q' );
define( 'NONCE_KEY',        'E*X?y;$dx6!Q0c]{+V%T7m_7Qe{I Po`*&-ngwO^Km;(hp.V;_k`!_}b~df~xJQD' );
define( 'AUTH_SALT',        'hJCl g.8)2[ohf-KkP&Y{b)H1q%F=G? )!8=l6gh!],pZ+1dxy[fUVu{.s$:F-$j' );
define( 'SECURE_AUTH_SALT', 'yH8U`qa6<xv#c)Q3jha?iOuq,o8wV#2fxc)xj%b|7>B/kB/Z{sv%O6!&zhq5m}$v' );
define( 'LOGGED_IN_SALT',   '<E.hp?&tTPq6H->`+rbZh<v4D$a)kVHZPg:It9A_VG<MN8Gkb<kmMx8[pY94Xx2f' );
define( 'NONCE_SALT',       '%8S82{ckS&wAiTCT.QY!xRi+rV%9d<UPP+YZDkQ`br36n=P&8l`}~QkH(@^0v<bH' );

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
