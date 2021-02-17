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
define( 'DB_NAME', 'proxsa1' );

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
define( 'AUTH_KEY',         'f?D:?6ZstuFkcrbwt-`V5ae9Z;q{e%2D}K/W|U`mR9w<=tjzxr31$%alghgOg`n ' );
define( 'SECURE_AUTH_KEY',  '$]*l*Akcea-N^sm&=2`uvKd-F/EY!/e=|ROjN@odd Ip^n&W-e.fs-<I(L<Q{fq,' );
define( 'LOGGED_IN_KEY',    ',<1T8vakpf51g(>jPNxdHsnQ-<x..#Y=*~ux;8R},T!?Cu!C:|tqO[CGjbYW3>1|' );
define( 'NONCE_KEY',        '}D$cuTm-FCgXe&?sHnlu*lEsuG#(ER)6IO#3EP%*7;P?&3N-lGRyd|K/C+Q:eQ_O' );
define( 'AUTH_SALT',        'fsp;m6SsT^Tl`Xr^^#3N-Jbov,;U@KOH^BH+nap+N-`L|}mhFvRwSoIg}v$EW<FM' );
define( 'SECURE_AUTH_SALT', ')]w#dKSUV?vR0+*DQ>Ba+mausFvnFIWam4}:j0@ao|_vyj)@7K3OW4FMc<<Pu!$V' );
define( 'LOGGED_IN_SALT',   'XgbjI~rVh6SvX7AmI2`6h51rt]l>8yHOanPtv5{;njIn.#X.a^0H.p1ZfT DE$JL' );
define( 'NONCE_SALT',       'qJ8@9+QV#oYo-G2h!o{x^c8cD3`mUI*D<SJ`=n]+lgxxb2sa0.-7&kd!DTll{%X!' );

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
define( 'WP_MEMORY_LIMIT', '96M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
