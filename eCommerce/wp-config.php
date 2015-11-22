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
define('DB_NAME', 'eCommerce');

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
define('AUTH_KEY',         'uC3hv-+xw4wDgo/$nfee{6:lj:$/#V:;YHASm&^-G J,Mwq-mxNY#qn)y&2zte,u');
define('SECURE_AUTH_KEY',  '~|_B#A=olkJ7Y~/.-B/-|9,Q%V)Z7[#J>OsxYM[x6@0Fjtg|C:Vp-LQ2%}/{Wg|V');
define('LOGGED_IN_KEY',    '+]1@(lnC/Hz1)+^8?,y A:.r/I%Ju#J%*y9v-nOzi8kAxe>i%|9G!oa;x)fjD@v2');
define('NONCE_KEY',        'SMC#-z1TP?}HO|_Z[W8YmvW4TmCxp4dR;{>P^LT3N}7+1gElwU$x<Vv4Rj=SS1#k');
define('AUTH_SALT',        'aI.5itUnm&Y7qcQ`txi1z[Ra+*uEs=RZt7~rellX:@c?T+<iS)9B+f-%mx%!hEjH');
define('SECURE_AUTH_SALT', 'YBwSS3!DR?`=MQQ87hBf[? ?>ma2!]pnAR{SkbYl]&0.8@8WcZgq7fbv,ul|^xAc');
define('LOGGED_IN_SALT',   '5cnIzydo]XnDyBOs)C{QAfA+W l)=XJPo+fmvc+<+kqZaGQ/IL+!a#hzyC-k~Ut|');
define('NONCE_SALT',       '4v6MP(r+nBSlkn-w5CeOeMZ93l;PSfyD/BRQSb9;},7^+4JV!O3&i?6s5/I)3kj>');

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
