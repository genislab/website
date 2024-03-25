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
define( 'DB_NAME', 'genisla1_wp43' );

/** Database username */
define( 'DB_USER', 'genisla1_wp43' );

/** Database password */
define( 'DB_PASSWORD', '4kpm@!Y451S-!2A]' );

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
define( 'AUTH_KEY',         '55nxjkorbxzsnbe5ue3esecgwcxhjeaycvedm8xxkgidezhgj344gya2ouxewgmh' );
define( 'SECURE_AUTH_KEY',  '15gzhofgwp00pqma2zcejscwjlxfkeydprht3moaj79yavydwybb0xx6iylshbid' );
define( 'LOGGED_IN_KEY',    'mq2ypksvfckzmk2codj178aket9kpnmiozkbvvspajigh8mazqhacae1nilqlgvk' );
define( 'NONCE_KEY',        'lwjtipagd6ssvr3bbd4sp6ied6z4tn49cgfwgvvcn7aclesgcwzszhkuyqbrcx1a' );
define( 'AUTH_SALT',        'tsno97ls6pvjtpdjhqzk2utbwggnwth3enc4nwja4mnkxasni2uk4lkrxm5sleti' );
define( 'SECURE_AUTH_SALT', '1a9ejnerfgc4dofxl3pinlualrjxi6sxthzg5ihde9af3amfij41aajls0p5nl6b' );
define( 'LOGGED_IN_SALT',   'iv9c1dphzm9flohwlu4wg9jnzb50ewxpqaj7zpkgej9fujlogpf1udifav8gyse3' );
define( 'NONCE_SALT',       'cepplc0mqswgjkwdxh7esfe3urogtrzwuyzi6fi9f6djyc0cbvtxpp4cqm1rrbx4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbi_';

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
