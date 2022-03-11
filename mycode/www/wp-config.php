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
define( 'DB_NAME', 'db_test' );

/** Database username */
define( 'DB_USER', 'testuser' );

/** Database password */
define( 'DB_PASSWORD', 'testpass' );

/** Database hostname */
define( 'DB_HOST', 'c-mysql' );

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
define( 'AUTH_KEY',         'hMAxqr!Z.LG2R-P@m`2rFR6/<Z><@#13WKK54Z*K$(^j7;xNAmUws9}u*O48m;:y' );
define( 'SECURE_AUTH_KEY',  'l3;^dQB,i9VmMFY*7Uqu:*=li#DK*}sk^&wt.63e<nvu8kO1kf+=.vF][gQigt$<' );
define( 'LOGGED_IN_KEY',    'Oq$qYTAvGrGwUIK0R,l>zJl/Drs$g{dY)zwShN$99,#TQm67R]9`32;l96+0,%JS' );
define( 'NONCE_KEY',        'ik:Oi`YyV$!7;$WwtleG/3p,(=;als N8t]j|{f4Lc?T1DaDc*L0mozK+g+lWgo?' );
define( 'AUTH_SALT',        ']>mhB93(AAwt26]([p2SMd$,50se@4epV$m!#F[Et[9e-o/8R(:zLA)-#<~;<zFz' );
define( 'SECURE_AUTH_SALT', 'avYT(V<(7o2Yk)&!0yy])kRe]&`V{m|<} RBNS(rEEJwg~R^gJU3uK0uSBRI|~b8' );
define( 'LOGGED_IN_SALT',   '_)d34%CZi#~d#gMmol*Jo :y&,,D8cU,.og#5%aKoZL#VoIB5(:zY{w8b +BRys|' );
define( 'NONCE_SALT',       'yPTwenr~}qdrtc|!_Eh<@V4(z%dH@,9^> Sv@2)QZDwD4zC[o*/^^F{;=M9LC?fv' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
