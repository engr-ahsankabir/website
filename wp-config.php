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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         '}wk2eM!r&S_YWw1W06oa$TU6}@Y:kj_C1<r|`!6ln/qLmk?P#.+${<|O/,hqslS0' );
define( 'SECURE_AUTH_KEY',  '98!u_YeCQ)v}YGFGz,4}U+@VkG!jQN<]NE9e|%gRn;8K14j9n}T,;>!M?JpQ[xHN' );
define( 'LOGGED_IN_KEY',    '8!M8jjedB/4XfzB%i+,1yKu94JR[PUEel=15nN}cHo}w-|%0 e?v;/E3g^w)4eP]' );
define( 'NONCE_KEY',        'bKK dy;bx@Bs5Pg]qS<o,@&U7F.0>VkN&9z{l,gu1L)5JopU%ktKU$z.5ZUkP;q4' );
define( 'AUTH_SALT',        'J5y7h?^+hY&g)IVJKJ3tmewE/#@=kRwjBdqM.}5GBXH!n Fq:y&O[;w<ZLCDPV=+' );
define( 'SECURE_AUTH_SALT', 'mDVVf*]X&<El4p/aNAW8{F/H&sm{@TFK;5)Ta4ohG0VGI?e_2+7ir bZ5:cK$%.y' );
define( 'LOGGED_IN_SALT',   '*P2tOe<%3B}z<HAaUovac|lMLQ1pU)O@~Q}#q-X(nlGY=]u=^>cW.iLc7~vMS%-/' );
define( 'NONCE_SALT',       ')O8 <C#;oCBh?JS^vp`b?oKy.a{F-*oJA{;lJL;m#+ll)/Jop.,&Jr[o%-Efr7<4' );

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
