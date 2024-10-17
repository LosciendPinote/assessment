<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'assessment_test' );

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
define( 'AUTH_KEY',         'PQxb#:?A7rt{=]>1n1X=znA|`J/M-F76=f5a$_xrq8Kw;W/fwv~+F,,014b]dKtZ' );
define( 'SECURE_AUTH_KEY',  'MK9|.wEUP6c-=qOK$0907YuL~#8XJ:t7la3cQ-_v1&X?d<!rTm$Kh^<XROsG//@Z' );
define( 'LOGGED_IN_KEY',    'fq~EA0-6@XaEx3^#=(8NpC#]mRFnbLr`!6P(. &/mN^5JR4pqo&f%s1Sf>0I+VhP' );
define( 'NONCE_KEY',        '()ubjEYl_>rD8_d9VBjxzvbh1C,3;j:J#O#MqUyu(!l#u=29jZ+~ymq`i8C=.Lpi' );
define( 'AUTH_SALT',        'J,?2NhZW*aU^c$KF|=o1N]Z$LTp@3r;9jOe5lKv~(0aH%yb_7zgVP$*-v`PMH,Ev' );
define( 'SECURE_AUTH_SALT', 'PS4#8CgeZ$6}Zn@8pnLGuX|jgzuifC%PRS7;@;6m02+QSf&3zNHQ~V2egF4$uzd_' );
define( 'LOGGED_IN_SALT',   '>k-%E`B$CC&>/=:Z}kNQ/m)TjW,(/WgbFDa0$;/^XcuaPH?&f]PJtO28w}o-FJvd' );
define( 'NONCE_SALT',       ' $X.eN6>bauM6OJ/F(t$`*2)#[g%yR/UB%arfv| +e50:(><G*0!$|n$z o,HpIj' );

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
