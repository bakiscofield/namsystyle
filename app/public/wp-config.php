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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Xtw&B3AO9_Jt^Fzw)/Py[&)Qh]?uBr.su6O+9e/fUv@ZmGM-aHl==~x.M^ rsgen' );
define( 'SECURE_AUTH_KEY',   'qCN?hxTNTTScw8Xtv.,3OS3mz0nA#2hC]Jw/iGh( {[s)m>DeoeA46^MR(Y`*60F' );
define( 'LOGGED_IN_KEY',     '!1Spjk8i#FPBXfGT_}yDON;G(K;}T-9]C;8zr(&G`pz%.>5CN%Ou#%+v]PtX ~WK' );
define( 'NONCE_KEY',         'w|_;Y}|DJW9V^i,E%T%b:4|45^hRx/LLRW%a1N(l{>R~U$AdZ;C.[M-5DURKlF{1' );
define( 'AUTH_SALT',         'et.PwtD3z?_7V]h>4-Ld6BmZ)^cz<W6{Ruoq/H]<Fyrcaa*t5|xN:)*-8!YhX#YR' );
define( 'SECURE_AUTH_SALT',  ')C<1o:Ak/,A^5:CZ=/x,3rq IF^[HsplXH*3Xb9/m(M:=P^P^]yS`bgp!s)vdi0i' );
define( 'LOGGED_IN_SALT',    '#O7vft*.HLz*Zee1Sm bKW6q`QK$vURzV(ym[MDxKsX#d5c,gkHhTf;M7Df(v5c$' );
define( 'NONCE_SALT',        '3A;M0UxOW%D_]<,IH7IxCZ(H!>r^.C1%?$ Mj{I1&,mnv0%O?QP?<zzRL[GahK]b' );
define( 'WP_CACHE_KEY_SALT', '$L/s.ttAkN#BY1(AIxbXecP/?(S,vG3%++Xbv2&U2h;K&?]^/dAr?c?EZA>dmmk`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
