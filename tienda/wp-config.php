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
define( 'DB_NAME', 'tienda' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'qX??;4&V|Qbo&?1M~++@>z+w9e-_9$$f|))G0-GVA-A|dCMJ94.U2o$|ttWImG^`');
define('SECURE_AUTH_KEY',  'KU3k=]p}Id6Lr,pwF^lXRL,<x*?V,3gUYRA7iu#LfuUf-+K81?WW--Q]?H-Gyco|');
define('LOGGED_IN_KEY',    'Tir93%$/DF|ao*z&}/ XxuGIJ#~>BI:odq p=knAE>lEji6xyuH?KD8nOz8Rm~:m');
define('NONCE_KEY',        'KaBbFxO2(G8u9eCK|!8j!?K@v*sxfN5jj0/NPtV|fZH2c#=xa6.[ehtA93I(cfG3');
define('AUTH_SALT',        '3pwouE)x1%SZ=6i/dNfrE<>,iJbf3x0m{z]Ubv[o9_Xb<B@;<+m5/BYl+a :@VN%');
define('SECURE_AUTH_SALT', 'y.f1!SDm.|q;Q%fAmE.O|e}NkfH-cbku:0$I&^8;__9`5`yt-{AK&c1+2,{[WcbZ');
define('LOGGED_IN_SALT',   'sSPYLyyzD<U0m*X5|<|o3=U66->C:2C=*+D%uYzM}.B&HTB9zNq!0Y=h7E-eGs~O');
define('NONCE_SALT',       'm.|C+1_p6A8vTpY=ChDSaC_4=f-nE>]ppxmKPDiT>v:4&& xsv=dxqRJi}C+[0JK');

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
