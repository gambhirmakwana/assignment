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
define('DB_NAME', 'assignment');

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
define('AUTH_KEY',         's|FHhdf7hH7=L+lB3Dd6d@k^YB{Vvn~>{, V~c8=E=QDuqbJ++o6Mv99%n,i:^z$');
define('SECURE_AUTH_KEY',  'rl`rmgc{fOQDQ<44iJ+{89wvQ6e),D=c,Ph8}%kU4<sH1-JlDQZ#a;V.R@ $O]Bx');
define('LOGGED_IN_KEY',    'Esj/8}-qFH-umouEv=~wj*mgz.s%b&h|k],r1_z`GDV4-e)e9NN.PE+}3YUv^#<w');
define('NONCE_KEY',        'yQ#HoTnRs}:o!w *l/(8rV!:afd6a77G@r4qn H@!q~Fe_9ygj(>=Q_g?I>&nVUB');
define('AUTH_SALT',        '/A76L%2ms=JXX{(*j<5HbBv9sTw.GE5wS-J}if(]uMv^.|-B+`]?R%s?|h1K&<<Q');
define('SECURE_AUTH_SALT', '_z)Me%>)hs}XMXTIwM2/y=4FCk-.#l/Vc;1`m%n_fmjMA(A#!H$sec!Wp_R}D{w,');
define('LOGGED_IN_SALT',   'eFY!iJ$trZ[2r|Y`<u~#PWxU)XTctFV;F5 >t+P@<yST67<*$^iWh}KO5e42s@[S');
define('NONCE_SALT',       ',1@z-vh=)=Bxb3MG%1rvc4}C&]^3w]lo<PcOVoE@]<*12B3R4n&~{vdttA!D~91z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aws_';

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
