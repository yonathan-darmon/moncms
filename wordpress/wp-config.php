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
define( 'DB_NAME', 'moncms' );

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
define( 'AUTH_KEY',         ')VfF9{Y(eVv;CwFs]~yM^qD0;gJcZUp2}= C:T2REQ,{9P5qb~0Rg8V^WJMidy7@' );
define( 'SECURE_AUTH_KEY',  'TFr(>I{=>|@(ggDva*{/Zjj+}bWm$V>|I?eKbr>gYuw<r*^/PX~+W<I`?x!,-y,t' );
define( 'LOGGED_IN_KEY',    '490MqLfJ;4-FhjoO.j66nA$Q*)ZUGO?xxq}#!JhZg{LXiUO~(i.#rjFV]c^K%A/2' );
define( 'NONCE_KEY',        'AC&wH=2E5(a5+>#KO1DNisn!Sp?BG)73Ia9=WuiXW9OY!8_N@rej|M.i$ocs3{;E' );
define( 'AUTH_SALT',        'CtrhhyD4Z^3v]0W#&Fd&[,TS(34fz5*CCrY`/S&G$0OP#}aX).TC:bh]O6.|6)RQ' );
define( 'SECURE_AUTH_SALT', ',Z-zGR~j#jXAxagyfdZCi6mYg|;Z`9hn E~>,Ljsu6$.}]e~*&dC3Exr|7xxOT;b' );
define( 'LOGGED_IN_SALT',   '9uk0%68yM@G#)9nFa7,n ,-;8cHEuh[8F8LQ`xD4{SlA@tv K{8,4vcf&Kj3ckn-' );
define( 'NONCE_SALT',       'Eub^ibu5XC?e&B9*3#UBpt/^#Pln9t9w&MeH:5ZG=(xDaX@IDpUTGS`G$-{7jB!]' );

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
