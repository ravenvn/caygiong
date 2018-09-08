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
define('DB_NAME', 'caygiongdaihocnongnghiep');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'YeuLam2017$');

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
define('AUTH_KEY',         '40U%bdaI3aQSc;nlH7@<D_#04n{(Kl/7>C TN<c9(F~=z,~V^d3)<]kWXv|%h4a}');
define('SECURE_AUTH_KEY',  ';U.-oa 7;{^@}SdD;8Mvtd;A0):6D[mch%M}b,0_{O`{v<*;-?<IprK.O w-*z^c');
define('LOGGED_IN_KEY',    'w/axePgfX^)1kN|XA1-=7xc_2`qK)o00{0lS[!:44r@)Xb9qR6EuCROZb~AOM-TW');
define('NONCE_KEY',        'Ip?n(LL/+3T[l;#s]=SO42R:2pr|s<@>pxWp|*hPFt.S}5~Mk~-PE3fdvL#W:~S1');
define('AUTH_SALT',        'SxtW!_i7@c.utb#,Zr-;sC,ql~Ga%4>IU{jPf!ltQt1VHR`Sx>BR$(O_R..h=K{z');
define('SECURE_AUTH_SALT', '$FRu Nrg{A<cfOzY{?Z?T^/ezPMwu/O](`pme58u_LH5&^SNsOp[y|:LZ./1KUUk');
define('LOGGED_IN_SALT',   ':p%M&>x&J<)LDPA~nQg/bCdfm<MSXV}!f)8)-vi4i?kQtX7uXNvR)h}8~%638`S5');
define('NONCE_SALT',       '5_L?>61x]W6=EC[Y;`5( )t }>qC[=g KM6DG,K@ z4eTU@Z9mDwH~&a*by(nlI{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

define('WP_MEMORY_LIMIT', '64M');
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
define('FS_METHOD','direct');
