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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '!Nl*xYM/[]|6~nRO},b6ZoKQE{+HsZ+kcQl!z<r 4@~.xi3Mp2k9s*+U)?~]+1Rq' );
define( 'SECURE_AUTH_KEY',  '=|(/xIQ{[rI(=pTl}i&X&D]u@t4xG~+ERqMKY]+[4~ro~<KMCYFR7X5d.DLZb]B4' );
define( 'LOGGED_IN_KEY',    'n!uLuO8myTCaW(/dpq xX=o<B@xvn%H#XLun1O!V!=ze^/ngS/tCEGqW.O0V%]:M' );
define( 'NONCE_KEY',        'QBM`Je,LDHm@r+TG?`0us!_+K|0:_uJWA@Ewd[=&<P{Y=c=8SNiozG}<J|?%aDcj' );
define( 'AUTH_SALT',        '/3|2a2cz#E`!TjT(o_w:IG6V<m48%~nWn:f3(nC[<%yF}Blj^$HXVUG,Nn0~LnQ ' );
define( 'SECURE_AUTH_SALT', 'iHSbE;7C_| #/T&|U(c82#yztyI wvDZX2`4&RE[L}N|[D(-R_d^FmAQf6tD>?{y' );
define( 'LOGGED_IN_SALT',   '1KiG8W*qEA,/rR`1h:wjm%2Nr:9/,l6d}/B:N9{iuMK(r#*ui%GaI24L| >${){M' );
define( 'NONCE_SALT',       'FM+e Iz_-cq,&`s#:6o|rBlN**`:?8l2Gwk`M8S3Bc3mX iA>u[S]YbVJ$JF*t?L' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
