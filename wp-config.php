<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '9C7RlSIE9CW$Sz[s^|&4 -ij#qu|ZKvk1Ja6i]}9$qw6Vea3?eW2$#m1-Pc0?gdU');
define('SECURE_AUTH_KEY',  'LAl5UIg`h@M48{RF}i%+l}/b+}MF! Hi%;d=SNdB]*(pY@_/Gi(YJHR*@SP>abaZ');
define('LOGGED_IN_KEY',    'rsib-ZT4h5swTq}|(iHBgrMHDjJe?-N-IPf:a8Z^*benSo)ViRS+cR[O?:lh;4Wn');
define('NONCE_KEY',        'f ,B0eZnbbz*P+qZ#c 2BfH+KoY%o+J;e^qQgcl! &,lPU$as!=-iG.]#zH2vzaH');
define('AUTH_SALT',        '{LcWis}BpfF^5GQ$JV6G+h?XlVy]ze8G)cM98q~]c]8jI~N%Y p&bW(x_Us(5J#`');
define('SECURE_AUTH_SALT', ']jrg4nf7|.w-{yOlFVPOk:K3{Fc+T5dUu2aR]+*-xe(VpdOhQ=u c)&L*C}!f`1T');
define('LOGGED_IN_SALT',   'IcFA|l6&}GjVC69+7w[]5]>Jl!#.nw<`]dyINVGmzu{lptc.!r|l]k[h|QLNO](g');
define('NONCE_SALT',       'A9Pu+4gdYrTbW{6i|:3?KD5{OFQ>`[ v4~:3  2#0=vjxsHtwBnW/-)pgpPrvSKw');

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
