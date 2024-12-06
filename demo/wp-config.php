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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         '^OeR~c*]`B6mD]Uf<^Aq(a=jaWJ%N9UWDNpK6x4hD_:IT#vc*36zNP#8=nv?$+L)' );
define( 'SECURE_AUTH_KEY',  'SG(Jq6IS_Y&$(96-K;xd6cBswzw49JP!d9X9k(qy=,V[[=!d>arW{%!y`/wnRe<9' );
define( 'LOGGED_IN_KEY',    'Q*et%K&jnE7x]yCGRO7<}Y%5>%#tUvr^g9oF%gwFlh-T,FL<av{m]WF|4n!:RT6z' );
define( 'NONCE_KEY',        '6X(Z9t)=Nx:.TD* Pasu9]*neHR<Vh~Y#W~k}R9k|CG!^*,uetSR3Y<~AO&$jyDJ' );
define( 'AUTH_SALT',        '@|vw(Y<~u9S`Xn.>Lafa)Qnsv. ?DwZWNWT%O+X?^r@.n&aDLXM?D_q&l7D^A<$G' );
define( 'SECURE_AUTH_SALT', '=oEyODwKr12H^$3hLw_KdR`aOWF:P1OF~_)RkUG=8BRe!qX~&DFXp)^*l4bSu U!' );
define( 'LOGGED_IN_SALT',   'mHGM2~ihI.#ibK8rLEs*mW!w:(ZXCbbp)o(K=/<&6.y2T9Q$PO4T>DLeuDmMrbxl' );
define( 'NONCE_SALT',       'p/qx@EW#4H7E/Moy=~]8Fo&l#J|rB(=d:+S*IqPBQux_&8|$o(48e+)@o6S?h]q:' );

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
