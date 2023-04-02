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
define('DB_NAME', 'dbname');

/** MySQL database username */
define('DB_USER', 'user');

/** MySQL database password */
define('DB_PASSWORD', 'pwd');

/** MySQL hostname */
define('DB_HOST', 'host');

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
define('AUTH_KEY',         '2tkibpor2arszffopdsbqvrei9irpgjli6rg9e2bqr55of2awnz4lxgqegtyb0sj');
define('SECURE_AUTH_KEY',  'wl7f7iwfghbtfefsgvspbauyqbhiza1xfgrflpqzqf6aygcv4f8cbybgykd8xwq8');
define('LOGGED_IN_KEY',    'fyddrmyiuyjryrstm41ohi66lpmd9yrk4csglcjyc3xaz3hvyderwdfm6e3fcss6');
define('NONCE_KEY',        's9lxtmf2tw1qneiclj1xkeqbd4pn8zxb4d90pbcik7vdclh5vewqlyk207i8csul');
define('AUTH_SALT',        'mtyew3jlr4uzwsh8d6jzf2qblw9tgwafess0hx7npoexqfxaiedslowycqnvabwi');
define('SECURE_AUTH_SALT', 'pslqvy2tbuvbfblbmk8jrm0guumorkqjqddz9nwvfsht4lhhqjvx4nyiiias7qzz');
define('LOGGED_IN_SALT',   'wogrv3e12yi8pd6t8msa6s7hlvrqgrv2yw1ttpoxoaly9c2co9nrckyzrtkgdf18');
define('NONCE_SALT',       'k0ebfbn0aky32yfpsdtoshtewxaliepjmaek3wkwehsw7ale39k1521whufz5qz8');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

define( 'WP_POST_REVISIONS', 3 );

define('WP_HOME','https://stoyanov.loc');
define('WP_SITEURL','https://stoyanov.loc/app');
define('WP_CONTENT_URL', 'https://stoyanov.loc/content');
define('WP_CONTENT_DIR', dirname(__FILE__) . '/content' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');