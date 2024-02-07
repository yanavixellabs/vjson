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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'xFli+yaxYDt[nI>Ma^b$%wRsT{V;czU9{7mErtLbes*Su/Hb$gH9yfs$~W L$J:_' );
define( 'SECURE_AUTH_KEY',   'wh!-~`Czm&b>WFDSs}oZW>I6}@/$^bg9w `E+,Xf!F8*8n+O:|hj=JmtP{9=f]*t' );
define( 'LOGGED_IN_KEY',     '4z ^(mS9o!h%;nn-&b!*,N,1[P>B6KZ$++q)D/Zt`^,p7 ,y GZG=ETb}JngMIv;' );
define( 'NONCE_KEY',         'bRT6kom~)t5*]~7K(@iT+~WP1SwYqWYoGe4^?IF_A6<DH+bl},,VWW_V<@&s/`$*' );
define( 'AUTH_SALT',         'l`wBOC.j|_h(bH(!l{y=u_Q7rK}J-k{jP(Zr`oe0vvwm=O}}j7Z2RSedXL[yGU{S' );
define( 'SECURE_AUTH_SALT',  '5Ipj!a#L2O=tFG7^P)4Cx)U)_#*=_bMR(`Q0r@^>8XXv<*bn$)=dr{D/T9tSI=B<' );
define( 'LOGGED_IN_SALT',    'ZT%wbhnjR1@2SA1iw%C&W!ioq>Y}3J;b?n8~B3>FvDsqKPLV9d-n0kE_=WlP0Q|R' );
define( 'NONCE_SALT',        'I>Jtls&oZ#K1;.Z9x1Ie}^-B7vNTG.`d)gO5%BHvs{%.%|%hOz8w_Z0|5, [@@qj' );
define( 'WP_CACHE_KEY_SALT', '-v6+!9PH[@uNNH^*C|PQN(r$~bk&|${{7PZ_mQtQztLzu~}q_<P&<A[yp.i$ sY-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
