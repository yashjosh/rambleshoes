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
define( 'DB_NAME', 'wp_ramble' );

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
define( 'AUTH_KEY',         '0yO?-2zYN5Vj*I%%G, [x^!_N>!8rumT~{[h%]i|xiB^e}srP%Tg#DDL16EtZbYx' );
define( 'SECURE_AUTH_KEY',  '+1k|fm @`mf_K[X{blWk41D6S?J!8b)<`7#GQmlXVBLY=gx4R+s5Or8 8amH*,/8' );
define( 'LOGGED_IN_KEY',    'R?{r+bA5H!1^rOV >gX1}-X~,7(!UUJ*(3tuV^|5d7}x1Vw7.:b3|N<.6DfVC|#-' );
define( 'NONCE_KEY',        'T{Qw4z@`0O`z^pAhFVwDF&pFxNKQa4;:yBlj} pD~WmbwK4kWK{c`J%BIq[qNbmW' );
define( 'AUTH_SALT',        'OL6&k&Pzz3X6l!zSM^+ZJmc:2[)Y5q#r^?0y_FM8K!t]=B3H>kH|75(1Ec#6G!H+' );
define( 'SECURE_AUTH_SALT', 'T2jJD@*2093+<](kS:ZRyUfF?<VG:8(3y+oC_04I4_LjF+%:V19g!f{W&)XE<kVE' );
define( 'LOGGED_IN_SALT',   'lTS8X:Dk%KTJTForZ,z|.nM:$.6=WrUrTT`YQw= 6Rf*QFe5bRk]lGg}B*G}g<|]' );
define( 'NONCE_SALT',       'puzE:YxgT;+G2zBWgqPe^hSded=lR>)Apuz.0]w0)`COdr>g9iQX*+o@=p>6n@p#' );

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
