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
define( 'DB_NAME', 'ammo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '[SE1B<P(k3.4iHJC@sQZ%w<nBk,`%TJO[}wkr~dA?zON*3I2JC:s.7;9tAbZpWTu' );
define( 'SECURE_AUTH_KEY',  ']@uHwGOpD8l4* H,xE>CI+ToAN6L^[o@w(fqvRb|4kTT5Zwi3(HQje`=0MX:$gE5' );
define( 'LOGGED_IN_KEY',    'UO|2X+cFI]CXprCfkGixv}_<iBSA@2g^nPa7xtp(R}p8]-@3(wwO2?{4!]:S)V#9' );
define( 'NONCE_KEY',        'Mr3AbVa(_D9!h7`+[AM.l%FZ{+AJ2b#vms- j,]]`N4Cf5*+OLWn2q;gIxG(aQuf' );
define( 'AUTH_SALT',        'F>L}~}h~f>}@Km%+u<:rw3*0y(Q~O(]wS]6b9h$b<2u8v%Z:]sCl{BRn^7r*`B#L' );
define( 'SECURE_AUTH_SALT', 'GZ4A2)E9k_NM:16s`w[q>c%M^1/d%2PVE?n#&&W*>;|R+8H%5y~{6xectyA0/+^E' );
define( 'LOGGED_IN_SALT',   '5>-H!Dk7GP2`)Q-;Ab1rkmW=czqMZbAA[!rU4FkGhoQ8$_HZ%[%M4hGq@tT8$!%(' );
define( 'NONCE_SALT',       'O)F#|qaR7hOkNFx$|gd5.x<7vpffI&u^wV1m0~_2S5fWlZFY{#0xg. =5>c>q7ud' );

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
