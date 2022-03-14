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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '7wYT[YeX8<W~952xqy/4^IG4/)@sU*8hFQckIC9AOzD#J_SyVQf1^.aX1_.O!UdC' );
define( 'SECURE_AUTH_KEY',  'LlA7OpXsW=9+KjU]|~S~YOg@?NLc)g%RKU,Y$.:jP*>iDFkF*j8)g8/{U(?wqO$e' );
define( 'LOGGED_IN_KEY',    '5{=|?W3459k69$hz(:k~0U`QIzT4/Y~&Pe?Y`Ip10q,A/9qlALVoiC6mtS]IT7E{' );
define( 'NONCE_KEY',        '~uP~2MLCT3,I_b@P%3;4p1,C_vuhy&^hjbTb=%^gdkJufQ$).{!~*BM(TQ6D}(<t' );
define( 'AUTH_SALT',        'p/E4>hWB9l@Y,o6ZPZaEOD0WkK`fWEQe}$3f5uh~IIC&gUd0fs|f.tDdyndrs{47' );
define( 'SECURE_AUTH_SALT', ' Uvy!-%$KI<89,a.SO~[_-tI76Esq~+7o7lwC]nZ6i~xb 8St^euq;K;r,b~r-[E' );
define( 'LOGGED_IN_SALT',   ']4;a5=`z&iFW<BwK4kA.XUyyti0_6wQRMp2r`]RoH/pYTlih_s0cajq()tCYb67H' );
define( 'NONCE_SALT',       ';Y#7>%>pnpo}SW!,V#2&Rz:S8.FlgQdV]IG78_SJtfDq+9H#^<%(rfizlwG)jN,-' );

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
