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
define( 'DB_NAME', 'liwox_db' );

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
define( 'AUTH_KEY',         'DGatpV60R8x3Pw>iISZt(O(4d7<!wm/@@|nwxvl#w)CP?$ K(u:$}KK7#+iwSZ0a' );
define( 'SECURE_AUTH_KEY',  '84v@p1 1 o6wI6*+A8ZM{}.iyGL<qztZ}}ZMC5$G%cI3st@hN,TjYc=UbW~/ $0P' );
define( 'LOGGED_IN_KEY',    'C;qSX~G`w3@~C+Wk^4-,I@#%yA*U_wAq9GYehp7fu#7>Lbs~8+}?K(->XLg6rsO}' );
define( 'NONCE_KEY',        'B)n83-VM8oKaRqssYE5zF.0.;3s!1fsAu #.t8$mo]=xCrJ9,kgb^$YOTTjkNhzY' );
define( 'AUTH_SALT',        '/jnPv1WTR&:aJ W^cM`YyvpF*RnP)WSV(R?=p9>t$ 1a`p@AVy4fVRwZqG|A:921' );
define( 'SECURE_AUTH_SALT', '?-ZZfB}yXAo,42(*PI#S L#-YaiFc&L_mZ-KdcA(u+,|d*@1U7*WR)MP@Ho27Z|s' );
define( 'LOGGED_IN_SALT',   'SVU_gN.<@@gp[&2HHxi_NroCnDrEpP0-I[A>}^[0pe}Obr8;1zw]OVeR Mu+Q53z' );
define( 'NONCE_SALT',       '4Bma`%#Ze|0Jno?(:O<0XKe|F5=-<c2{GYF5uNn=QXBM7if:U%porzeT2C~D!xUw' );

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
