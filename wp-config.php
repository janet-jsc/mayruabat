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
define('DB_NAME', 'mayruabat');

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
define('AUTH_KEY',         'Zq<`@$k]oL4X4/07WIDjt^9suLtkwpK@E+.|it:@^6G3,=Am%x9#?4!ZnMYyxLbH');
define('SECURE_AUTH_KEY',  'xfVkMXpA.7m[C>Z|NqPv#io-H7aOEh)n4EebhiPV(Gf37v2N4,>.PKKhDgaThM5A');
define('LOGGED_IN_KEY',    ',+ @Owcy-Z8:#XU(rZ*gfHwG)e4*f% <3!3(hBR;y_TKkrm^]6t$TJYU{1<l1=3K');
define('NONCE_KEY',        'zA/L^S61j.|rMG=GVCvY=C[Asgs6orU&fY|Afb xUc#X6%s}0>-J5?W!9K:Q^SyJ');
define('AUTH_SALT',        ' [Bo$d.lm;ggK3C3bt)$Vo/1]Bt0b@!jWU3n5#:5kzE{,mGq.T;>xRa/{[+|kp}p');
define('SECURE_AUTH_SALT', 'A9EIgc,o9i-)T]r/ emB:@<c91])1SBz`fY&Wla4L/}NG];9]%sJjK3/O7^T?,v8');
define('LOGGED_IN_SALT',   'I_ku0Ml}Z}[+y=:QwpH<47u_.`wyn1[4~Nkz]c{_5xI;VW)6xon7n2+<9h+Gjxe!');
define('NONCE_SALT',       'CQl-7&S.#A_(Dw+F@NU@HJwq1vK]JlF;u (o]&qK[&zzIM{~jXK{r|#w:eBkRpt=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'm_';

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
