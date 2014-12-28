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
define('DB_NAME', 'kipaso');

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
define('AUTH_KEY',         ']<$b~/NKR?YSvAx_k[zuHJC)PZfAY*@m_*[xU%q=zMrOfY8s~-Q(jL&bA+Qrbe-s');
define('SECURE_AUTH_KEY',  'g4AB)[)?@v(>x7%)rv`4} rE}?9mV;sd^@^NX1JT067*S,Zrqq-eL}|sAC-j)YAT');
define('LOGGED_IN_KEY',    'tMQ#De;0-2R^mec>STzRatn;T{L{dD>.s.<g3}FpDG65iFqYNix0vbhmM00e.|</');
define('NONCE_KEY',        '`0)^%ApyiqAZu{}.&gO7oI:!2~Go/CF|KY{d`#qCb4Do*K+D]xggD^q-HGiO7QC ');
define('AUTH_SALT',        'h9-$>(DD-*|SWL.ptyk;z^4>PFqZ?&D*YE9GbZ3(veBQtxl=+jn=lXK/JVs@zQt7');
define('SECURE_AUTH_SALT', ';P>vTC/B%u&8hYlBhJ,3KZz_z6R,i/3+z_>C.oneORuhc!zXUuWwVU7U OmIWn,)');
define('LOGGED_IN_SALT',   '|Wm^Pp-7!_D3}QN3<Iu7]3;; q2~<Fna:%!U7R&mim*IgWxWWfe=0RdO)K{*65l|');
define('NONCE_SALT',       'N00Iw12:ox1{Dz{_nD-/HMJ}ZZ+KIV2MXWytxG[Ip<}HU:qhdi@Dj:Q !R7[9J4F');

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
