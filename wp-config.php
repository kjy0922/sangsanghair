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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\sangsanghair\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'dbsangsanghair');

/** MySQL database username */
define('DB_USER', 'sangsanghair');

/** MySQL database password */
define('DB_PASSWORD', 'tkdtkdgpdj!@34');

/** MySQL hostname */
define('DB_HOST', 'db.sangsanghair.com');

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
define('AUTH_KEY',         'l4W(+IzdZ)5/k7v-urzQtIFbq.#$OU{](l H|3 VP|9N@,#>FrO64N6gWC;iNJ_3');
define('SECURE_AUTH_KEY',  'UKg*5JC StP*8cGT8T>~`{;Z#;W!vvOO%# 4g*f1tCe<G|RJvh#9A]i<]#oyp/Gj');
define('LOGGED_IN_KEY',    'iH||u;+(}2Sg#7)(KLFF!*kbfiUUB&XVC,d$NzQ A-nJD!<uLDUeOCGAvJW#IqrZ');
define('NONCE_KEY',        'o1nB:5 4)+%3-mIG%zk:9?NpKAYRxE:>hp.Hp`;SQ{$58grCLawAXSc)ZJ5D1B36');
define('AUTH_SALT',        '-RXDZ-3:G?yhaE!fV9#:5/*jNX+{J^.9,x:(VS<,]hV2Hi=)/0>P35lGK/4t5s/j');
define('SECURE_AUTH_SALT', '|0-|tvnRG)]T^k ~T_G%U>FWea/AJ-@#2l*EO+tGzGmHXYUavvPVt0FEPU+yZDhh');
define('LOGGED_IN_SALT',   'r^?4<?Vj+B29dMN ,Z5Ox,`5jN^a!ke@$p7jRYlQfd%2fr#6mCw@{$$6uG]Vhlow');
define('NONCE_SALT',       '(?VM rbV*f[~*}q{GskE`2/5$_gmkuJ.#4=(f,<[8): )9><%UEKRw~C%0kyb7Cf');

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
