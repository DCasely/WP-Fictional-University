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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c4qbJoj8BQy654xLlRvQ8anio0EmdXXzOsHYCho5Hgh7NX4OVtUyz4R9+ytJFg+BcIILzutWHZWaiVPvCvVLHQ==');
define('SECURE_AUTH_KEY',  'FunWVOt11dVfLjB0bRkREcKAqmmF1WmjpzqnBA4XKTCf6mAtvbMfvx7EOkvo4aMts2m7nwBDGgow5tkTA8p3uA==');
define('LOGGED_IN_KEY',    '2po+GZnkyHap8i4Zq/hFTpxrRojLToqB7g/tAyCWwyiefk7aA2PNGoYsmjsk6PylR2kcSM1bYkLbg8OunF0dYg==');
define('NONCE_KEY',        'AJ75nIG9cjUOWYEC4I+FY0Fn2+MJdj/X4CG4vZ6NtP8EUBVN82XUPXLvXcqKAJIRHuA9Zsn23MR2LwbLizlCoA==');
define('AUTH_SALT',        'gjWGX2jAOVxmof5UdWO32E304uCmC1ftMvLPWKkTimSOUbLf/5ttVGqARHVy3bZJpRKlDDYKnCNlckTTZuJEyw==');
define('SECURE_AUTH_SALT', 'Ij+v/ge9ZqoiIh/u+akTgO1zQsojUv43TJPcWdvGMZy/P77RWMSooktsgpAM//kisBQXN96w3J4mJ2vh+pbZyQ==');
define('LOGGED_IN_SALT',   'WxCJ0ZLYPcgJVuezi3I+mM8nkzwIIcMk2iI1GEmwJTSpSzXkdnRkyYgpZ64nzJqxccq46T8jdcHuaIxuwSeqFQ==');
define('NONCE_SALT',       'GumCnq+Ys5ExXjiNATjO/ekCu58TZsISgEd05/pxImShn3wv37VEatd4SuUTdhIggrwHJ/xqXau9IfFT5Oow3A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
