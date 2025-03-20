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
define( 'AUTH_KEY',          'XbSN*EsN!];6rU<$=~& d#bTFB98hx]bXUsutIOkilx#6gRxoYjF LJC;w(-.P(g' );
define( 'SECURE_AUTH_KEY',   'Bga3-KXZmiMzli]<X-TeHq-9Q@?Hr?.]2JLZi_Zc|,,V.!{MC/z#fN5FcM<uxBD/' );
define( 'LOGGED_IN_KEY',     '&B<+mle6V8I=GOt];B~{k?*%z!`MxwuL02YNr%$n{g9Y^EKH[7C;D`*6-@>7jSGE' );
define( 'NONCE_KEY',         's  i7E~L~sjp[H_(X)az=wj_ADQq8||dU(TcaXQh[LTdZ.~0|y,.}K)}UXy7]vhn' );
define( 'AUTH_SALT',         'S>TZVw*fI{M(6RBjK8wL@|4];aMQ_r,>3cIR#Y#8Yu{*<=-e$D>s~1H|Wa2{>9kj' );
define( 'SECURE_AUTH_SALT',  'eAcc*h`]+F?ggQatgCT~!ZK*~5&hE^X&/Yy8DFn?]gz<R M+eh**%kQd64xE*o^0' );
define( 'LOGGED_IN_SALT',    '@zT<-u3LOH~B^f~fIh(WX`n.GE2Q6K{ya6@$2~i![YsL(ttk0gN0zsGg[%Uq~)D|' );
define( 'NONCE_SALT',        ']X7Jp^iHL$Sc )XG4mKCI-+E#Pf4Jc9eqNG.hiWr4WaS@h)PC35-leAyN;j]hO9&' );
define( 'WP_CACHE_KEY_SALT', '<QLa=|n%rHq$mK6 lJ,XF00Ry],&P.Bzw#BJ}kd;D5s(/?q2(R^!w056)6?EL)Dj' );


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
