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
define( 'DB_NAME', 'mahedee71' );

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
define( 'AUTH_KEY',         '{*8L~ciryO;II2x:]+`,_YRb((Ef`_HLVB!#h<!{}Dcg^SOPDkl/Ix*ZC@6o.C|Z' );
define( 'SECURE_AUTH_KEY',  'gA2no&y&r FFv3f<6`Uo&uNwj2(*r#D&&(X#p-~<z4Fmb:#FdJWS3.ZCcI=p7PgG' );
define( 'LOGGED_IN_KEY',    'Da}MBD Z!(d?(Lg(|3qK=p@wd%{K<nszqkJIBQ`N-toobWs3XHec}mC7z8zH1,$r' );
define( 'NONCE_KEY',        'Pb7Y{Mls,P% eqKtbAy3NS34$^uqlf-,nL4n?HbIVg6mq`cS8IwF|nTDOA0:p5FD' );
define( 'AUTH_SALT',        'E|}TZD7Idg+b$+rYyO{EJy$d#1]zwr6D*&0hs20C68C_+n]FLG+rJar@@^o/T]V8' );
define( 'SECURE_AUTH_SALT', 'D`IYkyXg0;ra#{XVhs?|;7uE5>FP@WPrOc*AU2eq<8@U.;EmgQLa5y>g_(u~lX1E' );
define( 'LOGGED_IN_SALT',   'b(E`sV@v_3go)w>9ne]{40n8.qCa22>wL<gB<6!56Q3b2?SeIE)KtBlWz1uLCd&f' );
define( 'NONCE_SALT',       '`IInR%uR~Tn`4ROi 4fk7#t47>Ks?(1i8})!x=+]8qP/ZB$@(5*1{L`53J#r8HTM' );

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
