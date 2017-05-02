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
define('DB_NAME', 'wptestsite.com');

/** MySQL database username */
define('DB_USER', 'external');

/** MySQL database password */
define('DB_PASSWORD', 'external');

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
define('AUTH_KEY',         'nU1iE)ea%aZG+YN^-*87Xf#d3}?c-pwC`eUfz(^6@5mY@%EMKOQ>E`0>epa{m&:e');
define('SECURE_AUTH_KEY',  'ROhQ0Eu*XM5X.hPM4`I=uSG1]0a>C,Jxt-,gcR~EfK16}cs^F6)NV z3Gq9?R!(N');
define('LOGGED_IN_KEY',    '9F,Hv$=gdEISH@=5qjw0eJ<fgnu?=;kEvimgR_DA.PIS_+aTwfzZOU=l/xiSKCqz');
define('NONCE_KEY',        '*6WEFTr^wrSl[$RY/<yz^DJS~yTvCpR7op|Eb%k_O]JYE@@+T`<_jUviUV#wlav6');
define('AUTH_SALT',        '}km%t:y/IuUU8G2{B!WSkd7@4hP&*]]=xU9U:5R a<rUGZ^<jk^9J9W#r[l[7U:(');
define('SECURE_AUTH_SALT', 'mHA;cVCQV94iXV8J[mR2 _)slY Hk1DFCB?`O$S.xTt5u5!3q hA~w#C)mfIRhnq');
define('LOGGED_IN_SALT',   'UYD5=V;++Qj&r}4m>0*H2S%S9/*0^5ON*~^dZ30HE_-x!Aqgn#k@+=gk]m$lN{)P');
define('NONCE_SALT',       'ZsXl+.Gp4xC$QbE|Gxf-?5>,sM]$!Y#O=U>T ~bLlj.m~aN3/[E.rHpo2q6F37W>');

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
