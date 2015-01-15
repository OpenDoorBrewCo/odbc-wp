<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'odbc_wp_3');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'odbc.localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** PHP Memory settings - check out http://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP */
define( 'WP_MEMORY_LIMIT', '96M' );

define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '58`y-;U0/M|dL,d3!2SSo|P(ELYH|B-Ie=5HB:A,ari.59V@@^)mkcW}BRg1Z:Hs');
define('SECURE_AUTH_KEY',  'Y%@dP9F`t+9a_12j:@Kr|EC0{%Hz*Al$]{d<q@!81(^VJp3b1{P+EU.E?wfA1U#o');
define('LOGGED_IN_KEY',    '4c[P!hWr6Jo?)f*QEXWRy4G+=>$,Znz8Fi5P[G1i+sK1lNB6GS8Z*HsA&+DsVn+O');
define('NONCE_KEY',        'GJ-}lR/<pRs$6(_46-XiX|JeoQ+6-w9%_dY 6|^04vbWgeik+a4V^~jpc)y`c-CA');
define('AUTH_SALT',        'K}LT[J`EQE-6Ux@=.H.kUKO?~._nlhB0rrkRPLmSK`O>:aNz!ZPa,xv6P5CP*eH{');
define('SECURE_AUTH_SALT', '<XY`2fF{T]-&LYLdOw|B`4nqnO1haS`uu~9LAeN,wNf-v^l@,rV>${#yI1)T=1}h');
define('LOGGED_IN_SALT',   'lSAgz0n?y>d>TcrYB3q1^nj2Ll-#<?UJy9ia(=`G m5:{2#)ePTX_^.M@WLa~QZ]');
define('NONCE_SALT',       'WyfGrO]Y*Zzx|{&-zq)t+!sV`yYVpR.]5w>6)|vyhk&5DGY?KI<pK*1g%{@Tn_,=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
