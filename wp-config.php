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
define('DB_NAME', 'imarkcli_kingkoil');

/** MySQL database username */
define('DB_USER', 'imarkcli_kingkoi');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

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
define('AUTH_KEY',         'nShZvgu7f{wK(A)Rio!?,`aRa/j U_v@s!H0,23s_SObJs*-buQw 8}DTK-wQ5.G');
define('SECURE_AUTH_KEY',  'Jy+.~W^^G%Yn9]2Rgdbg4X9YKZ$R*9kuhWks2WrQ9xH-?%./VKrZA[^VEM3*p@45');
define('LOGGED_IN_KEY',    '|2N_TYx TAcKa_ZZ}S9<[CNZGMmUt!G0`%>3bqa~DrQRr@K+7wu1kIV|x&GEhn4w');
define('NONCE_KEY',        'tLnYPTC$G<lT9!5apjf2aq:hl}^jcVcYzuuj@ZB&nhG1RerLoGFAw~yta`$y1mbS');
define('AUTH_SALT',        'V@/vCCE%p0RUYZqxB:8=ky1/|iQ%BBXORn+UUPGE%;MG;_0x lg#A~>c{n`hF}4,');
define('SECURE_AUTH_SALT', 'NI0hF AM+4j?lU*@8pQYxNo^s94,<E;Ek)HK(OsxHB==*88iz-NgpXqnF;24%d0W');
define('LOGGED_IN_SALT',   '89u}++;}_smhku{*Cv!EV*t1_HN),2&8q]aTBMr`>v78!D&/4&+nm[848Kg]{JH-');
define('NONCE_SALT',       ',EmAK6N;vgUzAgYtxI&hCp?jli+Q?G*prCa90/k}3<T9<R_T+bF&jjl^XR8~+2<s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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
