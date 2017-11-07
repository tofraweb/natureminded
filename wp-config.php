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
define('DB_NAME', 'natureminded');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';_Cx`qOc,45sIV`o`<la_C}m6@c;`AO0oM>i1Vq,aLp=Qg)&t.K-Zp*6_9P`(*![');
define('SECURE_AUTH_KEY',  'kX^Vc-lw73sNq{3J7zb3rpgeflyTz vU}Rp|/L8{Y0KQ+3)C&Lm)rmU.5QdQ}Cq`');
define('LOGGED_IN_KEY',    '_)ZuzH.tooapkgfpN<5 ?`r:=0&6s74Zs/xi-]{^T)/(Ag@)VzF vs&^atAmW @-');
define('NONCE_KEY',        'H*ZN8#f>fzpVqOm#Dc@k+f9:;]iA>)_{{}dHxYu&d.H[jQTN4VhD|$d9/p->Ewgw');
define('AUTH_SALT',        'xIl.m3!5c-<l!7?e;((b,V!6l_EV$G]>>Sj^HT=PVI@=bDw=y;qxHm-TsT+.JbT6');
define('SECURE_AUTH_SALT', 'U=VXg:Maw0)vP_6d=,Ws5.-^(xraJVyEF1v`*^a[f9 n(w54r}s@+hYNx8hfr`E<');
define('LOGGED_IN_SALT',   ',PB7#KW%|J[&ZyeBp.q859na^lM^PQ-GCJa #.]n) 8[!bAMre+F]4z1NC:i.DT$');
define('NONCE_SALT',       'Z3y<ge<P1sr?bZ5WEf8^St~]m%)<))C4x@BGuY(aNq=h Wl*e8X981-6!wbJT8:r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
