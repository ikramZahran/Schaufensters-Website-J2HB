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
define( 'DB_NAME', 'bd_jhb' );

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
define( 'AUTH_KEY',         '$tVpl{/Dtpf4:^`z!Y+la7~[L.;=>kh7f?9{Iq>y2UyG/03B0N ?-zifzWjQqDYf' );
define( 'SECURE_AUTH_KEY',  '@NO*A/ZXjum}%!ae~,^wE0#ifG:G.AAEzY@.nz57}LsGkuNE:$^lc_$y @FZe-jd' );
define( 'LOGGED_IN_KEY',    ']elT1mHJkU5<pIp^>Kn~-kx4qj*yI{gP8vy(<^v$t29oRG=/IWz/f[y8#nm*m{1W' );
define( 'NONCE_KEY',        'MslmR7RcB9WljQJ!k$qR=+2Hvo}pUt;{^57q~(SUIMf%uokb5^QK-rb;`d+CHa]6' );
define( 'AUTH_SALT',        'W3yrX||XHku+=eN`j?Yvk4{syYE]j}dSn(R.IfV9O}4d.--$2vOa)0JOOaao0Yb?' );
define( 'SECURE_AUTH_SALT', 'fU5+|$Nx<xFmU($@C-:H5gCr:~Wuk%?GQYr-;A#L|C.N}jzGfn/ -oyhA^e2R#Id' );
define( 'LOGGED_IN_SALT',   '_=r?zz)_C..1}PsgtfgHo}85ROBGgMPc4V?ebX(aGnj/uiyL#(SyT.K2H3+PA5Co' );
define( 'NONCE_SALT',       '2-TUmAA~?-A!:KDs:#i?/4lDWul-tSa/VK4|BkETBBU;r&U<~pC`cniH(>%hskec' );

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
