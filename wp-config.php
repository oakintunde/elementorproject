<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', '8O5jzqDxfUOlIzKPjFuMVJcX99U0dmrMiNLcV4VPMKpjo4K9RFQrfx2uyyW4XScN');
//END Really Simple Security key

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
define( 'DB_NAME', 'oakintunde_dgl223project' );

/** Database username */
define( 'DB_USER', 'oakintunde_project1' );

/** Database password */
define( 'DB_PASSWORD', 'Pr0j3ct123' );

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
define( 'AUTH_KEY',         '(g&nIl~iM]`KM>-6;-vPN(9Lu?l@.z7xtN-e+C!=:y6oy*i{TH4DmTO_}n-:^v66' );
define( 'SECURE_AUTH_KEY',  'Ue8TOs8wf$FI|_]gViF^1z@C{Ms2cpO5!cj<o;#, }^t7!L4qW{pe&WVs@]>t[4F' );
define( 'LOGGED_IN_KEY',    'ds/r8,I22{O86eF=tPYk<Y1F@Y~M7ggBH!Z<MasCf/cT2j3q<,U8s*K;BtVzdc]+' );
define( 'NONCE_KEY',        '~_E+l7KN({5)q%ZwqZq>]Gc-hL9|llj*] R:yY}li;R=@ez^H0/] z3)jrB>m`7l' );
define( 'AUTH_SALT',        'S<wX3~Q8vE;M(|?&OfWVLWlKfuB/$^o-ZH+4J8~&X!jp(DJD(/J;goyVxQ;~tkzt' );
define( 'SECURE_AUTH_SALT', 'QM]C(f;.JiY18E-FBbG`+WToK|1Rds=]Dl^O=xbL9W9yn1:g-PpzA1RY6Q-wq|,<' );
define( 'LOGGED_IN_SALT',   ';*M9oW3X^XkC:[f<gx[_T_Hdr==!4:F{w+;ZWn3emu39*C6PYUir9R3A ??P~PzH' );
define( 'NONCE_SALT',       'tvbxks{.E6Kh&(,+`;j;%g|/rv]Ww%-~r/d*6KeG-fs[K-}]W|8$oKG%.b]qB$ko' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_MEMORY_LIMIT', '512M' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
