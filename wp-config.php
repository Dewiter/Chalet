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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'dewiter' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Lapin1997WP' );

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
define( 'AUTH_KEY',         'j@%k/*$nhnf#)g9?F:+[W^*u_L|-W}{rG5{&TPGo8T]q0!K`LuKOi/?zO++?> z2' );
define( 'SECURE_AUTH_KEY',  'nPWcAo,E8%vFKz9{O=$Bb]ZR.2nDSjpEXu}IX$5E]r%a^U6z?@%.6V<<w2<%:d4B' );
define( 'LOGGED_IN_KEY',    '#o<si?E-+Vj~78>Tvy}>8;`lG+/x|6l8FL>>@Fi#LQggWEJl%*.BQ0gjcA{E,`>q' );
define( 'NONCE_KEY',        ' >Ppj[K7U9_5vejjbO09p?>Q=?)/Qp,RIvcD)iK6ia!L^@(Wh>,&CXYda^c4A](Y' );
define( 'AUTH_SALT',        '6<Nb@5NT7AHS<.$ih3y0l^kKHv8AtB}$$JTvna,3DK}=elq$?UF;-o4*36& (DH ' );
define( 'SECURE_AUTH_SALT', 'XOI}^dVy.K!@)W?s0yHLX&.+CC9t9Ru|(pigN>znXM|2/IK+^m?G7KrS9dmx/#F(' );
define( 'LOGGED_IN_SALT',   'g1*dMA)grs-FEd< v>*a`T/Ds`x 3MpYTYB0VP/qZRW*C.|X{olGQofw8:7A0&bf' );
define( 'NONCE_SALT',       'vY%Ka-rw%Ld JZjdW0Neiz|e^W&[08(F,ZtKi,HSysR ?;#@`RZ9v+L*eRaf;ZV{' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
