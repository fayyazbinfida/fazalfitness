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
define( 'DB_NAME', 'fazalfitnessgym_db' );

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
define( 'AUTH_KEY',         'C-v<op,kfKBJ5Ku1w_x8x}m0rbkDY$d913LD@Mv>MGGB%)IWiI;c?R{gVNue1Y4w' );
define( 'SECURE_AUTH_KEY',  'l<~y>HDmXKnxEKOYp?MmQ3r^S>K=9KiWr3} c_!|_^9t!@{~({@hIP!kBJ&`&nwf' );
define( 'LOGGED_IN_KEY',    ':NPu-qe*BimRNbKdGSr4b8Fs6)XfH%#Ynr(&1#ZQL{_i/,.MZcj/:yJJ~+>eH.K!' );
define( 'NONCE_KEY',        'K!`WM`r?,ZV?#Ma-4yBC( YG__ZrGEOOL%G}aR@C^<c{,!vnl*CChJXC4N0*&wbH' );
define( 'AUTH_SALT',        'klb`/OEz4mS]pXtDb[:?aQG Kr66q[5C/GP8JflvD<C]LuMJBNJO0;h)rF8c5b.x' );
define( 'SECURE_AUTH_SALT', 'VPRaMF}w^G.#U^F]MxPt,ns?pE*#!IrW)oJEJ0Z56:0@_3#jW6luC kyML/q|KF=' );
define( 'LOGGED_IN_SALT',   '@:]`E80.fc%_h<-@x2%5v&tm^p7!ZM_Ye`Dj~dBg1@z5-KRHN7{L~GlC9umlG3q4' );
define( 'NONCE_SALT',       '0_ZzX]9yQs]L1E o.Kokn{dg22uN}WXpA)I~RhMz[r/0?UfiYnpIw>tV-+XT/I_!' );

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
