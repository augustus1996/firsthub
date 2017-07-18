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
define('DB_NAME', 'newmodeldesign');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'r^;~{ ~NEJtJc`ZR+)T23/h}vyaY xjo@1QYsD^jPeW)qb6CNu7%a*WyFv%l@kY}');
define('SECURE_AUTH_KEY',  'N&6BVPXGPs{Dv-BeyX&Jplh%13;<h`D^zv9Ur(6o[m|X^k-#vfn^y6D;D~L=A;S+');
define('LOGGED_IN_KEY',    '=9j7zje?|X>lRsdn%QVBWU,|j#up|/*Ws2$GSM--L+T%R95aT@Jrk8fEM3Ti}R(H');
define('NONCE_KEY',        'CP4,ZB5#IMqfLdy1E#~NESe <.>&]]6(ORk&&/Q8AOm-vaKL[=ARZNg*Z6p`-,41');
define('AUTH_SALT',        'q; Dc,6VLiDF-p5};;T`lsM0gUuIBzUjUbAE--$@U`y~x0Pc5N $7_ye^[Z)JeVJ');
define('SECURE_AUTH_SALT', ':sI[h[2xOu$z#OY=?.`t5sjo@YI0)=6zYpT}$]dal]{[4!+<_PJ$GcCD D$GZ02{');
define('LOGGED_IN_SALT',   '>z~)!mhm!0s*dY5uT24P=!@p*dmC>:7@9kY2(Uxy]~Z4X85Rh{UVHH[_z*,#9+gV');
define('NONCE_SALT',       '1e7Of?^M/~i9R8HmJ{(G%L6~TFzLnBJx%uaVSq?<%}p!or~dYc=vC+p8mb1oWT;.');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
