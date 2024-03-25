<?php
define('WP_AUTO_UPDATE_CORE', 'minor');
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
define('DB_NAME', 'genisla1__www');

/** MySQL database username */
define('DB_USER', 'genisla1_wp83');

/** MySQL database password */
define( 'DB_PASSWORD', '20qcp51!.73].S.l' );

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(XuA-&WJ`Wi2gCD^ZiszH@y50L1fz0`XIW-6bX+BjRmNfFBMN*(oXH,48l}=`5&y');
define('SECURE_AUTH_KEY',  '=^8`;%(Zk$&iYQ}g.9gm3J[xtI+(-8E=2OPcwfT4V_L#f3m{0tDqG?^m}0}s+&j+');
define('LOGGED_IN_KEY',    '(0SZCC>7tc?5:g:uJ^PeunvBgjnD;}wWhY&r0@qufc+xbZJiM4lX`!Tp>TfH~RN<');
define('NONCE_KEY',        'fGEU~9h?Bcq En@F3HuFNM<2W)/>7A!};e`k87Fxn30}dicIc@:&SMe }5u2CLTx');
define('AUTH_SALT',        '*%l#71XsWXb |0#@ObXZ{Q@l_)5U/g{Z^`Gc=fXW[MpHJHKN*ioWcDJ.oiy?bGx3');
define('SECURE_AUTH_SALT', ')nYP?2F)vFufyKvqQobS GH.fbeKLq!Z-9>zMkAu3d3+vASS04Dc#BE;^gUEe*Yx');
define('LOGGED_IN_SALT',   '0t%d@3sO7T;@5i4$I+6Fq Y[iZ{Kzcfxwf*k*H{ot6ITXK*k?@s5{M[sj}7 hKSn');
define('NONCE_SALT',       ']a}c;SsdI/6$2y1%@:=rnqX.G:]Ri}=58`!rfJjya2av0S>_{b&T]sL1l]Q=!dt>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

define('DISABLE_WP_CRON', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
