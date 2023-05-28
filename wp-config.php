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
define( 'DB_NAME', 'techsolution' );

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
define( 'AUTH_KEY',         'j0r9f^fOV7%Wo4R*_`7#*uWPDL)Uz7a>[YpOIp,a&tjZ:&D*nfqTQ#h Fe,*;:XG' );
define( 'SECURE_AUTH_KEY',  'v&|Q}HpQ^_oSIjy#{h_|g T3|YtN/zSil&k}8tsR0*#&%_E#E7S4G[Yq7lsG3CD*' );
define( 'LOGGED_IN_KEY',    '^Ctu8d$La]x*?|15I_[<^SDVcon2R.vl8h.3B`dtHUT^_!<m,!#9^qL%eIg<jaot' );
define( 'NONCE_KEY',        'l4i}g5_ !`)RisUEk=vdW9;L$h,`.4rEbP_v$9.5py:z6XaD:i]HLB:B<vJZS.zs' );
define( 'AUTH_SALT',        'aa/$xU!+OMEXHrnH7tvkx&U8KAIaE7E0n8n.kKA7 0@iLd4;YehHb}U/o3SMLvTU' );
define( 'SECURE_AUTH_SALT', 'Xpr(Yy4@%{VL0yXCnh z7_}k588A/O#%jRINsH[}{C<1gT.3M7IzOcdz**+C!qRp' );
define( 'LOGGED_IN_SALT',   '=|3QpGMPaIq;PNqJ<w01nN8!I5q_U!mcv.iv#!tAi=,R{D0L5HSz:V=ov`=p7m&k' );
define( 'NONCE_SALT',       'F <^dUzfrjZ=&na&IWb#{b#P9<qvwd<M5Cs{2rkYJm(-l3vr:N1<oKEaVtT:qVhc' );

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
