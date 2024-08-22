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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'cB|ah3#e3gD>3P;m*j70?:SD%t;NT<nx~Fwe3Op}BUCw[Yi?W%!CNw N|jy<YV+^' );
define( 'SECURE_AUTH_KEY',  '@f-<9ATNi5p#wH[gx3e5Tu5JtN~i*?$RAMPQs6:FM`;DDpocZdJyN/ClX.` x8+a' );
define( 'LOGGED_IN_KEY',    '{L>|B@2[y[Uwy<<egQ?YI@v<BTw[:23BsaT3` #+;Wj7/:jY$f4W,[`$L`_/:Lmj' );
define( 'NONCE_KEY',        'Wf ~2o}RA@d@;}_?*`Cw0(-FnF=ut0nU]G%r;OqpEPUps|P)<r>I1G:}|I_4Kieh' );
define( 'AUTH_SALT',        '2=:OQHW{|0Cb7lL3A}|F_~E$in^4&/p2MPQ?Tf~nj}&Ns)=567T<1JkYr|HP!)<B' );
define( 'SECURE_AUTH_SALT', 'YKY#eJ$ViC?gD~a8b=I+VdTQ=j&Fd<x8>WVp]TsqtK_3S(Xw1UBR&:+H|&UaSGP~' );
define( 'LOGGED_IN_SALT',   '3IIVUQ#cB`^0Z`.[i{F[]8S#`21S7z7_Am_utm&2~#1[v6(k?h[I>L*SRs8yr6]!' );
define( 'NONCE_SALT',       'nT2L43M{wQzglrZ`;*X!7}@B*t:S6Sjm(;T6v&<^2]c)wp*1Uvz4Wb02W<!_bQp_' );

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
