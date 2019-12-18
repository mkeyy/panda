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
define( 'DB_NAME', 'panda' );

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
define( 'AUTH_KEY',         '5e:s,IGm(0+7SmdSN4P=3O5m`  ?sa*n-c,e,b8:iP:P]w#IvKkX-k_Y:)xHxTa^' );
define( 'SECURE_AUTH_KEY',  'LxSY`xtc:]s4#CgH<Lx4=&G$pOc02jhI^:!>vQ.didbgt1[JgR];S4.T:A7^dldn' );
define( 'LOGGED_IN_KEY',    'DvP_A.1V( K:1!wc@;qe`yg~VOez,2k,}<Ey}x2.#1MGu6O4rBx8`4~RoO0x?`xb' );
define( 'NONCE_KEY',        'ji7aG5Ow .Gi%j<+JA R7UsCL_1Sby$3G*>F{%c{U+dt`#Q0W9D%gr#T4h(c}`AY' );
define( 'AUTH_SALT',        'UTF|8cf-}SFRiofDIZ[rsp|}[|P C6j0Xf&;)DRmy`[ch;{4H7A03?W/pXlTp4<n' );
define( 'SECURE_AUTH_SALT', 'ERxxu2x2>m2{hk*]w@Scx{=~zn0AG<|`3Gqw$z?c%_8`t;]@%J=s<c_@xV^cGV<M' );
define( 'LOGGED_IN_SALT',   'd#cBX,u-g1uSO^<L6mY$)MrHIY+zz&!+}yv],)L{x_9/:e#u7^=x7G`IH*/,DbmM' );
define( 'NONCE_SALT',       'IKH!+,qWoa/}edU?D%`UHu@nve$L>aY4>{l;4Htu4X>wJKDtbZL.1_}w]NJlxv;6' );

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
