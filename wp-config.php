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
define('DB_NAME', 'wp_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '|FClKNg&M;Di+58SILmhQ`dm:?7@Sk~Jii[JJS=lxJ_/v)#Bw-nq[0R/cSr9TE^/');
define('SECURE_AUTH_KEY',  'z0i.D&7,l2A3{>o8]+X2(-3hV9<VlZ|A4:|-e5AA%C=WpJ 0MVkQ%5Hgz?Fr|O}d');
define('LOGGED_IN_KEY',    '`0/_eW.0p[y9--m;J`KOA40$iM-+]r>h$_Rvi_c^{>92BWq^u2tbnHOcf$MB:rU)');
define('NONCE_KEY',        '<-(#!v,M7M-|L^t#!J9y)}*BAY>}*: +zY%f,e^+P[-s=C=KnQ8NO7Q_r4m9o,V+');
define('AUTH_SALT',        ']+y)@`VdAF.R8Y%gQ&G80{5n9v6w-An?x^3%A1;uP_+^Vl+/DJ|P|?o=9=d6B&88');
define('SECURE_AUTH_SALT', 'uoBHt4qOLo.o2FM4 Oj=a}#W]u{U@Wb,7<]7eeYdo?M {nn[2=GkxiRinRb+|xs)');
define('LOGGED_IN_SALT',   '[DgCioCbzM+jI?%gyf7P-,hc,H[lK|+=a&@++zV2>-R3vh+C{-{)*^<q0rI-UCTr');
define('NONCE_SALT',       'B0q3Fr@nuKy|:oO6-^;MZ?FGZagV3a!@3RFf#1$UK`R.N+Q%,f9&3m_`taEecYGt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
