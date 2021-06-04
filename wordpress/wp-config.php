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
define( 'DB_NAME', 'wordpress' );
define('WP_ALLOW_REPAIR', true);

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
define( 'AUTH_KEY',         '%1wkw(USFCD==D8+2)aA]gKm{wIZ*<xD:p+5Zr{=%`h^1^<FXMYauFzXI_~czaCs' );
define( 'SECURE_AUTH_KEY',  'qQ1rPYT8!r9VaOdq%}Y,gs*rlZ(i:@ms8{;_&BZp&HBSNVF>+9P!Lr=3VBAX&6qt' );
define( 'LOGGED_IN_KEY',    '@=y({S<f1N&.q_kGKl@nqItV_juuB{9F8;&3XdK0O+n~IS18.zb7KWY9&)0C!LPV' );
define( 'NONCE_KEY',        ';4i6Cs;&Ch!N!fGP)*fV88|S)l--E@Cg_--N?RbaolII0{^$*7~qn/[<JWk1]s8_' );
define( 'AUTH_SALT',        '4Y[+ynJbKkQhAi#)xNCd7fUdguMHRv?>]xE._00B?=02h4+8J]KS}jshJd.ypt7I' );
define( 'SECURE_AUTH_SALT', 'R?>=05 ub%HRNZ}es3!8`k!k@ybZDs&}c#.YrQ]vK1XW^A/9Svk_wbbx+/[gHHHf' );
define( 'LOGGED_IN_SALT',   'VI{(-b>dZ$Gp]kEZyDmyTn2-SieD6V]_3>WWSV*gK@h^nY9|4Jn(?Qw.9dUGqq?L' );
define( 'NONCE_SALT',       'ppi%@7@`@`Wj[;>il_~x<J*XyKSEL1SB(3fuD*<Pu/.^wJz?T(;z_gTE/v#9@6F(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
