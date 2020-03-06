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
define('DB_NAME', 'u338958411_radit');

/** MySQL database username */
define('DB_USER', 'u338958411_641');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.co.id');

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
define('AUTH_KEY',         '^4|N9Svoudzs>f6&L:`oiLkgE7j7dZnu_@|nG}l?w,NTk!_jXpSs!*-}$qC^7ui;');
define('SECURE_AUTH_KEY',  ';+`%%ONNh#86,aHv]Pn|=3>8yN}hexAeu/v/k:*mhR0&f#4Mk`CV_m{p7,nOt=!b');
define('LOGGED_IN_KEY',    'J|+oZ<ppg0+x}Lv?.G5$*paj]wnXhy&h/,d);vg)]h%vY0[a_hy^{c+I03$aXY2_');
define('NONCE_KEY',        'E2l8l$ix[No?kPwZ$A=#Ko}%&$:N0j*C@}^@gSxty#lm*kLH1V-XD 0N)T#h&UVm');
define('AUTH_SALT',        'Bc($)cTiq{QAKU^D^l)t$L`p6AoOOh)DOhXd.:4RYbchGNdQF1w!AmRdq+VX?xm:');
define('SECURE_AUTH_SALT', 'q@c^x!?W))/RU<):])lT?qw/ZYo4?Ueyb>;JhTD xw[]/Oo^+k(e.ko:?`m1i`%4');
define('LOGGED_IN_SALT',   '*1@<)Yo.e63Ijsl-E1`=!$=lk?YGRXa=@-Qp*K<pK1VIUfXWz[EECn*7;v+ggCWT');
define('NONCE_SALT',       'G~yJvF;5(27:&miWoWF8kP`RUAoOLKvpp?#>ri7TbOWamV5.p%BEI;<;cQs~Nu.W');

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
