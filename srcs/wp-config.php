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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nimad' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a_Jd@rEa^!+HXW3J h1u<d<[G}OO1(dH{I-Puj,tWd}@j<D~3Y]h:|`7HAR)NPh0');
define('SECURE_AUTH_KEY',  '|-1W/Zno-+>!njpM cm!$}{pbT7]u7V^-}[8z!lkpgx|i+naZ,9#aM|{4?hp1v a');
define('LOGGED_IN_KEY',    'JG-B>M-yCP-b8[vdcJX:J={c<{{Dg/.ui?+2%`)cgDMNO~gHu x~*w-{1ZY/-D4|');
define('NONCE_KEY',        'gBcL4h&+|26lS+sjN5OUlr;{&nNMsn}}LSFQK.<-kxwdOk?W-c}j-3o+K0PIw m=');
define('AUTH_SALT',        '-N_U7|*+M!edfg()&`53T@f-wPS7`5]v$WkR~Qb@1&8&<=E#HCx))F8!L,Cgd -Q');
define('SECURE_AUTH_SALT', 'a,qWo 5Mp-0<`ywXdN$r(~Y|8d.-l&DCan`/+4.|XIO.SQGe2.R(S+5C>(%a2Q?d');
define('LOGGED_IN_SALT',   '[>`FO??t%Y.4V2v.is({[GS3W?yk|Qr=.iIT}t:`F%uC?>h/U)iV?bc-6R[FgkN6');
define('NONCE_SALT',       'MNf%<Y*~t-E1*9e/?VaNO0P&D>-uUf|ggtF+#QkGfPMt%U@`)C}!`?K<bn5X[@YC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
