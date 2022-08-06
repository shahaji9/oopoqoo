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
define( 'DB_NAME', 'oopoqoo_studio_db' );

/** Database username */
define( 'DB_USER', 'shahaji' );

/** Database password */
define( 'DB_PASSWORD', 'Test@123' );

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
define( 'AUTH_KEY',         'dc34efxr6vapzbxzzz4k8y6mxcm0wjvqnttux1mw4t3qknn9mzh4edm4gf4fyt52' );
define( 'SECURE_AUTH_KEY',  'ux1krj4gtkveuztkfg31hh3rvaukhhmhej5bf0eru3mapgsn3awb4zcc4axduagm' );
define( 'LOGGED_IN_KEY',    'v6acezjyxlktnmis8a0weg9hz1elqo61jfmg75qkcmirje10ypee0vtnfdqsmsad' );
define( 'NONCE_KEY',        'x3fx2ai8bufr2avlexmwdxpovimllvmfso5rva5vhwyifqioi81q7rcljlljkkpe' );
define( 'AUTH_SALT',        'frpesxnnxi9wfadncxfgkudemeugjm9brqtdvdcyehtzpgjz2qxpdgw7mmnq80cy' );
define( 'SECURE_AUTH_SALT', 'fdw3unjkapbinsnapcu5aopn5ac8kv5zyhxjd5z4k76dzvyhb4g8xlsbzkjrkbkm' );
define( 'LOGGED_IN_SALT',   'vhkzzsvx9fpz4h5mxlby8x6kr6z66esy8jdtakg90ujchidovtgxj9ufvh4dfqjb' );
define( 'NONCE_SALT',       'pfbnzbkjd9hh6cricmfgpfh6dicstmtales7tlsedxaauvtyyw1cc3krtwxybygc' );

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
