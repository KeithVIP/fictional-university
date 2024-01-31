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
define( 'AUTH_KEY',          '8rT_{KU.0nmXvL!Lb!^v3~~H]Cq`8QVyRq`se7s:f4|Ii6f/jD[&nNapngLs+JdM' );
define( 'SECURE_AUTH_KEY',   'vt$-X%l2.TpT^@#dh*deIq^,BiAI}L>n%t<ej<c$ Qi`QZa{F:Hx;a>kcGKe#!4s' );
define( 'LOGGED_IN_KEY',     'AH/SBk.aVNncycmEG}5%M;9qBo#Nt+PewB[;e,|kz;p0%HK4}Q1pe25Z?y5ukmcC' );
define( 'NONCE_KEY',         'S0UT(|D<|$vfS_xy5RWQ* :,.-/$:Mj&Yag4;]w`oarlU~W,%[7U8Nd_!?e(au<(' );
define( 'AUTH_SALT',         'k}R8.qE(3DU$a-(I_$*UndnDD5Y%Go2bv:ka5`b*99|7@{kdL@nG_x=fYOhI98<c' );
define( 'SECURE_AUTH_SALT',  '|GhI:n+h_s<12D#cEsa`eB_ls$&98@fmX==.}yr~9oAxA9@~Srv#e>N&4oru<}Qn' );
define( 'LOGGED_IN_SALT',    '[Q~4`=s0+^Lm-p5,H)SxZ%bIj7#%8_kw6.s;$9x*5f6dw{5Wz^&Htyg@iqQTEn G' );
define( 'NONCE_SALT',        'c*i=i!lPsT=b4T-O@_guW&(y1*sKp}P{6J`,h+qY7*hh~Q`]Pdh(sGu<imVKx5yw' );
define( 'WP_CACHE_KEY_SALT', '`433FAX:Lu=pi,LN-Ow|9!D*Did]GU2Etg<*`F^ihD7U$nJ9n(dCnoVg]Y]{F0PS' );


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
