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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cardans' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         'SC9 4z|A3Q{u|G8Nk&{C%3t&yc$]-i1yI@-_g^B|Fm~0fg-?sqXVYq=;vUZmUn=h');
define('SECURE_AUTH_KEY',  't>sg,Op0CM8|#$FFk=:|(jpcG_T}>8+bkuX2>eFd}+ZQqRlT=[e%p2yU=j3Hg`Mg');
define('LOGGED_IN_KEY',    '+| a]vrko4B<,kBE=i+IVl5C^`>=2LP~7#7c<i`V].4Vaj_q,{3fGyOuh^h+ ^(,');
define('NONCE_KEY',        ' 3=F,et-4#-6O<Xp?&lV^_GsHO<vVmH}-^7mme~N#0xqM$NnE>Kjz|+.HGckq?1<');
define('AUTH_SALT',        'pTpo1wu<er#.%ys-pUDPB;mKZJuji:+%/g/!n(Y>k@ci+R(VR87>t-HKGAMRgTme');
define('SECURE_AUTH_SALT', 'vr,xzU3<1RrH!^4MrRWM|_UxcxZse*wpO<8pw.O-7^YBmo>Ltj^TK+I+f]9r29?:');
define('LOGGED_IN_SALT',   'Dy44CO6dxaFPV$Y8.*{Xr+rk$<W#,VLS.Q!HEXM0T4BJ8$uqp`P+SdhP$}0aj;~H');
define('NONCE_SALT',       '|.fh:fV5?@F$zR`V--d$7qSW_`iqG^>*WimcqRb!BB/<iJIo7R0=`hHo:qp1 /5=');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ztx_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
