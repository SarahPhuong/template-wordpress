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
define('DB_NAME', 'huong_dan_wordpess');

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
define('AUTH_KEY',         '(+y-[+5s5~mKDl9+dDH+B0iaTqXQAV;o7)|EE}Y2zMpAk|F:rd`fDxKBEN0AGvOb');
define('SECURE_AUTH_KEY',  'KJR7 ~IF+?Q}|Q-+%!_oxzU*-dySa>&,Z#W#*~YZ+#3Aal-vl0$Fl-%ZGC{ZLlgq');
define('LOGGED_IN_KEY',    '5_B[;v?kw !Q&qB@[S1Rme{9gYh f)@[&-,_|{(lwYp0xC[[BgR()wwo:|*#)(Z8');
define('NONCE_KEY',        '51XEVWC.ri8,9|TvXZ-mt+^:vMRAdy7%#|}I^tFyB- YeEo71jvej*4&++pCp{CY');
define('AUTH_SALT',        '5+zr&mZVzO@w@/8d?JHpZzZ-0 CYs+G]jJHE0R7.-h<U eN-B0y%#+$1Lm1!B(}V');
define('SECURE_AUTH_SALT', '_.hX@!-@(=;^cF.P8QoKm&ye+`?dtxeNL60B%rv4c&pky5io^$;r||I5G>Ef%8^2');
define('LOGGED_IN_SALT',   '2G;]V 3z 8&Wpsr8}nF0}lK%lG-Tr`*x5_hCM-/4)D%)Q +]PdN=ktJ_0vlmyR(d');
define('NONCE_SALT',       'Dq,b8a!%NTxi|[/af^&M3+Bg8Ffgp)XXV}-j8*s+B;dG)e-9;T=Fj{[@~jLx+Qbt');

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
