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
define( 'DB_NAME', 'ss20proj' );

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
define( 'AUTH_KEY',         'lvAk-[%KYa]YC@M##XaUxx4y#4 K&@:npX9aZD<)OwdVIo&~0lQmBVRblOw7WwVH' );
define( 'SECURE_AUTH_KEY',  '.^zE$8PmfEyRmO/9c=LEy^G!?)}MgB-v}QAv[|m?jp6jG&IjCPz?1aaR&JRwl[Xc' );
define( 'LOGGED_IN_KEY',    'Al4z@(_a1ER,x2upbQd^3E!_ZA|Qj18nfOB$s!6~G5s[5HGp^}(%SxN0VJ#Ssw8A' );
define( 'NONCE_KEY',        '(U#P+7d+WcpS]DY1@u@>q{z*-;=U4R!z+H@ :;!EW=P@wqJR5GQKD:pnIcd$(,bk' );
define( 'AUTH_SALT',        '/rNFFa5R 4I%~n/o7m:vp_@LbSxYC,mea=+ =QFRqcZbO8Z_gBEZC[p,kbwTf+GH' );
define( 'SECURE_AUTH_SALT', '0W8rD|j;FR}Y#G$Ow$@{2.9fy,zguDsnOa=F+zJy2Es=Uez8xA^29^UDbA4t70Dw' );
define( 'LOGGED_IN_SALT',   'A<snYG<Dh;IEyTy$Cl!5[[<]e4lzy/`g)t&O:xwHIRsm$gXw{r!gSrJOeQ(eXz^o' );
define( 'NONCE_SALT',       'mOoW;aOx;f(yE)88eGH$CJoUcB[pQi_tJhk0i2Y_b -seEzGfU`-^!:`ELc)uR7U' );

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
