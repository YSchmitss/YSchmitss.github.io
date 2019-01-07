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
define('DB_NAME', 'Camera Kanjers');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ' h>o_%tVC`YZm*5=G]Fq),.}-X> ,wAE/.nuD`|n.Dp|F{Sm3VGqc| bM#R;Qf!j');
define('SECURE_AUTH_KEY',  ')9ua(/1?4f:$)=0?,TXx]-OQ8T@sk)G_]KWJ+^>hv:t}S@!%U5fv[KvaisF5O2X2');
define('LOGGED_IN_KEY',    'tpFH~Ut-ttfqIj:Ecc`,f/1/BVeZ>rsScp.!pPvNY]D_Ofjx^dXq=u%J,85l$95D');
define('NONCE_KEY',        'p&_!o=6o.Lo8jnWh|PIo[F8=$Js>)fpp%F@<U`b]F=[8!UuiDrE:KfQ?vbY[SK(U');
define('AUTH_SALT',        'pdRY;@jSQaVthL)47*<ckVn,;$=s?hu@domf:b~iZ.()WY@1Xj^cOQT[7~o$eGb(');
define('SECURE_AUTH_SALT', 'X6vJ/zK6_TvEht0]Ln|[cubXl v-%Q^$MQL;=rM8G!si[F(A+qtGl|KZ$arx:o5;');
define('LOGGED_IN_SALT',   '=sp1@E|^^-Gnc-#v*gWJYRZ|%u`$;IF#JGQsX1z_(=4&]JE=+C]{ny]C(KgUc9gG');
define('NONCE_SALT',       'PfQ$H2xi@[mdntMBWPX$s#yt%rNC/7IxxS[_aXp{K+46UJ/j$j-pkAt9ZP>/Ij;S');

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
