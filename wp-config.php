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
define( 'AUTH_KEY',          'y:DiiSx!`TC^Dc`P;)7L+at|7lMyA+OQQ;VjhX@{A?2oK4si%a8o#:$8A<,.Q?J<' );
define( 'SECURE_AUTH_KEY',   'im]Ga).b}0,121 +XLWc9A>5lZa<V(PTo7a6UaQNMzc?DYE(q?j`,v)rh,eXNg,`' );
define( 'LOGGED_IN_KEY',     't*OB7LDybH,nSNa4ik8+_M;MU&<7eSWJYsZ;$/Poyc!L0vll,L^1[[fU3T]0Zi8e' );
define( 'NONCE_KEY',         'Cl~r6}^RGf22#&%A?e>2s^]D<-J3=5h%+LsR]+e%4/mvLi`U~+3{`B7V/!GJ>^,+' );
define( 'AUTH_SALT',         '~E#xsq5R7tkdtP@<ZhX{_O!~SzyWP<PK+Y$n&s,YF5 `.cj@9{(cW]d=>/@CE^;[' );
define( 'SECURE_AUTH_SALT',  'H~@_!RH*aA(S*c2pAXsr;yzZ[P1?BCZwi)5Eemk~O.|DE(p$^~Y5no%$$J6.`aA*' );
define( 'LOGGED_IN_SALT',    '+pkN}wWfDlRRu/8}wJj}nu_xy{[I`B{@abAa8*]4{yfn~o7{SKZH)w!L474pb43}' );
define( 'NONCE_SALT',        'X[>/6-sxwDA&{=P?m?me>4)Q:@:.Lj!/Hwzz531zoJw1zLd%Y&suk5+V +^#JZ.p' );
define( 'WP_CACHE_KEY_SALT', '8Cbhu:1c;}<lyBD-aKo=: _+<<h1n:XG%JgYS@eKhx!NkY9[A60UyOP|ewk?hZYJ' );


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
