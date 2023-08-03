<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u693018133_5jIiq' );

/** Database username */
define( 'DB_USER', 'u693018133_OFgqi' );

/** Database password */
define( 'DB_PASSWORD', '5JWJEQTKcT' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'NE0[>g%(qU^W,V2].*7y37@@F[k03n,v{uahgH8@d>Qh/&kK`?d?(.<E0v@MjJlc' );
define( 'SECURE_AUTH_KEY',   'YS}F5yl8rYoPFR`bok ~]m7Fe+OC,AO~w3yBC)-gbGRZYkx-?8g>z2 L{P0O!dz}' );
define( 'LOGGED_IN_KEY',     'vIRCi:%78T.0SPq@=5M!ZSG#ohVx*JaxJ0<<}((iKN>MWSXUWF|VE2K}_H|2V|]b' );
define( 'NONCE_KEY',         'lxLpeL]80C5Lr<rziJg_HJVUvwe_ Sd;;6fFU(*RTJ.;&`X&{,4NigA(Y0AY W<j' );
define( 'AUTH_SALT',         'UStxQ-&2fyPy5h%yMpvF>C2TJwJ_CknJ[U<B1S%:@(lvpn12agMt4[77$)~& Vl@' );
define( 'SECURE_AUTH_SALT',  '=V[kaPF%F4Y;_9UFx0$D:By~X>Y}dQpiO$ qAQn6@nz*P<3 S.ZtAXZ*Fs@oG`Ez' );
define( 'LOGGED_IN_SALT',    'aom,8]*U`RkH&hj#$y9#+v32ZGA~Thjr&T/w9qC{dRyX;]O}kZ}OV]0PclvX.(=N' );
define( 'NONCE_SALT',        'MU%MAqL&x/FG`m->hJYy|]=99jd+/.rxi|8yaPwx[[FGuQLn7cpI38-RH;?FXxC{' );
define( 'WP_CACHE_KEY_SALT', 'gaeN]@(^M+PA[tDb!%(R#E2!#(0}X5BClF!fW(&J[*$`pq<9R($!#Ra`5%c(~&^J' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
