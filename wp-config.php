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
define('DB_NAME', 'wp_test_2017');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '4QqPuIHhG~i:OZG^/^gdI/jJeJ[QC:nzqWnurtG)$OgcZP${~A=j]q5ognJA1t:4');
define('SECURE_AUTH_KEY',  'K0kp:KQ`;CY[(aHfeMs^,Da}{;OHhJ>Ybk,v8.A->!nnT68*Au`T{<%C+t)%d$#C');
define('LOGGED_IN_KEY',    'dKJ!|m.#`5Br^{`yK!J%j0eiy*$IQj_8@r_:/Ipt8]+c-?e;H<g*ZI[^ *XIdhfM');
define('NONCE_KEY',        '|R~lYP*d6F[QZ6wY(EjTaqKq*+WDr[]%:7E3F m%=zSIOLFD(lcw-1l$9}Ej37L9');
define('AUTH_SALT',        '4}BE`i.p`1J9|r?_/VgQoS@QSDyEZ;6fQ&p9HlV`G!DQynL:9EX{`@+DB](k#;m?');
define('SECURE_AUTH_SALT', 'Q~# C9WzfGC{`#f_Zoe0i!{Ni!L]dC+rP3d5q;OjvDIMOJiX fr-lpA+DCuK/PoD');
define('LOGGED_IN_SALT',   'h2QQ=~= 0+/,^^?B<I<ivT.#o>N[f__l4#{N0tWk~D +_?KIcF1=vt2%n|)?f6q8');
define('NONCE_SALT',       '1v.C]^OK21q^jU&^WL`.>c|f2(,mg0WP;-gUgCvlRCbB:h*u N}J9BcF*^6vX&M*');

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
