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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '/Ha`$ .tb:@ZgfHe-44@Y^.`Le|4/EN!!2o4v**>ei9w<0qUBao]e=|Gx[jX.bJ ' );
define( 'SECURE_AUTH_KEY',  'jCO1w-hf^Cx3Q!Y%Nac (b1-VL7-kVgnE)H)4=Er;D%g,qYV_u8P3t=Ah1VI}A|x' );
define( 'LOGGED_IN_KEY',    'uom.oAvC{*i;E;#Zll9ew:8#{*@Y3[K}a}^SIKSb:X9LCNDj%[v@>8eH-/Jz#k}P' );
define( 'NONCE_KEY',        ';3DtrNA!Pv4CF!IQ0aZSI%0ZwBE@}CAl=Lxs91O?ZD8wG+9hWh:;n<Upp3;Ab;.,' );
define( 'AUTH_SALT',        '~PH=J gG/C4ZC45*/V!te6;P{xMp=ki9f>Dul8<HT8~7d((9 D3sgOYXHiO~yRo4' );
define( 'SECURE_AUTH_SALT', 'W>j{hhir-3o8<t]iE&srAS{P=<VwSX)(!7&<,;KJmVb1N(x3JKby`a[q@3~&{>gg' );
define( 'LOGGED_IN_SALT',   '0?ocnWJT:*Q_P2INM:Cu+O!&MEOewwkFPU<rLP1O+PYhg;+^U~bKhVa,3<k4PC%}' );
define( 'NONCE_SALT',       'LR3F.k_</b!)ak;3s0o5oVcHf66#L.l.%Y `=l(+BYQrO*~cB#t_<HPoCnrP(u@|' );

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
