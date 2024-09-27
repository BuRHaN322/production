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
define( 'DB_NAME', 'production' );

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
define( 'AUTH_KEY',         'ief7vKpH.-PRnx8:X`=;E=sT3,3VPa6X#G~50G!?GDVY5OgWL6~BN{R$J|1~(G).' );
define( 'SECURE_AUTH_KEY',  '7VR(`pNn#z48MEPgH= Uwwlv s=5L+D]7i|gwm%?vLY-tONvr%,4guAJON~7bSrP' );
define( 'LOGGED_IN_KEY',    '44ZBr#n@J;Ev!DJMwA4s*o2+5f~J0,@:XT8B6+:C +sx<N&U0I[oPK8D~bh4f7^w' );
define( 'NONCE_KEY',        'x-wc8C V&Wnskai8x8|yhNSRev8zZC7N@FAUwe?Gi=(Di]GKX;y=[J^( :BlDEEJ' );
define( 'AUTH_SALT',        '>U?^N:u0AZQp_YL|@VHU}|F]=Qjv_Gv8.vAAdgRL!r!P&0U;(%>{L[kxOeH?]iO;' );
define( 'SECURE_AUTH_SALT', '8u%1[S[<hg$^McrQ<p}eg*Z!j=.FB=(*olv,H|WZ <r(QOXo^}jy<=8]r`csa/m5' );
define( 'LOGGED_IN_SALT',   'Hl/)@3Y55A^lehrq#{an)yM)-1/o4*K52KWR01z[!5`oQxn(d7^MM]E#4#P#6<my' );
define( 'NONCE_SALT',       '8]uJHSBJ`xn~*o[Sd>_g2OY8i<#Z[^LZtJKV!Cs=(:l;ic6[JxxL42d#Ojq<leHO' );

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
