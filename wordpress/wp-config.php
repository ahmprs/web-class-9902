<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'db_web_class_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'P,blix*U+RVy3^;~_ {[U([DfC/|H?E<{ImdGf6$4B}MRcIygPoFzdtumJ44j{9t' );
define( 'SECURE_AUTH_KEY',  '|w#F=6l1OJ^p9X<f+7gFRa3%EVB+lZQLu#ngkDt]u?:pd.S/2i%HteA`7a1ydEn7' );
define( 'LOGGED_IN_KEY',    '4:Bckc<K8<Q~4H_5]:8u[EK0I!.;mvhV!:m.bX@2y(:|]J)@M&FH<<3SD&j3rLl,' );
define( 'NONCE_KEY',        'ifQ83 |*G?:dXmHCXWwR!3A9k^8&wF$%u6eqR={C9hc~O=p-]Yvjc-|8kccW{v?M' );
define( 'AUTH_SALT',        '$cF+F`QYy5_jnT.M#QA8Ytfv:ZWfgY7m;lupc#>a2%:[Obw7w+62zC.}<MW%:P1y' );
define( 'SECURE_AUTH_SALT', 'sVi6X.s-f^}czmLd_cq#^k?=!#bSM|q;SvV*nUkB.p/SB~B]`Of5g@~7D6c?,v1Y' );
define( 'LOGGED_IN_SALT',   'Mq<R#QYt?Wy`5l?t)~d15tZX)q}bp&k<+M!Ay]Z_2-rDkOiq`&g7<RJ@iwl}2B&c' );
define( 'NONCE_SALT',       '=3VUPa<QxO2^pPA}pMi9y|O%Y%Blm`Ke2@lS<P~FI{eWitB!CPvzD4[ktX;o8dqV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_tbl_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
