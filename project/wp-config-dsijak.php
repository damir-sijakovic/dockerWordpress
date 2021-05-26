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
define( 'DB_NAME', 'dsijakWordpress' );

/** MySQL database username */
define( 'DB_USER', 'dsijakWordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dsijakWordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'myhostname-db' );

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

define( 'AUTH_KEY',         'q4@;;]jMD<@PRKRTZ`kijXZ(@y$5e*YoHWt5y]uM{.S]X^`dpa6}BRiP}L[i_Y< ' );
define( 'SECURE_AUTH_KEY',  'etDS5yKU)HIveRdz!etc`:>!.qI0?9p+R-<^wKlUrY?ras]J lhswZt&rUghTpI#' );
define( 'LOGGED_IN_KEY',    'OQW% #-Lw$Yn2!fytziCP>AhB45aTS/c6CSbv)WfAJ;gMSIgYF+$fVNpq--~mq=S' );
define( 'NONCE_KEY',        'LEuI>X;vwP45Ipi_~l3[8mz-}x#PqKDF}3M[L;:3yK@a}C&iBN;3~X5)1+nIJw^{' );
define( 'AUTH_SALT',        ',p=f1A<XjSvLkz[=G|l#8MJ70]p8,TF70{_]9G5XH^BxP(xA8O1nr62bjC.E_F%E' );
define( 'SECURE_AUTH_SALT', 'g&0~bcMU|6.l52dCYSoF%e9j#ps${a<STvgIWLW3KGS/]~+fcZtaJFUyf5}[zx8h' );
define( 'LOGGED_IN_SALT',   'KUrhLdG6y:WCtO],[A% hh>C BlS*X.L!IHjKp@7SaT|b)IMP]qd_vr.XPs(7;@2' );
define( 'NONCE_SALT',       'e?9l4EM<%{8O$^ U=D4Oxp@{t)+SuL5Wt5mr+y}q4*D`i%?QH 9-lV-Zs}w Ab!0' );

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
