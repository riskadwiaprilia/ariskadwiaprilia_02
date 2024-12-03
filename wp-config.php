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
define( 'DB_NAME', 'ariskaaa' );

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
define( 'AUTH_KEY',         'C+$1Ho1m8NI?3/puf#/ P&x9:9wsz<e6)0%p5_1]pm9Dxll3 ]n`<&~a+CP@plD`' );
define( 'SECURE_AUTH_KEY',  'pPLmD-LBj&.o*/2XwC|jA?M=+@2=wz1=wJD.59@_7|7)K=Jwn]q Z:1nG)nHba$j' );
define( 'LOGGED_IN_KEY',    '4kNXJt,,pv9b[mqSBp|MQWa2tb&d)X:Oqi7;!|W>6ZZC;d{`#Az2vQ|>VG!ZZk7z' );
define( 'NONCE_KEY',        'Aj`LQ_ cS=Cabp5s9tvm1M7Ab|> E*5*iUNN(l;x?X|k {#OWNeYN&26jI8O}U5,' );
define( 'AUTH_SALT',        'itO,JLPF1:`^IL]dJYEp(mpyt@+o]f^fFa!f#<dGdjMYLeNwk~#=*c=z/.NP%a{8' );
define( 'SECURE_AUTH_SALT', '/?[4rm(mB=qI60x%H8x5mbCS+%GWm4^@ArJTNv|WQeiM{^PNO(d$5QneamfT`{cP' );
define( 'LOGGED_IN_SALT',   'vyRzXEM^$`k`xH(:0n(CI(!k+RVsDcEcF*7&=~zN_u^`,DKvb+h}BrN@6El]nn>9' );
define( 'NONCE_SALT',       '7^Wf*$HZs*.}QCY:sa6{2hQUVzk+%d2^cAk<q((Z~V0o+8og(@<(0m`P*NssWYg5' );

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
