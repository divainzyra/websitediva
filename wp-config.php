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
define( 'DB_NAME', 'divainzyra' );

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
define( 'AUTH_KEY',         '2ow,3}v8E5mgA-nLdq)&w]Ug9ssw#@joV7GT^ch4LGPb<:LcVOnyv]S5.e@Iv *S' );
define( 'SECURE_AUTH_KEY',  '!.,Jc9_9Hfpr;F`m41/G<`v.Ow5LXSLwYB&}0_7|D09aPs##DX(:fN,xQIvK-kCi' );
define( 'LOGGED_IN_KEY',    'a>x*0.Osc3ot|}6f8dZfW. /)e#z.IF%pE!/M*i7}&0tvQg7`5TY*E7Qx4 v;<;A' );
define( 'NONCE_KEY',        '+&,=uv&,CjjHWRE`Hj{*I{:;}DmSv6v-bN*>BHDF>mHt4r~/po#n)_yeVC9v 5EV' );
define( 'AUTH_SALT',        'H[S wpTK_f$ETUcx>Z*Y,Xk;^xBo`iwJjP_e0wH8;v*pP#sOjA(gO[$H==ABS`UB' );
define( 'SECURE_AUTH_SALT', '%E=(}]K>=!,M-W^6RuLiqH&Mjf]6GULWcS@fgB@o,Eq#:|{regdQXZg^;ud-.:>#' );
define( 'LOGGED_IN_SALT',   'lj$]k+m^:+n1{PumC?_gK7G&egyunM31@mkL)WCP1P<5?%~|Nj5/egW %/F(HK&/' );
define( 'NONCE_SALT',       '4uuG=gJ+&e)^i##%(gnApr8UKaNPsR.6RC8qLBhDm*eisC1}*ZjRMARH{K4S!2yc' );

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
