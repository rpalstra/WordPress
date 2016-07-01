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
define('DB_NAME', getenv('OPENSHIFT_APP_NAME'));

/** MySQL database username */
define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));

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
define('AUTH_KEY',         'G;VV@u>PW_?=)6X|}-M?cudR^f20NY8=5]Q)xQa{o>KS4wO_F1(gHg&llCd3q,Wr');
define('SECURE_AUTH_KEY',  'W?@wRM[po4o.>B|N`6,irj13#3Lx*BdYG |FWBsoovhc+F-*N3y!>NV|!bC0rkP_');
define('LOGGED_IN_KEY',    '=+kfGjEMQCM|iga&6meGB{^;b~Q/!SaJblb+=f)?MMv#`|ihTO<AfZL,<7AM@z+|');
define('NONCE_KEY',        '!+hQRR.(Olf!1s2pkkoBCq/J?# 2qe{Q}TYE?-rQJqT-{E*^*bLRrPMYL= ^i]+)');
define('AUTH_SALT',        '#&)#-+fSvVBipFLdWIgr9}b|>wv,;H{ZW3s{bxK-_;DCJt:G^L+Lg4#^#+}&+WFq');
define('SECURE_AUTH_SALT', '8q%sk|y.b/Yg#wIeUt=4(PF1V?Mhncyq;TK/y0oMI;8,|Nx>NV2;T>j/o$T^;M{W');
define('LOGGED_IN_SALT',   'BkZBL$}Qu{IX =1|(j4*F%vM2n|S+PeV%lzK5ggs~U}3|`c?(E+,@#b)IA$ci672');
define('NONCE_SALT',       'jfMK(~NUidBx*@hiXj1mKY>j|i&vu|A7+0(!MO[a-#&p;F`6FGU&#uy>0c0}cCt@');

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
