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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '0Ds-P|/Qot>Vbn(A?Z/*Tq#t.]m`T YV@ksC8l5_t.k,(2p/?;DG@^Ltl8iz}?3y' );
define( 'SECURE_AUTH_KEY',   'n2,p;E:1--_jx#kx=W;CvMSQo*h@M@MOn0UwP|_s&}:,ub`M|Izf2KN9gfo)vqOv' );
define( 'LOGGED_IN_KEY',     '@J^JjS$H?flrJN.FeI+?BUA%2HqQU<s,Pi2As.O+LB;,7(x>G89Rn}?@=#rCixxs' );
define( 'NONCE_KEY',         'e*+({E+xh%/95!w&117%,*Y#g*qOl$^~#y|AkJg++E8 =7*_j5gV&b>/kO*C^T@x' );
define( 'AUTH_SALT',         '5GQg0!1lO+/ K4O$9RJ(ZIX&uN:Tq):R~EI!@DA*.}h44+-xkNXe>H|ta5DTmLg>' );
define( 'SECURE_AUTH_SALT',  '5>TF)5~@us1,Z4=6@cOlikY)Cch%ELi^]:rlC0|4F@u9t5)c,MX+ddz}YotX4bt ' );
define( 'LOGGED_IN_SALT',    '>}u,kSzKIzZO>()[W#>lp.~.@q<XACq3^})^]tB}8KWOe~a+w=b[&3C/[j)!I3|6' );
define( 'NONCE_SALT',        '_Zg|Q`vcn!I7(qJ(CaAH?KTI)6?[O7@Zg5/.{>3p1c_:LG*Tf0clr(gg~dWVZfPt' );
define( 'WP_CACHE_KEY_SALT', 'Eg*!-I^PW7b&mp!= .?T|G&U-eE]H1{7w00@R$GBDUj$8~IhHf;Vh?jK0Y$1Hwu$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
