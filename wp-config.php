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
define( 'DB_NAME', 'first' );

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
define( 'AUTH_KEY',         'ZGA$%&%ZkNhu4;}y7%Jg%tRI8udLW1$Z5@_yWRG0Uc*^j1L;tS2eJJHUPpcIG9RG' );
define( 'SECURE_AUTH_KEY',  '}lGjjGr }|udjdr:aI0}FysgB+;~.Acer4,);;p>I~F[H!a*(0vB0qOn,KUYCdYl' );
define( 'LOGGED_IN_KEY',    'RcyV(QcwRC1}#TL8bFQF1+JMF:VsM9tv,2Fl(QadtACrw$ZR!_c]DqGSS`pgR<Al' );
define( 'NONCE_KEY',        'NhEnR%nGA]hdNW 2iZn/CuE2KS1/d.nLR*V>]@G!E,:a?9Sa2xCT$I:pmb!nQgb3' );
define( 'AUTH_SALT',        'Co#_^lHiE3u;J_}_JWrmC!,r;5AQ7W)Sn[ok&0ek$., Ib<RBFi<]SS#}W<>y#@&' );
define( 'SECURE_AUTH_SALT', '6=%@Krc69QGg3]Fr.[0Ej-5sy*n<)pYDch;j9s236hFqA}%zsA#q PG(97zOA@Cw' );
define( 'LOGGED_IN_SALT',   'YYalI(,O~lGt~rB]|i2}WjE}!F%:BrrgQ(Q:_arvsT=7tuZZ4.aPw3-p+I*F8>sZ' );
define( 'NONCE_SALT',       '*ZSoFGn/)jMP*/gi<Oro9!e$__!N{`A#g-y/*.qmNEc/l->2$;|P8LGVjlPnl^F8' );

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
