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
define( 'DB_NAME', 'amritweb1' );

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
define( 'AUTH_KEY',         '7DPUF53AeL:j91Y.]KDaR6lqGUc<ib`Th1iEV-6O|e1ZlBQb2vdNV1R3Vj(1_0:j' );
define( 'SECURE_AUTH_KEY',  'U2CDmzH,X3HH{fhK;TV^5Pk#:Ug}7y;1~ECam8JIFs-LiNL_J>I([`46pYnBC{Hb' );
define( 'LOGGED_IN_KEY',    'pJG!*hdE.+Ngf-DjWaX>%LyEnX3x.C//zI({sGXB +l)^ qfA$3{^FLI;2GLaZ?l' );
define( 'NONCE_KEY',        'dyVi1gqK?xk&LI-Le7T#/LTGnt~R@v|9,.x^+2!Yr6b|?%r~]Yg5`BzVb.jlk#iW' );
define( 'AUTH_SALT',        '*pw+1kp3s.dzl|_.(rb+R2F|mTC7J[SY3vi^D&zY9I$%t@zF:W+F5G_#SMK4v:2q' );
define( 'SECURE_AUTH_SALT', 'rri-@+DG r{8oo{-Vx4Aq,(p<N]Y X.q=dLwZuU,WPO*v*_t(iTOia4zKOA(J B~' );
define( 'LOGGED_IN_SALT',   '/]~`N(|:tThz]DLn,7!7$m&`FS}_f{!ht[1[%#-P.dMR]w0/wsNRE1.,i/(/]2>w' );
define( 'NONCE_SALT',       'xC_e#,ER$dtdU8Yx#9hXeL@8}p-GR0~@Qt#6&},/s,`-+JFirPUqt(itL>6}<:X~' );

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
