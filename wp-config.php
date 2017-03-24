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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '{)_{YiC78JnUt_`*h%+Vw!^jIpz}NC>*aNpf,<H`535SD0ukD>5:d&~n-}cO}kbQ');
define('SECURE_AUTH_KEY',  '5y7n/uS-P_)=DFD9#sP[uI(mW=Y{3P%`oqfD::55pm&*4S4N<sl*Ggf8 cxAMnO3');
define('LOGGED_IN_KEY',    'mWbf4:0$._-)$(V?f@f6Lrqq1S?c [=}yIdsTLIlz{9z=/6jEc]]*EwbXr&VUOu|');
define('NONCE_KEY',        'zP*(+zW_!=Bf0Eu~a//R!YrE-a.lzm.mLY.f<c5o3bMe^n&ZlBEfIjF/Y_^m4@)?');
define('AUTH_SALT',        'EJIhQp)=.5&IdLx%TA[IBN>,,#;nY[1I%W.C:U|ipM#6?H3=>U~]S%H|:>dzv=~>');
define('SECURE_AUTH_SALT', 'zlWb><{`.|Y$` 9O-z*rto0Kb9_:rpz:Zq^b!%ikvRy*y6s&{OHoBBpcggs[54+y');
define('LOGGED_IN_SALT',   'i/B9+#-,6,tRA+_$#3m;s*ZbpT!kfKpI2v^Bsvsq==I:kUyu&g0^^^_ s92A;M$N');
define('NONCE_SALT',       '<zc$9M0pu|/EIEi!NhVVDd<{VOIuW(C/`[!9Ij1*?lrDIKj|~4J2}{ytN+[M(vRN');

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
