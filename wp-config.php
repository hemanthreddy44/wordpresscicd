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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'my_password' );

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
define( 'AUTH_KEY',         'GK2JxU:~Z|~xNCqB{:W#c:FH|KV x>V&&EOoJhaza>35u2ZQMiy=:j]aUS8xekpB' );
define( 'SECURE_AUTH_KEY',  'v,$:1OaF:4= >7*L7&(]ZocE<VibcRL-S4-;Wiv*F*#mYRq<MV&XNA>Eie%aGmlO' );
define( 'LOGGED_IN_KEY',    'vbK`X!1T``te=Y%K8X{?*.M3EVsW#2>;YKy,%=oQTDFa}]X@^JSA8HgY[CTj)9.(' );
define( 'NONCE_KEY',        'vh>z+]EPIWAr;E1WXJcHY3i]#,bP8Wt@61Asw!nB&yz/5cFtPPw6|NXpQ%f&]tE7' );
define( 'AUTH_SALT',        'IO3A<L}H(o%H8&@mbr26L3/`_91T@g+#XW]j=fpGF3rb%_Y&@o1hyjf_8DaJqf3t' );
define( 'SECURE_AUTH_SALT', '#*Q]h+8.%<3P67U@OcZHIM%8PX[Rwji_UXDl+XoLBn808dR 5-y>5`X0}X1^0f`E' );
define( 'LOGGED_IN_SALT',   '=Hm-9fk>j&hAe`!K:xv#pp:E&gvGvfXpxCgkuQ~U[0ZDQ.,zW}V,op#`*kyADcs^' );
define( 'NONCE_SALT',       'jX3/<cVo{tYq}[Cuu[S:~H6e3)fvZ7kkN)]YOB!xQ/OfF[*9-E*=,Pg|B Dc!1Ox' );

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
